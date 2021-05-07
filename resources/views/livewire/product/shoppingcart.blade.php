<!-- This example requires Tailwind CSS v2.0+ -->
<div  class="fixed z-10 inset-0 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
  <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
    <!--
      Background overlay, show/hide based on modal state.

      Entering: "ease-out duration-300"
        From: "opacity-0"
        To: "opacity-100"
      Leaving: "ease-in duration-200"
        From: "opacity-100"
        To: "opacity-0"
    -->
    <div 
    @click="showcart=false"
    class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>

    <!-- This element is to trick the browser into centering the modal contents. -->
    <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>

    <!--
      Modal panel, show/hide based on modal state.

      Entering: "ease-out duration-300"
        From: "opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
        To: "opacity-100 translate-y-0 sm:scale-100"
      Leaving: "ease-in duration-200"
        From: "opacity-100 translate-y-0 sm:scale-100"
        To: "opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
    -->
    <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
      <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
        
          <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
            <div class="flex flex-row-reverse ml-2 w-full">
                    <div slot="icon" class="relative">
                        <div class="absolute text-xs rounded-full -mt-1 -mr-2 px-1 font-bold top-0 right-0 bg-red-700 text-white">      
                                          {{count($cartItems)}}
                            </div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-cart w-6 h-6 mt-2">
                            <circle cx="9" cy="21" r="1"></circle>
                            <circle cx="20" cy="21" r="1"></circle>
                            <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
                        </svg>
                    </div>
                    
                </div>
            <div class="mt-2 ">
            @forelse(\Cart::content() as $cart)
                           <div class="p-2 flex bg-white hover:bg-gray-100 cursor-pointer border-b border-gray-100 w-full" >
                        <div class="flex-auto text-sm w-full">
                            <div class="font-bold">{{$cart->name}}</div>
                            <div class="text-gray-400">Qt: {{$cart->qty}}</div>
                            <div class="text-gray-400">Price: {{$cart->price}}</div>
                        </div>
                        
                        <div class="flex flex-col w-18 font-medium items-end">
                            <button wire:click="removeCart('{{$cart->rowId}}')"  class="w-4 h-4 mb-6 hover:bg-red-200 rounded-full cursor-pointer text-red-700">
                                <svg   xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2 ">
                                    <polyline points="3 6 5 6 21 6"></polyline>
                                    <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                    <line x1="10" y1="11" x2="10" y2="17"></line>
                                    <line x1="14" y1="11" x2="14" y2="17"></line>
                                </svg>
                            </button>
                           MMK{{$cart->subtotal}}</div>
                    </div>
                   @empty 
                   <div class="my-4 mx-2 text-lg text-center">There are no items in the cart.</div>
                    @endforelse
                   
            </div>
            <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
        <button 
        @click="showcart=false"
        type="button" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-red-600 text-base font-medium text-white hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 sm:ml-3 sm:w-auto sm:text-sm">
          Close
        </button>
        <a  href="{{ route('checkout') }}" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
          Check Out
        </a>
    </div>
          </div>
        </div>
      </div>
      
  </div>
</div>
{{-- 
<div class="cart-section position-absolute top-10" >
                <div class="p-5 cart " >
    <div class="flex h-64 justify-center">
        <div class="relative ">
            <div class="flex flex-row cursor-pointer truncate p-2 px-4  rounded">
                <div></div>
                <div class="flex flex-row-reverse ml-2 w-full">
                    <div slot="icon" class="relative">
                        <div class="absolute text-xs rounded-full -mt-1 -mr-2 px-1 font-bold top-0 right-0 bg-red-700 text-white">      
                                          {{count($cartItems)}}
                            </div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-cart w-6 h-6 mt-2">
                            <circle cx="9" cy="21" r="1"></circle>
                            <circle cx="20" cy="21" r="1"></circle>
                            <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
                        </svg>
                    </div>
                </div>
            </div>
            <div class="absolute w-full  rounded-b border-t-0 z-10">
                <div class="shadow-xl w-64">
                   @foreach (\Cart::content() as $cart)
                           <div class="p-2 flex bg-white hover:bg-gray-100 cursor-pointer border-b border-gray-100" style="">
                        <div class="p-2 w-12"><img src="https://dummyimage.com/50x50/bababa/0011ff&amp;text=50x50" alt="img product"></div>
                        <div class="flex-auto text-sm w-32">
                            <div class="font-bold">{{$cart->name}}</div>
                            <div class="text-gray-400">Qt: {{$cart->qty}}</div>
                            <div class="text-gray-400">Price: {{$cart->price}}</div>
                        </div>
                        
                        <div class="flex flex-col w-18 font-medium items-end">
                            <button wire:click="removeCart('{{$cart->rowId}}')"  class="w-4 h-4 mb-6 hover:bg-red-200 rounded-full cursor-pointer text-red-700">
                                <svg   xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2 ">
                                    <polyline points="3 6 5 6 21 6"></polyline>
                                    <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                    <line x1="10" y1="11" x2="10" y2="17"></line>
                                    <line x1="14" y1="11" x2="14" y2="17"></line>
                                </svg>
                            </button>
                           MMK{{$cart->subtotal}}</div>
                    </div>
                   @endforeach
                    <div class="p-4 justify-center flex">
                        <a href="{{ route('checkout') }}" class="text-base  undefined  hover:scale-110 focus:outline-none flex justify-center px-4 py-2 rounded font-bold cursor-pointer 
        hover:bg-teal-700 hover:text-teal-100 
        bg-teal-100 
        text-teal-700 
        border duration-200 ease-in-out 
        border-teal-600 transition">Checkout MMK {{\Cart::priceTotal()}}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="h-32"></div>
</div>
            </div> --}}