   
<div  x-data="{showcart:false}">
      <button class="fixed"  @click="showcart=true">
          <div class=" ">
                    <div slot="icon" class="relative">
                        <div class="absolute text-xs rounded-full -mt-1 -mr-2 px-1 font-bold top-0 right-0 bg-red-700 text-white">      
                                          {{count($cartItems)}}
                            </div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-cart w-6 h-6 mt-2">
                            <circle cx="9" cy="21" r="1"></circle>
                            <circle cx="20" cy="21" r="1"></circle>
                            <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
                        </svg>
                    </div>
                    
                </div>
        
  </button>
    
    @slot('header')
    <div class="header flex justify-between">
        <div class="uppercase tracking-wide">product showroom</div>

    </div>
    @endslot
    {{-- <input class="" type="checkbox"  wire:model="retail" /> Latt Kar --}}
    <label class="flex px-10 lg:mx-20 mt-10 justify-start items-start" >
  <div class="bg-white border-2 rounded border-gray-400 w-6 h-6 flex flex-shrink-0 justify-center items-center mr-2 focus-within:border-blue-500">
    <input type="checkbox"   wire:model="retail" class="opacity-0 absolute">
    <svg class="fill-current hidden w-4 h-4 text-green-500 pointer-events-none" viewBox="0 0 20 20"><path d="M0 11l2-2 5 5L18 3l2 2L7 18z"/></svg>
  </div>
  <div class="select-none">Retail Mode</div>
</label>
  

    <div  class="m-5 w-5/6 mx-auto">
    <input type="search" class="form-input rounded-md" wire:model="search"/>
    <select class="form-select" wire:model="colorsearch">
         @if (!$colorsearch)
            <option   value="0">Choose Color</option>
            
        @endif
        @foreach ($colors as $item)
            <option   value="{{$item->id}}">{{$item->color}}</option>
        @endforeach
    </select>
    <select class="form-select" wire:model="categorysearch">
         @if (!$categorysearch)
            <option   value="0">Choose Category</option>
            
        @endif
        @foreach ($categories as $item)
            <option   value="{{$item->id}}">{{$item->type}}-{{$item->madein}}-{{$item->thickness}}</option>
        @endforeach
    </select>
    <x-button wire:click="resetSearch" class="border border-green-500">Reset</x-button>

</div>
   
    <div  class="lg:mx-20 md:mx-10 my-10 bg-white mt-10  shadow flex justify-center" >
        <div class="grid gird-cols-2 xs:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 py-2 px-2 "
            wire:init='loadfunction'
        >
           @forelse ($products as $item)
                 <livewire:product.product-cart :product="$item" :price="$retail?$item->retail_price:$item->price"  key="{{now()}}"/>     
           @empty
                    <div class="text-3xl flex justify-center max-w-full">
                       @if (!$loadstate)
                             <div class="text-3xl flex justify-center max-w-full my-4">
                        <svg class="animate-spin -ml-1 mr-3 h-10 w-10 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="red" stroke-width="4"></circle>
                            <path class="opacity-75" fill="red" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                            </svg>
                    </div>
                        @else
                            No Items Found...
                        @endif
                    </div>
           @endforelse
          
           
        </div>
    <div x-cloak  x-show="showcart">
        
        @include('livewire.product.shoppingcart')
    </div>            

 
        
    </div>
<div class="my-4 w-5/6 mx-auto">
               {{$loadstate?$products->links():''}}
           </div>
</div>

