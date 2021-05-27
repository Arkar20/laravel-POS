<div class="overflow-hidden">
    <form x-show="showForm" >
  <div class="">
    <label class="block text-md font-light mb-2" for="username">Name</label>
    <input
    wire:model.defer='name'
    class="w-full bg-drabya-gray border-gray-500 appearance-none border p-4 font-light leading-tight focus:outline-none focus:shadow-outline" type="text" name="username" id="" placeholder="Username">
    @error('name')
               <p class="text-red-500 bg-red-300 ">{{$message}}</p>

    @enderror
  </div>

  <div class="mb-4">
    <label class="block text-md font-light mb-2" for="password">Ph-Num 1</label>
    <input 
    wire:model.defer='phnum1'
    class="w-full bg-drabya-gray border-gray-500 appearance-none border p-4 font-light leading-tight focus:outline-none focus:shadow-outline" type="text" name="text" id="" placeholder="text">
    @error('phnum1')
       <p class="text-red-500">{{$message}}</p>
    @enderror
  </div>

  <div class="mb-4">
    <label class="block text-md font-light mb-2" for="text">Ph-Num 2</label>
    <input
      wire:model.defer='phnum2'
    class="w-full bg-drabya-gray border-gray-500 appearance-none border p-4 font-light leading-tight focus:outline-none focus:shadow-outline" type="text" name="text" id="" placeholder="text">
    @error('phnum2')
       <p class="text-red-500">{{$message}}</p>
    @enderror
  </div>
  <div class="mb-4">
    <label class="block text-md font-light mb-2" for="text">Retail Customer</label>
    <input
      type="checkbox"
      wire:model.defer='retail_customer'
    class=" form-checkbox" type="text" name="text" id="" placeholder="text">
    Retail Customer
  </div>
  <div class="mb-4">
    <label class="block text-md font-light mb-2" for="text">Company</label>
    <input 
    wire:model.defer='company'
    class="w-full bg-drabya-gray border-gray-500 appearance-none border p-4 font-light leading-tight focus:outline-none focus:shadow-outline" type="text" name="text" id="" placeholder="text">
    @error('company')
       <p class="text-red-500">{{$message}}</p>
    @enderror
  </div>
  <div class="mb-4">
    <label class="block text-md font-light mb-2" for="text">Address</label>
    <input
      wire:model.defer='address'
    class="w-full bg-drabya-gray border-gray-500 appearance-none border p-4 font-light leading-tight focus:outline-none focus:shadow-outline" type="text" name="text" id="" placeholder="Password">
  @error('address')
       <p class="text-red-500">{{$message}}</p>
      
  @enderror
  </div>

  <div class="flex items-center justify-between mb-5">
   @if ($edit)
       <button type="button"
       wire:click="addCustomer"
    class="bg-indigo-600 hover:bg-blue-700 text-white font-light py-2 px-6 rounded focus:outline-none focus:shadow-outline" type="button">
      Register
    </button>
    @else
      <button wire:click="updateCustomer"
    class="bg-green-600 hover:bg-green-700 text-white font-light py-2 px-6 rounded focus:outline-none focus:shadow-outline" type="button">
      Update
    </button>
   @endif
    
  </div>
</form>
</div>
