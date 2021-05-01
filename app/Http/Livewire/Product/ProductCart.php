<?php

namespace App\Http\Livewire\Product;

use App\Models\Product;
use Livewire\Component;

class ProductCart extends Component
{
    public Product $product;
    public $qty;
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
            'price' => $product->price,
            'weight' => 0,
        ]);
        $this->emit('cartUpdated');
        $this->qty = '';
    }
}
