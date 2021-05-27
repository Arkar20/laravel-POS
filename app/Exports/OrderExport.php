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

class OrderExport implements FromCollection, WithMapping, WithHeadings
{
    use Exportable;
    public $item;
    public $price;
    public function __construct($item)
    {
        $this->item = $item;
        // dd($this->item);
    }
    public function collection()
    {
        return $this->item;
    }
    public function map($item): array
    {
        $this->price = $item->order->customer->retail_customer
            ? $item->product->retail_price
            : $item->product->price;
        return [
            'ORD-000' . $item->order->id,
            $item->order->customer->name,
            $item->order->customer->phnum1,
            $item->order->customer->phnum2,
            $item->order->customer->address,
            $item->product->size->size,
            $this->price,
            $item->product->category->type,
            $item->product->color->color .
            '-' .
            $item->product->category->thickness,
            $item->product->category->madein,
            $item->qty,
            $item->order->delivery ? $item->order->delivery->price : 'Free',
            $item->qty * $this->price,
            $item->order->order_date,
        ];
    }
    public function headings(): array
    {
        return [
            'Order ID',
            'Customer Name',
            'Customer Phnum',
            'Customer Phnum2',
            'Customer Address',
            'Product size',
            'Product Price',
            'Product category',
            'Color and Thickness',
            'Product Madein',
            'Order Quantity',
            'Delivery',
            'Total Cost',
            'Date',
        ];
    }
}
