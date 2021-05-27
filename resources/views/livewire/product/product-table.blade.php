<div>

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
            <option value="{{$item->id}}">{{$item->type}}-{{$item->madein}}-{{$item->thickness}}</option>
        @endforeach
    </select>
   
    <x-button wire:click="exportExcel" class="bg-green-500">Export To Excel</x-button>
    <x-button wire:click="resetSearch" class="border border-green-500">Reset</x-button>
   </div>
<table class="rounded-t-lg m-5 w-5/6 mx-auto bg-gray-800 text-gray-200 overflow-scroll" wire:init='loadfunction' >
  <tr class="text-left border-b border-gray-300">
    <th class="px-4 py-3">No</th>
    <th class="px-4 py-3">Product Name</th>
    <th class="px-4 py-3">Color</th>
    <th class="px-4 py-3">Size</th>
    <th class="px-4 py-3">Category</th>
    <th class="px-4 py-3">Action</th>
  </tr>
   @forelse ($products as $index=>$item)
            <tr class="bg-gray-700 border-b border-gray-600">
                <td class="px-4 py-3">{{$index+1}}</td>
                <td>{{$item->name}} </td>
                <td>{{$item->size->size}} </td>
                <td>{{$item->category->type}}-{{$item->category->madein}}-{{$item->category->thickness}} </td>
                <td>{{$item->color->color}} </td>
                <td>
                
                   
                    <button 
                    wire:click="delete({{$item->id}})"
                    class="px-4 py-3 bg-red-500 text-white my-4 rounded shadow hover:bg-transparent hover:border-red-500 border border-red-600">Delete</button>
                </td>
            </tr>            
                @empty
                <tr>
                    <td class="text-center text-3xl" colspan="6">No entries.</td></tr>
                
 @endforelse

</table>
<div class="mx-auto">
    {{$loadstate?$products->links():''}}
 </div>
</div>
     
</div>
