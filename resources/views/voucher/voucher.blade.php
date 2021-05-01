<!DOCTYPE html>
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Voucher</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <script src="{{ asset('js/app.js') }}" defer></script>
        
        
    </head>
<body class="bg-white">
    <div class="max-w-7xl px-4 py-6 sm:px-6 lg:px-8 bg-white shadow">
      <div class="relative inline-block mb-4">
            <h1 class="text-4xl">Su Waddy</h1>
            <h3 class="absolute" style="right:-120px;bottom:0px;" >paper production</h3>
      </div>
       <p class="mb-2">Address:Nisi dolore elit pariatur tempor adipisicing aliquip incididunt est quis.</p>
<p class="inline-block ml-2">Phone-Number(1):095115176</p>
<p class="inline-block ml-2">Phone-Number(2):09452541030</p>
{{-- <p class="inline-block ml-2">Phone-Number(3):09965115176</p> --}}

       </div>
   <header class="bg-white shadow mt-2">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                   <table class="rounded-t-lg m-5 w-5/6 mx-auto border border-gray-900 text-gray-900 rounded-sm">
  <tr class="text-left border-b border-gray-300">
    <th class="px-4 py-3">Name</th>
    <th class="px-4 py-3">Quantity</th>
    <th class="px-4 py-3">Price</th>
    <th class="px-4 py-3">Total</th>

  
  </tr>
   @forelse ($order->cart as $index=>$item)
            <tr class=" border-b border-black">
                <td class="px-4 py-3">{{$item['name']}} </td>
                <td class="px-4 py-3">{{$item['qty']}} </td>
                <td class="px-4 py-3">{{$item['price']}} </td>
                <td class="px-4 py-3">{{$item['subtotal']}} </td>
                
            </tr>            
                @empty
                <tr>No entries.</tr>
                
 @endforelse
 @if ($order->delivery!==null)     
<tr>
    <td class=" px-4 py-3 text-right" colspan="3">Delivery Cost:</td>
    <td class="  px-4 py-3 " >{{$order->delivery->price}} ({{$order->delivery->township}})</td>
</tr>
 @else
<tr>
    <td class=" px-4 py-3 text-right" colspan="3">Delivery Cost:</td>
    <td class="  px-4 py-3 " >Free</td>
</tr>
@endif
<tr>
    <td class=" px-4 py-3 text-right" colspan="3">SuTotal Cost:</td>
    <td class="  px-4 py-3 " >{{$order->total_cost}}MMK</td>
</tr>
</table>
                </div>
            </header>
            <div class="mx-20 border border-black my-3 px-3 ">
                Cillum ex nostrud elit consectetur laborum duis amet aliquip consequat eu id. Dolore magna ad esse nostrud. Ea elit excepteur est in sit enim ad esse enim deserunt reprehenderit officia. Labore esse aute dolore sint do elit culpa eiusmod.
            </div>
            
<p class="text-center text-xl p-3">Thank You For Your Purchase.</p>
<div class="absolute bottom-10">
    <div class="mx-10">
        Signature: -------------------
    </div>
</div>
</body>
</html>