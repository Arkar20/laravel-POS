<?php

namespace App\Http\Livewire\Customer;

use Livewire\Component;
use App\Models\Customer;

class CustomerSearch extends Component
{
    public $search;
    public $customer;
    public function resetSearch()
    {
        $this->search = '';
    }
    public function selectCustomer(Customer $customer)
    {
        $this->emit('selected', $customer);
    }
    public function render()
    {
        return view('livewire.customer.customer-search', [
            'customers' => Customer::where(
                'name',
                'like',
                '%' . $this->search . '%'
            )
                ->orderBy('created_at', 'desc')
                ->get(),
        ]);
    }
}
