<?php

namespace App\Http\Livewire\Product;

use App\Models\Size;
use App\Models\Color;
use App\Models\Product;
use Livewire\Component;
use App\Models\Category;
use Livewire\WithPagination;

class ProductDisplay extends Component
{
    use WithPagination;

    public $qty;
    protected $rules = ['qty' => 'required|integer'];
    public $cartItems = [];
    protected $listeners = ['cartUpdated' => 'refresh'];
    public $search;
    public $colorsearch;
    public $categorysearch;

    public function mount()
    {
        $this->cartItems = $this->fetch();
    }
    public function refresh()
    {
        $this->cartItems = $this->fetch();
    }

    public function render()
    {
        return view('livewire.product.product-display', [
            'products' => Product::where(function ($query) {
                $query
                    ->where('name', 'like', '%' . $this->search . '%')
                    ->orWhereHas('size', function ($size) {
                        $size->Where('size', $this->search);
                    });
            })

                ->when($this->colorsearch, function ($query) {
                    return $query->where('color_id', $this->colorsearch);
                })
                ->when($this->categorysearch, function ($query) {
                    return $query->where('category_id', $this->categorysearch);
                })
                ->paginate(10),
            'colors' => Color::all(),
            'categories' => Category::all(),
            'sizes' => Size::all(),
        ]);
    }
    public function updatingSearch()
    {
        $this->resetPage();
    }
    public function removeCart($id)
    {
        \Cart::remove($id);
        $this->cartItems = $this->fetch();
    }

    public function showCart()
    {
        dd(\Cart::content()->toArray());
    }
    public function clearCart()
    {
        \Cart::destroy();
        $this->cartItems = $this->fetch();
    }
    public function fetch()
    {
        return \Cart::content()->toArray();
    }
    public function resetSearch()
    {
        $this->colorsearch = '';
        $this->categorysearch = '';
    }
}
