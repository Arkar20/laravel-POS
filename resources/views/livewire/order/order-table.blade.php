<div>

   <div  class="m-5 w-5/6 mx-auto">
    <input type="search" class="form-input rounded-md" wire:model="search"/>
    <input type="date" class="form-input rounded-md" wire:model="datesearch"/>
     <select class="form-select" wire:model="sizesearch">
        @if (!$sizesearch)
            <option   value="0">Choose size</option>
            
        @endif
        @foreach ($sizes as $item)
            <option   value="{{$item->id}}">{{$item->size}}</option>
        @endforeach
    </select>

   
    <x-button wire:click="exportExcel" class="bg-green-500">Export To Excel</x-button>
    <x-button wire:click="resetSearch" class="border border-green-500">Reset</x-button>
   </div>
   {{$datesearch}}
<table class="rounded-t-lg m-5 w-5/6 mx-auto bg-gray-800 text-gray-200" >
  <tr class="text-left border-b border-gray-300">
    <th class="px-4 py-3">Order ID</th>
    <th class="px-4 py-3">Customer Name</th>
    <th class="px-4 py-3">Customer Phnum</th>
    <th class="px-4 py-3">Customer Address</th>
    <th class="px-4 py-3">Product size</th>
    <th class="px-4 py-3">Product category</th>
    <th class="px-4 py-3">Product Madein</th>
    <th class="px-4 py-3">Order Quantity</th>
    <th class="px-4 py-3">Delivery</th>
    <th class="px-4 py-3">Total Cost</th>
    
    <th class="px-4 py-3">Action</th>
  </tr>
   @forelse ($orders as $index=>$item)
            <tr class="bg-gray-700 border-b border-gray-600">
                <td class="px-4 py-3">
                    <a href="/manage-order/.{{$item->order->id}}">
                            ORD--00{{$item->order->id}}         
                    </a>
                    </td>
                <td class="px-4 py-3">{{$item->order->customer->name}}</td>
                <td class="px-4 py-3">{{$item->order->customer->phnum1}}</td>
                <td class="px-4 py-3">{{$item->order->customer->address}}</td>
                <td class="px-4 py-3">{{$item->product->size->size}}</td>
                <td class="px-4 py-3">{{$item->product->category->type}}
                    {{$item->product->color->color}}-{{$item->product->category->thickness}}
                </td>
                <td class="px-4 py-3">{{$item->product->category->madein}}</td>
                <td class="px-4 py-3">{{$item->qty}}</td>
                <td class="px-4 py-3">{{$item->order->delivery?$item->order->delivery->price:'Free'}}</td>
                <td class="px-4 py-3">{{$item->qty*$item->product->price}}MMK</td>
                <td class="px-4 py-3">
                    {!!$item->order->status?
                    '<p class="p-2 bg-green-500 rounded-sm shadow-md">Done</p>'
                    :'<p class="p-2 bg-red-500 rounded-sm shadow-md">Pending</p>'!!}</td>
                {{-- <td class="px-4 py-3">{{$item->customer->phnum1}}</td>
                <td class="px-4 py-3">{{$item->customer->address}}</td> --}}

                
            </tr>
                @empty
                <tr>
                    <td class="text-center text-3xl" colspan="6">No entries.</td>
                </tr>
                
 @endforelse


  
</table>
</div>
     <div class="mx-auto">
    {{-- {{$products->links()}} --}}
 </div>
</div>
