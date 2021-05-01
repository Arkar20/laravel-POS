<div>
  <div class="search m-5 w-5/6 mx-auto flex justify-between text-gray-200">
      <input type="search" 
      wire:model='searchkeyword'
      placeholder="search by Ph Num,Name,Company"
      class=" w-1/2 bg-drabya-gray text-gray-900 border-gray-500 appearance-none border p-4 font-light leading-tight focus:outline-none focus:shadow-outline"/>
<x-button wire:click="exportExcel"> Export To Excel</x-button>
  
    </div>
<table class="rounded-t-lg m-5 w-5/6 mx-auto bg-gray-800 text-gray-200" >
  <tr class="text-left border-b border-gray-300">
    <th class="px-4 py-3">No</th>
    <th class="px-4 py-3">Customer </th>
    <th class="px-4 py-3">Ph-Num1</th>
    <th class="px-4 py-3">Ph-Num2</th>
    <th class="px-4 py-3">Company</th>
    <th class="px-4 py-3">Address</th></th>
  </tr>
  
   @forelse ($customers as $index=>$item)
            <tr class="bg-gray-700 border-b border-gray-600">
                <td class="px-4 py-3">{{$index+1}}</td>
                <td>{{$item->name}} </td>
                <td>{{$item->phnum1}} </td>
                <td>{{$item->phnum2}} </td>
                <td>{{$item->company}} </td>
                <td>{{$item->address}} </td>
                
              
            </tr>            
                @empty
                <tr>No entries.</tr>
                
 @endforelse
  
</table>
<div class="flex justify-center">
  {{-- {{$customers->links()}} --}}
</div>
</div>
