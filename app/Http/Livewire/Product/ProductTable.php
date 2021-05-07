<?php

namespace App\Http\Livewire\Product;

use App\Models\Size;
use App\Models\Color;
use App\Models\Product;
use Livewire\Component;
use App\Models\Category;
use App\Exports\ProductExport;
use Livewire\WithPagination;
use Maatwebsite\Excel\Facades\Excel;

class ProductTable extends Component
{
    use WithPagination;

    public $search = '';
    public $filteredProduct;
    public $colorsearch;
    public $categorysearch;
    public $sizes;
    public $colors;
    public $categories;
    public $loadstate = false;

    public function mount($sizes, $colors, $categories)
    {
        $this->sizes = $sizes;
        $this->colors = $colors;
        $this->categories = $categories;
        $this->filteredProduct = [];
    }
    public function updatingSearch()
    {
        $this->resetPage();
    }
    public function loadfunction()
    {
        $this->loadstate = true;
    }
    public function updated()
    {
        $this->filteredProduct = Product::where(function ($query) {
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
            ->get();
    }
    public function render()
    {
        return view('livewire.product.product-table', [
            'products' => $this->loadstate
                ? Product::where(function ($query) {
                    $query
                        ->where('name', 'like', '%' . $this->search . '%')
                        ->orWhereHas('size', function ($size) {
                            $size->where('size', $this->search);
                        });
                })

                    ->when($this->colorsearch, function ($query) {
                        return $query->where('color_id', $this->colorsearch);
                    })
                    ->when($this->categorysearch, function ($query) {
                        return $query->where(
                            'category_id',
                            $this->categorysearch
                        );
                    })
                    ->paginate(10)
                : [],
        ]);
    }
    public function resetSearch()
    {
        $this->colorsearch = '';
        $this->categorysearch = '';
    }
    public function chooseColor($colorid)
    {
        $this->colorsearch = $colorid;
    }
    public function exportExcel()
    {
        $product = $this->filteredProduct;
        return Excel::download(new ProductExport($product), 'products.xlsx');
    }
}
