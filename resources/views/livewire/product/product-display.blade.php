<div>
    @slot('header')
    <div class="header flex justify-between">
        <div class="uppercase tracking-wide">product showroom</div> 
   

    </div>
    @endslot
     <x-button wire:click="showCart">
        {{count($cartItems)}}
            <i class="fas fa-shopping-cart"></i>  
  </x-button>
     <x-button wire:click="clearCart">
            Clear Cart
        
  </x-button>

    <div  class="m-5 w-5/6 mx-auto">
    <input type="search" class="form-input rounded-md" wire:model="search"/>
    <select class="form-select" wire:model="colorsearch">
        @foreach ($colors as $item)
            <option   value="{{$item->id}}">{{$item->color}}</option>
        @endforeach
    </select>
    <select class="form-select" wire:model="categorysearch">
        @foreach ($categories as $item)
            <option   value="{{$item->id}}">{{$item->type}}-{{$item->madein}}-{{$item->thickness}}</option>
        @endforeach
    </select>
    <x-button wire:click="resetSearch" class="border border-green-500">Reset</x-button>

</div>
   
    <div class="lg:mx-20 md:mx-10 my-10 bg-white mt-10  shadow flex justify-start" >
        <div class="grid gird-cols-1 md:grid-cols-2 py-2 px-2 ">
           @forelse ($products as $item)
                 <livewire:product.product-cart :product="$item" key="{{now()}}"/>     
           @empty
                    <div class="text-3xl ">There are no Itmes</div>
           @endforelse
           
           
        </div>
        
        @include('livewire.product.shoppingcart')
    </div>
</div>
