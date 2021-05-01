<?php

namespace App\Http\Livewire\Customer;

use App\Models\Product;
use Livewire\Component;
use App\Models\Customer;

class CustomerSection extends Component
{
    public $product;
    public $customer;
    public $showCustomerDetails = false;
    protected $listeners = [
        'created' => 'showCustomer',
        'selected' => 'showCustomer',
    ];
    public function refresh(Product $product)
    {
        $this->product = $product;
    }
    public function showCustomer(Customer $customer)
    {
        $this->showCustomerDetails = true;
        $this->customer = $customer;
    }
    public function resetSearch()
    {
        $this->customer = '';
    }
    public function render()
    {
        return view('livewire.customer.customer-section');
    }
}
