<?php

namespace App\Http\Livewire\Order;

use App\Models\Size;
use App\Models\Order;
use Livewire\Component;
use App\Exports\OrderExport;
use App\Models\order_product;
use Maatwebsite\Excel\Facades\Excel;

class OrderTable extends Component
{
    public $search;
    public $sizesearch;
    public $datesearch;
    public $filteredItems;

    public function resetSearch()
    {
        $this->search = '';
        $this->sizesearch = '';
        $this->datesearch = '';
        $this->filteredItems = order_product::all();
    }
    public function mount()
    {
        $this->filteredItems = order_product::all();
    }
    public function updated()
    {
        $this->filteredItems = order_product::where(function ($query) {
            return $query
                ->whereHas('product', function ($query) {
                    $query
                        ->whereHas('size', function ($size) {
                            $size->where(
                                'size',
                                'like',
                                '%' . $this->search . '%'
                            );
                        })
                        ->orWhereHas('category', function ($category) {
                            $category->where(
                                'type',
                                'like',
                                '%' . $this->search . '%'
                            );
                        });
                })
                ->orWhereHas('order', function ($order) {
                    $order
                        ->where('id', $this->search)
                        ->orWhereHas('customer', function ($customer) {
                            $customer
                                ->where(
                                    'phnum1',
                                    'like',
                                    '%' . $this->search . '%'
                                )
                                ->orWhere(
                                    'phnum2',
                                    'like',
                                    '%' . $this->search . '%'
                                )
                                ->orWhere(
                                    'name',
                                    'like',
                                    '%' . $this->search . '%'
                                );
                        });
                });
        })
            ->when($this->sizesearch, function ($size) {
                $size->whereHas('product', function ($product) {
                    $product->whereHas('size', function ($size) {
                        $size->where('id', $this->sizesearch);
                    });
                });
            })
            ->when($this->datesearch, function ($query) {
                $query->whereHas('order', function ($order) {
                    $order->whereDate('order_date', $this->datesearch);
                });
            })

            ->get();
    }

    public function render()
    {
        return view('livewire.order.order-table', [
            'orders' => order_product::where(function ($query) {
                return $query
                    ->whereHas('product', function ($query) {
                        $query
                            ->whereHas('size', function ($size) {
                                $size->where(
                                    'size',
                                    'like',
                                    '%' . $this->search . '%'
                                );
                            })
                            ->orWhereHas('category', function ($category) {
                                $category->where(
                                    'type',
                                    'like',
                                    '%' . $this->search . '%'
                                );
                            });
                    })
                    ->orWhereHas('order', function ($order) {
                        $order
                            ->where('id', $this->search)
                            ->orWhereHas('customer', function ($customer) {
                                $customer
                                    ->where(
                                        'phnum1',
                                        'like',
                                        '%' . $this->search . '%'
                                    )
                                    ->orWhere(
                                        'phnum2',
                                        'like',
                                        '%' . $this->search . '%'
                                    )
                                    ->orWhere(
                                        'name',
                                        'like',
                                        '%' . $this->search . '%'
                                    );
                            });
                    });
            })
                ->when($this->sizesearch, function ($size) {
                    $size->whereHas('product', function ($product) {
                        $product->whereHas('size', function ($size) {
                            $size->where('id', $this->sizesearch);
                        });
                    });
                })
                ->when($this->datesearch, function ($query) {
                    $query->whereHas('order', function ($order) {
                        $order->whereDate('order_date', $this->datesearch);
                    });
                })

                ->paginate(10),
            'sizes' => Size::all(),
        ]);
    }
    public function exportExcel()
    {
        // dd($this->filteredItems);
        return Excel::download(
            new OrderExport($this->filteredItems),
            'orders.xlsx'
        );
    }
}
