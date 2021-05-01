<x-app-layout>
    @slot('header')
        Customer
    @endslot
    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
     <livewire:customer.customer-create />
    </div>
        <div>
            <livewire:customer.customer-table />
        </div>
        
</x-app-layout>