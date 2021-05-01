
<div x-data="{showUpdatebtn:false}">
    @slot('header')
    Size Registration
        
    @endslot
    <form 
         wire:submit.prevent='add'
        
         class="mx-20 flex justify-center px-4 py-4 bg-white mt-10 rounded shadow">
        <div>
            <label for="size" class="block">Size</label>
            <input type="text" id="size" class="form-input rounded-md" wire:model="size"/>


<button type="submit"  class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150">
        <svg wire:loading="add" wire:target="add" class="animate-spin -ml-1 mr-3 h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
          <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
          <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
        </svg>
        Register
      </button>   
               <x-button type="button" x-show="showUpdatebtn" wire:click="update({{$size}})">Update</x-button>
        @error('size')
                        <p class="text text-red-600">{{$message}}</p>

        @enderror
        </div>
    </form>



<div>
   
<table class="rounded-t-lg m-5 w-5/6 mx-auto bg-gray-800 text-gray-200">
  <tr class="text-left border-b border-gray-300">
    <th class="px-4 py-3">No</th>
    <th class="px-4 py-3">Size</th>
    <th class="px-4 py-3">Created_at</th>
    <th class="px-4 py-3">Updated At</th>
    <th class="px-4 py-3">Action</th></th>
  </tr>
   @forelse ($sizes as $index=>$item)
            <tr class="bg-gray-700 border-b border-gray-600">
                <td class="px-4 py-3">{{$index+1}}</td>
                <td>{{$item->size}} </td>
                <td>{{$item->created_at}} </td>
                <td>{{$item->updated_at}} </td>
                <td>
                     <button
                     wire:click="edit({{$item->id}})"
                     @click="showUpdatebtn=true"
                     class="px-4 py-3 bg-blue-500 text-white my-4 rounded shadow hover:bg-transparent hover:border-blue-500 border border-blue-600">Edit</button>                   </form>
                
                   
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
    {{$sizes->links()}}
 </div>
</div>
