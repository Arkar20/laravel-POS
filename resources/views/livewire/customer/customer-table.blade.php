<div>
  <div class="search m-5 w-5/6 mx-auto flex justify-between text-gray-200">
      <input type="search" 
      wire:model='searchkeyword'
      placeholder="search by Ph Num,Name,Company"
      class=" w-1/2 bg-drabya-gray text-gray-900 border-gray-500 appearance-none border p-4 font-light leading-tight focus:outline-none focus:shadow-outline"/>
<x-button wire:click="exportExcel"> Export To Excel</x-button>
  
    </div>
<table class="rounded-t-lg m-5 w-5/6 mx-auto bg-gray-800 text-gray-200" wire:init='loadFunction'>
  <tr class="text-left border-b border-gray-300">
    <th class="px-4 py-3">No</th>
    <th class="px-4 py-3">Customer </th>
    <th class="px-4 py-3">Ph-Num1</th>
    <th class="px-4 py-3">Ph-Num2</th>
    <th class="px-4 py-3">Company</th>
    <th class="px-4 py-3">Address</th>
    <th class="px-4 py-3">Action</th>
  </tr>
  
   @forelse ($customers as $index=>$item)
            <tr class="bg-gray-700 border-b border-gray-600">
                <td class="px-4 py-3">{{$index+1}}</td>
                <td>{{$item->name}} </td>
                <td>{{$item->phnum1}} </td>
                <td>{{$item->phnum2}} </td>
                <td>{{$item->company}} </td>
                <td>{{$item->address}} </td>
                <td><x-button wire:click="edit({{$item->id}})"> Edit</x-button> </td>
                
              
            </tr>            
                @empty
                <tr>
                  <td colspan="7">
                      <div class="flex justify-center my-4">
                        <svg class="animate-spin -ml-1 mr-3 h-10 w-10 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
          <circle class="opacity-25" cx="12" cy="12" r="10" stroke="red" stroke-width="4"></circle>
          <path class="opacity-75" fill="red" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
        </svg>
                      </div>
                  </td>
                </tr>
                
 @endforelse
  
</table>
<div class="flex justify-center">
  {{$loadstate?$customers->links():''}}
</div>
</div>
