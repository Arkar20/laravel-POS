
<div x-data="{showUpdatebtn:false}">
    @slot('header')
    Delivery Fees Registration
        
    @endslot
    
    <form 
         wire:submit.prevent='add'
         class="lg:mx-20 sm:mx-10 flex justify-center px-4 py-4 bg-white mt-10 rounded shadow">
        
       
         <div>
            
            @foreach ($errors->all() as $error)
                 <div class="mx-4 my-2 ">
                
                <p class="text-red-400 bg-red-600 text-sm">
                    {{$error}}
</p>
                </div>
            @endforeach
    
            <label for="township" class="block">Township</label>
           <input class="form-input px-4 mx-1 rounded-sm" wire:model="township"/>
           
          
            <label for="price" class="block">price</label>
           <input class="form-input px-4 mx-1 rounded-sm" type="number" wire:model="price"/>
           
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
   
<table class="rounded-t-lg m-5 w-5/6 mx-auto bg-gray-800 text-gray-200">
  <tr class="text-left border-b border-gray-300">
    <th class="px-4 py-3">No</th>
    <th class="px-4 py-3">Product Name</th>
    <th class="px-4 py-3">Color</th>
   
    <th class="px-4 py-3">Action</th>
  </tr>
   @forelse ($deliveries as $index=>$item)
            <tr class="bg-gray-700 border-b border-gray-600">
                <td class="px-4 py-3">{{$index+1}}</td>
                <td>{{$item->township}} </td>
                <td>{{$item->price}} </td>
                <td>
                
                    <button 
                    wire:click="delete({{$item->id}})"
                    class="px-4 py-3 bg-red-500 text-white my-4 rounded shadow hover:bg-transparent hover:border-red-500 border border-red-600">Delete</button>
                </td>
            </tr>            
                @empty
                <tr>No entries.</tr>
                
 @endforelse


  
</table>
</div>
     <div class="mx-auto">
    {{-- {{$sizes->links()}} --}}
 </div>
</div>
