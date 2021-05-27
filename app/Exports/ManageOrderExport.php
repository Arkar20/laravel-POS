<?php
namespace App\Exports;

use App\Models\Order;
use App\Models\Product;
use App\Models\Customer;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;

class ManageOrderExport implements FromCollection, WithMapping, WithHeadings
{
    use Exportable;
    public $item;
    public function __construct($item)
    {
        // dd($item);
        $this->item = Order::whereIn('id', $item)->get();
    }
    public function collection()
    {
        return $this->item;
    }
    public function map($item): array
    {
        foreach ($item->cart as $index => $cart) {
            $key = $index;
        }
        return [
            'ORD-' . $item->id,
            $item->customer->address,
            $item->cart[$key]['name'] . ' -' . $item->cart[$key]['qty'],
        ];
    }
    public function headings(): array
    {
        return ['Order ID', 'Address', 'Product'];
    }
}
