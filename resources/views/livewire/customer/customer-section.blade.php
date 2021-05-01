<div x-data="{showForm :false}">
   @if(!$customer) 
     <div class="p-4  bg-gray-100 rounded-full">
            <button class="ml-2 font-bold uppercase" @click="showForm=!showForm">Create New Customer</button>
     </div>
<div 
    x-show="showForm"
     @name-updated.window="showForm = false"
    x-transition:enter="transition ease-out duration-300"
    x-transition:enter-start="opacity-0 transform scale-90"
    x-transition:enter-end="opacity-100 transform scale-100"
    x-transition:leave="transition ease-in duration-300"
    x-transition:leave-start="opacity-100 transform scale-100"
    x-transition:leave-end="opacity-0 transform scale-90"
>
    <livewire:customer.customer-create />
</div>
{{--old  customer form --}}

{{-- //old customer --}}
<div 
    x-show="!showForm"
    @name-updated.window="showForm = false"
    x-transition:enter="transition ease-out duration-300"
    x-transition:enter-start="opacity-0 transform scale-90"
    x-transition:enter-end="opacity-100 transform scale-100"
    x-transition:leave="transition ease-in duration-300"
    x-transition:leave-start="opacity-100 transform scale-100"
    x-transition:leave-end="opacity-0 transform scale-90"
>
 <div>
   <!-- component -->

    <livewire:customer.customer-search />

  </div>
</div>
@else
<div class="customer-info"
    x-transition:enter="transition ease-out duration-300"
    x-transition:enter-start="opacity-0 transform scale-90"
    x-transition:enter-end="opacity-100 transform scale-100"
    x-transition:leave="transition ease-in duration-300"
    x-transition:leave-start="opacity-100 transform scale-100"
    x-transition:leave-end="opacity-0 transform scale-90"


>
     <div class="p-4  bg-gray-100 rounded-full">
            <p class="ml-2 font-bold uppercase" >Customer Information</p>
     </div>
     <!-- component -->
<div class="flex items-center w-full justify-center">

<div class="max-w-xs">
    <div class="bg-white shadow-xl rounded-lg py-3">
        <div class="p-2">
            <table class="text-lg my-3">
                <tbody>
                    <tr>
                        <td class="px-2 py-2 text-gray-500 font-semibold">Name</td>
                        <td class="px-2 py-2">{{$customer->name}}</td>
                    </tr>
                    <tr>
                        <td class="px-2 py-2 text-gray-500 font-semibold">Phone Number 1</td>
                        <td class="px-2 py-2">{{$customer->phnum1}}</td>
                    </tr>
                    <tr>
                        <td class="px-2 py-2 text-gray-500 font-semibold">Phone Number 2</td>
                        <td class="px-2 py-2">{{$customer->phnum2}}</td>
                    </tr>
                    <tr>
                        <td class="px-2 py-2 text-gray-500 font-semibold">Company</td>
                        <td class="px-2 py-2">{{$customer->company}}</td>
                    </tr>
                    <tr>
                        <td class="px-2 py-2 text-gray-500 font-semibold">Address</td>
                        <td class="px-2 py-2">{{$customer->address}}</td>
                    </tr>
            </tbody></table>

            <div class="text-center my-3">
                <button class="text-xs text-indigo-500 italic hover:underline hover:text-indigo-600 font-medium" href="#" wire:click="resetSearch">Serach Again</button>
            </div>

        </div>
    </div>
</div>

</div>
</div>     
@endif
  
   
</div>
