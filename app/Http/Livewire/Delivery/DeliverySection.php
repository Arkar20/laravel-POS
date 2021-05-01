<?php

namespace App\Http\Livewire\Delivery;

use App\Models\Delivery;
use Livewire\Component;

class DeliverySection extends Component
{
    public $township;
    public $price;
    protected $rules = [
        'township' => 'required',
        'price' => 'required',
    ];
    public function add()
    {
        $this->validate();
        Delivery::create([
            'township' => $this->township,
            'price' => $this->price,
        ]);
        $this->resetForm();
        $this->alert('success', 'Register Success!', [
            'position' => 'bottom-start',
            'timer' => 3000,
            'toast' => true,
            'text' => '',
            'confirmButtonText' => 'Ok',
            'cancelButtonText' => 'Cancel',
            'showCancelButton' => false,
            'showConfirmButton' => false,
        ]);
    }
    public function delete(Delivery $delivery)
    {
        $delivery->delete();
        $this->alert('success', 'Delete Success!', [
            'position' => 'bottom-start',
            'timer' => 3000,
            'toast' => true,
            'text' => '',
            'confirmButtonText' => 'Ok',
            'cancelButtonText' => 'Cancel',
            'showCancelButton' => false,
            'showConfirmButton' => false,
        ]);
    }
    public function render()
    {
        return view('livewire.delivery.delivery-section', [
            'deliveries' => Delivery::latest()->get(),
        ]);
    }
    public function resetForm()
    {
        $this->township = '';
        $this->price = '';
    }
}
