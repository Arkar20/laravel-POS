<?php

namespace App\Http\Livewire\Product;

use App\Models\Size;
use App\Models\Color;
use App\Models\Product;
use Livewire\Component;
use App\Models\Category;
use App\Exports\ModelExport;
use Livewire\WithPagination;
use App\Exports\ProductExport;
use Gloudemans\Shoppingcart\Cart;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;

class ProductSection extends Component
{
    use WithPagination;
    public $name;
    public $size;
    public $color;
    public $category;
    public $desc;
    public $price;
    public $totalqty = 0;

    protected $rules = [
        'name' => 'required|min:0',
        'color' => 'required|min:0',
        'size' => 'required|min:0',
        'category' => 'required|min:0',
        'desc' => 'required|min:0',
        'price' => 'required',
        'totalqty' => 'required',
    ];

    public function render()
    {
        return view('livewire.product.product-section', [
            'colors' => Color::all(),
            'categories' => Category::all(),
            'sizes' => Size::all(),
        ]);
    }

    public function add()
    {
        $this->validate();

        Product::create([
            'name' => $this->name,
            'color_id' => $this->color,
            'size_id' => $this->size,
            'category_id' => $this->category,
            'desc' => $this->desc,
            'price' => $this->price,
            'total_qty' => $this->totalqty,
        ]);
    }

    public function delete(Product $product)
    {
        $product->delete();
    }
}
