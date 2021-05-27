<?php

namespace App\Http\Livewire\Product;

use App\Models\Product;
use Livewire\Component;

class ProductCart extends Component
{
    public $product;
    public $price;
    public $qty;
    public function mount($product, $price)
    {
        $this->product = $product;
        $this->price = $price;
    }
    public function render()
    {
        return view('livewire.product.product-cart');
    }
    public function addtocart(Product $product)
    {
        \Cart::add([
            'id' => $product->id,
            'name' => $product->getProductDetails(),
            'qty' => $this->qty,
            'tax' => 0,
            'price' => $this->price,
            'weight' => 0,
        ]);
        $this->emit('cartUpdated');
        $this->qty = '';
        $this->alert('success', 'Item Added To The Cart!', [
            'position' => 'top-end',
            'timer' => 3000,
            'toast' => true,
            'text' => '',

            'cancelButtonText' => false,
            'showCancelButton' => false,
            'showConfirmButton' => false,
        ]);
    }
}
