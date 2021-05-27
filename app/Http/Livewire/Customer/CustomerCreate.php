<?php

namespace App\Http\Livewire\Customer;

use Livewire\Component;
use App\Models\Customer;

class CustomerCreate extends Component
{
    public $name;
    public $phnum1 = 0;
    public $phnum2;
    public $address;
    public $company;
    public $edit = true;
    public $customer;
    public $retail_customer = 0;
    protected $listeners = ['editcustomer' => 'updateField'];

    public $rules = [
        'name' => 'required',
        // 'phnum1' => 'required|unique:customers',
        // 'company' => 'required',
        // 'address' => 'required',
    ];

    public function addCustomer()
    {
        $this->validate();
        $data = [
            'name' => $this->name,
            'phnum1' => $this->phnum1,
            'phnum2' => $this->phnum2,
            'company' => $this->company,
            'address' => $this->address,
            'retail_customer' => $this->retail_customer,
        ];
        $customer = Customer::create($data);
        $this->resetForm();
        $this->emit('selected', $customer->id);
        $this->dispatchBrowserEvent('name-updated');
        $this->alert('success', 'Register Success!', [
            'position' => 'bottom-end',
            'timer' => 3000,
            'toast' => true,
            'text' => '',
            'confirmButtonText' => 'Ok',
            'cancelButtonText' => 'Cancel',
            'showCancelButton' => false,
            'showConfirmButton' => false,
        ]);
    }
    public function updateCustomer()
    {
        $this->validate();

        $this->customer->update([
            'name' => $this->name,
            'phnum1' => $this->phnum1,
            'phnum2' => $this->phnum2,
            'company' => $this->company,
            'address' => $this->address,
            'retail_customer' => $this->retail_customer,
        ]);
        $this->alert('success', 'Update Success!', [
            'position' => 'bottom-end',
            'timer' => 3000,
            'toast' => true,
            'text' => '',
            'confirmButtonText' => 'Ok',
            'cancelButtonText' => 'Cancel',
            'showCancelButton' => false,
            'showConfirmButton' => false,
        ]);
    }
    public function resetForm()
    {
        $this->name = '';
        $this->phnum1 = '';
        $this->phnum2 = '';
        $this->company = '';
        $this->address = '';
    }
    public function updateField(Customer $customer)
    {
        $this->customer = $customer;
        $this->name = $customer->name;
        $this->phnum1 = $customer->phnum1;
        $this->phnum2 = $customer->phnum2;
        $this->company = $customer->company;
        $this->address = $customer->address;
        $this->retail_customer = $customer->retail_customer;
        $this->edit = false;
    }
    public function render()
    {
        return view('livewire.customer.customer-create');
    }
}
