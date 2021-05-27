<div>
 

   <div  class="m-5 w-5/6 mx-auto">
    <input type="search" class="form-input rounded-md" wire:model="search"/>
    <input type="date" class="form-input rounded-md" wire:model="datesearch"/>
    
<div class="my-2">

    <x-button wire:click="exportToExcel" class="bg-green-500">Export To Excel</x-button>
    {{-- <x-button wire:click="resetSearch" class="border border-green-500">Reset</x-button> --}}
</div>
   
   </div>
   {{-- {{$datesearch}} --}}
   @slot('header')
       <div></div>
   @endslot
<table class="rounded-t-lg m-5 w-5/6 mx-auto bg-gray-800 text-gray-200">
  <tr class="text-left border-b border-gray-300">
    <th class="px-4 py-3">~</th>
    <th class="px-4 py-3">Order ID</th>
    <th class="px-4 py-3">Customer Name</th>
    <th class="px-4 py-3">Customer Phnum</th>
    <th class="px-4 py-3">Customer Address</th>
    <th class="px-4 py-3">Product</th>
    <th class="px-4 py-3">Delivery</th>
    <th class="px-4 py-3">Total Cost</th>
    <th class="px-4 py-3">Date</th>
    <th class="px-4 py-3">Status</th>
    <th class="px-4 py-3">Action</th>
  </tr>
   @forelse ($orders as $index=>$order)
            <tr class="bg-gray-700 border-b border-gray-600">
                <td class="px-4 py-3">
                           <input type="checkbox"  value="{{$order->id}}" wire:model="selectedItems" />       
                        </td>
                <td class="px-4 py-3">
                            ORD--00{{$order->id}}         
                    </td>
                <td class="px-4 py-3">{{$order->customer->name}}</td>
                <td class="px-4 py-3">{{$order->customer->phnum1}}</td>
                <td class="px-4 py-3">{{$order->customer->address}}</td>
                <td>
                    @foreach ($order->cart as $cart)
                       
                           {{ $cart['name']}}-{{$cart['qty']}}
                    @endforeach
                </td>
                <td class="px-4 py-3">{{$order->delivery?$order->delivery->price:'Free'}}</td>
                <td class="px-4 py-3">{{$order->total_cost}}MMK</td>
                <td class="px-4 py-3">{{$order->order_date}}</td>
                <td class="px-4 py-3">
                    {!!$order->status?
                    '<p class="p-2 bg-green-500 rounded-sm shadow-md">Done</p>'
                    :'<p class="p-2 bg-red-500 rounded-sm shadow-md">Pending</p>'!!}</td>
                {{-- <td class="px-4 py-3">{{$customer->phnum1}}</td>
                <td class="px-4 py-3">{{$customer->address}}</td> --}}
                
                <td class="px-4 py-3">
                   @if ($order->status)
                       <button>
                           <a href="{{ route('voucher', $order->id) }}">View VOucher</a>
                       </button>
                       <button wire:click="deleteOrder({{$order->id}})">Delete</button>
                   @else 
                       <button>Confirm</button>
                   @endif
                </td>
                
            </tr>
                @empty
                <tr>
                    {{-- <td class="text-center text-3xl" colspan="11">
                        @if (!$loadingstate)
                             <div class="text-3xl flex justify-center max-w-full my-4">
                        <svg class="animate-spin -ml-1 mr-3 h-10 w-10 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="red" stroke-width="4"></circle>
                            <path class="opacity-75" fill="red" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                            </svg>
                    </div>
                        @else
                            No Items Found...
                        @endif
                    </td> --}}
                </tr>
                
                
 @endforelse
</table>
<div class="mx-auto">
          {{-- {{$loadingstate?$orders->links():''}} --}}

</div>
</div>
</div>
