
<div x-data="{showUpdatebtn:false}">
    @slot('header')
    Product Registration
        
    @endslot
    
    <form 
         wire:submit.prevent='add'
         wire:init='loadfunction'
         class="lg:mx-20 sm:mx-10 flex justify-center px-4 py-4 bg-white mt-10 rounded shadow">
        
       
         <div>
            
            @foreach ($errors->all() as $error)
                 <div class="mx-4 my-2">
                    {{$error}}
                </div>
            @endforeach

           
            <label for="size" class="block">Product Name</label>
            <input type="text" class="form-input px-4 mx-1 rounded-sm" id="size" wire:model.defer="name"/>
           
            <label for="size" class="block">Choose Size</label>
           <select class="form-select mx-1 rounded-sm" wire:model.defer='size'>
                              <option>Choose Size</option>

               @foreach ($sizes as $item)
                   <option value="{{$item->id}}">{{$item->size}}</option>
               @endforeach
           </select>
           
            <label for="color" class="block">Choose Color</label>
           <select class="form-select  mx-1 rounded-sm" 
            wire:model.defer='color'>
                <option>Choose Color</option>

               @foreach ($colors as $item)
                   <option value="{{$item->id}}">{{$item->color}}</option>
               @endforeach
           </select>

            <label for="category" class="block">Choose Category</label>
           <select class="form-select px-4 mx-1 rounded-sm" 
           wire:model.defer='category'>
               <option>Choose category</option>
             
               @foreach ($categories as $item)
                   <option value="{{$item->id}}">{{$item->type}}-{{$item->madein}}-{{$item->thickness}}</option>
               @endforeach
           </select>
            <label for="category" class="block">Price</label>
           <input type="number" class="form-input px-4 mx-1 rounded-sm" wire:model.lazy="price" min="0/>

            <label for="category" class="block">Retail Price</label>
           <input class="form-input px-4 mx-1 rounded-sm" wire:model="retail_price" min="0"/>
            <label for="category" class="block">Total Quantity</label>
           <input class="form-input px-4 mx-1 rounded-sm" wire:model="totalqty"/>
<br>
           <label>Description</label>
           <br>
           <textarea class="form-textarea px-4  rounded-sm"  wire:model.defer="desc"></textarea>
<button type="submit"  

class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150">
        <svg wire:loading="add" wire:target="add" class="animate-spin -ml-1 mr-3 h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
          <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
          <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
        </svg>
        Register
      </button>   
               {{-- <x-button type="button" x-show="showUpdatebtn" wire:click="update({{$product}})">Update</x-button> --}}
        {{-- @error('product')
                        <p class="text text-red-600">{{$message}}</p>

        @enderror --}}
        </div>
    </form>



<div>
  @if ($loadstate)
        <livewire:product.product-table :sizes="$sizes" :colors="$colors" :categories="$categories"/>
      
  @endif

</div>
