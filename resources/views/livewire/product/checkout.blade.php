<div>
    @slot('header')
       Checkout 
    @endslot
    <!-- component -->
<div class="flex justify-center my-6">
  <div class="flex flex-col w-full p-8 text-gray-800 bg-white shadow-lg pin-r pin-y md:w-4/5 lg:w-4/5">
    <div class="flex-1">
      <table class="w-full text-sm lg:text-base" cellspacing="0">
        <thead>
          <tr class="h-12 uppercase">
            <th class="text-left">Product</th>
            <th class="lg:text-right text-left pl-5 lg:pl-0">
              <span class="lg:hidden" title="Quantity">QTY</span>
              <span class="hidden lg:inline">Quantity</span>
            </th>
            <th class="hidden text-right md:table-cell">Unit price</th>
            <th class="text-right">Total price(MMK)</th>
          </tr>
        </thead>
        <tbody>
           @foreach (\Cart::content() as $cart)
                <tr>
                    <td>
                    <a href="#">
                        <p class="mb-2 md:ml-4">{{$cart->name}}</p>
                       
                    </a>
                    </td>
                    <td class="justify-center md:justify-end md:flex mt-6">
                    <div class="w-20 h-10">
                        <div class="relative flex flex-row w-full h-8">
                        <p  
                        class=" font-semibold text-center text-gray-700  outline-none focus:outline-none hover:text-black focus:text-black" />
                            {{$cart->qty}}
                    </p>    
                    </div>
                    </div>
                    </td>
                    <td class="hidden text-right md:table-cell">
                    <span class="text-sm lg:text-base font-medium">
                       {{$cart->price}}
                    </span>
                    </td>
                    <td class="text-right">
                    <span class="text-sm lg:text-base font-medium">
                         {{$cart->subtotal}}
                    </span>
                    </td>
                </tr> 
           @endforeach
          
          
        </tbody>
      </table>
       
      <hr class="pb-6 mt-6">
       @error('customer')
           <p>Customer has to choose</p>
             
           @enderror
      <div class="my-2 mx-2 lg:flex">
        
        <div class="lg:px-2 lg:w-1/2">
          
        
           <!-- livewire customer component -->
           <livewire:customer.customer-section />
         
           <!-- livewire customer component -->
        </div>
        <div class="lg:px-2 lg:w-1/2">
          <div class="p-4 bg-gray-100 rounded-full">
            <h1 class="ml-2 font-bold uppercase">Order Details</h1>
          </div>
          <div class="p-4">
              <div class="flex justify-between border-b">
                <div class="lg:px-4 lg:py-2 m-2 text-lg lg:text-xl font-bold text-center text-gray-800">
                  Subtotal
                </div>
                <div class="lg:px-4 lg:py-2 m-2 lg:text-lg font-bold text-center text-gray-900">
                  MMK {{\Cart::subtotal()}}
                </div>
              </div>
                <div class="flex justify-between pt-4 border-b ">
                <div class="lg:px-4 lg:py-2 m-2 text-lg lg:text-xl font-bold text-center text-gray-800">
                 DElivery Fees
                </div>
                <div class="lg:px-4 lg:py-2 m-2 lg:text-lg font-bold text-center text-gray-900 ">
                  <select class="form-select w-full mr-auto">
                     <option value='0'  wire:click="calTotalCost()" selected>Free</option>
                     @foreach (App\Models\Delivery::all() as $item)
                     <option wire:click="calTotalCost('{{$item->id}}')" >{{$item->township}}-{{$item->price}}MMK</option>
                     @endforeach
                   </select>
                </div>
                 
                </div>
                <div class="flex justify-between pt-4 border-b ">
                <div class="lg:px-4 lg:py-2 m-2 text-lg lg:text-xl font-bold text-center text-gray-800">
                Order Date
                </div>
                <div class="lg:px-4 lg:py-2 m-2 lg:text-lg font-bold text-center text-gray-900 ">
                 <input type="date"  wire:model="date" class="form-input"/>
                </div>
                 
                </div>
                <div class="flex justify-between pt-4 border-b ">
                <div class="lg:px-4 lg:py-2 m-2 text-lg lg:text-xl font-bold text-center text-gray-800">
                Status
                </div>
                <div class="lg:px-4 lg:py-2 m-2 lg:text-lg font-bold text-center text-gray-900 ">
                 <div class="relative inline-block w-10 mr-2 align-middle select-none transition duration-200 ease-in">
    <input type="checkbox" name="toggle" wire:model="status" id="toggle" class="toggle-checkbox absolute block w-6 h-6 rounded-full bg-white border-4 appearance-none cursor-pointer"/>
    <label for="toggle" class="toggle-label block overflow-hidden h-6 rounded-full bg-gray-300 cursor-pointer"></label>
</div>
                </div>
                 
                </div>
                <div class="flex justify-between pt-4 border-b">
                  <div class="lg:px-4 lg:py-2 m-2 text-lg lg:text-xl font-bold text-center text-gray-800">
                    New Subtotal
                  </div>
                  <div class="lg:px-4 lg:py-2 m-2 lg:text-lg font-bold text-center text-gray-900">
                   {{$totalcost}}MMK
                  </div>
                </div>
               
         
              <a wire:click="add"
              href="#">
                <button

                class="flex justify-center w-full px-10 py-3 mt-6 font-medium text-white uppercase bg-gray-800 rounded-full shadow item-center hover:bg-gray-700 focus:shadow-outline focus:outline-none">
                  <svg aria-hidden="true" data-prefix="far" data-icon="credit-card" class="w-8" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path fill="currentColor" d="M527.9 32H48.1C21.5 32 0 53.5 0 80v352c0 26.5 21.5 48 48.1 48h479.8c26.6 0 48.1-21.5 48.1-48V80c0-26.5-21.5-48-48.1-48zM54.1 80h467.8c3.3 0 6 2.7 6 6v42H48.1V86c0-3.3 2.7-6 6-6zm467.8 352H54.1c-3.3 0-6-2.7-6-6V256h479.8v170c0 3.3-2.7 6-6 6zM192 332v40c0 6.6-5.4 12-12 12h-72c-6.6 0-12-5.4-12-12v-40c0-6.6 5.4-12 12-12h72c6.6 0 12 5.4 12 12zm192 0v40c0 6.6-5.4 12-12 12H236c-6.6 0-12-5.4-12-12v-40c0-6.6 5.4-12 12-12h136c6.6 0 12 5.4 12 12z"/></svg>
                  <span class="ml-2 mt-5px">Procceed to checkout</span>
                </button>
              </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
