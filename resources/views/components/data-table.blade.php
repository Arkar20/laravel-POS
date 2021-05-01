<div>
   
<table class="rounded-t-lg m-5 w-5/6 mx-auto bg-gray-800 text-gray-200">
  <tr class="text-left border-b border-gray-300">
    <th class="px-4 py-3">No</th>
    <th class="px-4 py-3">Size</th>
    <th class="px-4 py-3">Created_at</th>
    <th class="px-4 py-3">Updated At</th>
    <th class="px-4 py-3">Action</th></th>
  </tr>
   @forelse ($items as $index=>$item)
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

 <div>
    {{$items->links()}}
 </div>
  
</table>
</div>