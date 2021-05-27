<?php

namespace App\Http\Livewire\Order;

use App\Models\Order;
use Livewire\Component;
use App\Exports\ManageOrderExport;
use Maatwebsite\Excel\Facades\Excel;

class ManageOrder extends Component
{
    public $search;
    public $selectedItems = [];
    public $datesearch;
    public $filteredItems;
    public $loadingstate = false;

    public function exportToExcel()
    {
        // dd($this->selectedItems);
        return Excel::download(
            new ManageOrderExport($this->selectedItems),
            'manage_order' . now() . '.xlsx'
        );
    }
    public function render()
    {
        return view('livewire.order.manage-order', [
            'orders' => Order::whereHas('customer', function ($name) {
                $name
                    ->where('name', 'like', '%' . $this->search . '%')
                    ->orWhere('phnum1', 'like', '%' . $this->search . '%')
                    ->orWhere('phnum2', 'like', '%' . $this->search . '%');
            })
                ->when($this->datesearch, function ($date) {
                    $date->where(
                        'order_date',
                        'like',
                        '%' . $this->datesearch . '%'
                    );
                })

                ->latest()
                ->paginate(20),
        ]);
    }
}
