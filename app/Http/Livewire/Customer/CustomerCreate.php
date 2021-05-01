<?php

namespace App\Http\Livewire\Customer;

use Livewire\Component;
use App\Models\Customer;

class CustomerCreate extends Component
{
    public $name;
    public $phnum1;
    public $phnum2;
    public $address;
    public $company;

    public $rules = [
        'name' => 'required',
        'phnum1' => 'required|unique:customers',
        'company' => 'required',
        'address' => 'required',
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

    public function resetForm()
    {
        $this->name = '';
        $this->phnum1 = '';
        $this->phnum2 = '';
        $this->company = '';
        $this->address = '';
    }
    public function render()
    {
        return view('livewire.customer.customer-create');
    }
}
