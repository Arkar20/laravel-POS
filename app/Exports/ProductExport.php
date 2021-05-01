<?php
namespace App\Exports;

use App\Models\Product;
use App\Models\Customer;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ProductExport implements FromCollection, WithMapping, WithHeadings
{
    use Exportable;
    public $product;
    public function __construct($product)
    {
        $this->product = $product;
        // dd($this->product);
    }
    public function collection()
    {
        return $this->product;
    }
    public function map($product): array
    {
        // dd($product->color->color);
        return [
            $product->name,
            $product->size->size,
            $product->color->color,
            $product->category->madein,
            $product->category->thickness,
            $product->price,
        ];
    }
    public function headings(): array
    {
        return ['Name', 'Size', 'Color', 'Made In', 'Thickness Type', 'Price'];
    }
}
