<?php

namespace App\Http\Livewire\Order;

use App\Models\Size;
use App\Models\Order;
use Livewire\Component;
use App\Exports\OrderExport;
use App\Models\order_product;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Livewire\WithPagination;
use Maatwebsite\Excel\Facades\Excel;

class OrderTable extends Component
{
    use WithPagination;
    use AuthorizesRequests;
    public $search;
    public $sizesearch;
    public $datesearch;
    public $filteredItems;
    public $loadingstate = false;
    protected $listeners = ['confirmed', 'cancelled'];
    public $order;

    public function deleteOrder(Order $order)
    {
        $this->order = $order;
        $this->confirm('Are You Sure You want to Delete?', [
            'toast' => false,
            'position' => 'center',
            'showConfirmButton' => true,
            'cancelButtonText' => 'No',
            'onConfirmed' => 'confirmed',
            'onCancelled' => 'cancelled',
        ]);
    }
    public function confirmed()
    {
        $this->order->delete();
        $this->alert('success', 'Delete Success!', [
            'position' => 'top-end',
            'timer' => 3000,
            'toast' => true,
            'text' => '',
            'confirmButtonText' => 'Ok',
            'cancelButtonText' => 'Cancel',
            'showCancelButton' => true,
            'showConfirmButton' => false,
        ]);
    }
    public function cancelled()
    {
        $this->alert('error', 'Process Cancelled!', [
            'position' => 'top-end',
            'timer' => 3000,
            'toast' => true,
            'text' => '',
            'confirmButtonText' => 'Ok',
            'cancelButtonText' => 'Cancel',
            'showCancelButton' => false,
            'showConfirmButton' => false,
        ]);
    }

    public function loadFunction()
    {
        $this->loadingstate = true;
    }
    public function resetSearch()
    {
        $this->search = '';
        $this->sizesearch = '';
        $this->datesearch = '';
        $this->filteredItems;
    }

    public function mount()
    {
        $this->filteredItems = collect();
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
            'orders' => $this->loadingstate
                ? order_product::where(function ($query) {
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
                    ->whereHas('order', function ($date) {
                        $date->orderBy('order_date', 'desc');
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

                    ->paginate(10)
                : [],
            'sizes' => Size::all(),
        ]);
    }
    public function exportExcel()
    {
        // $this->authorize(auth()->user())
        // dd($this->filteredItems);
        // $user = auth()->user();
        // $user->authorize(auth()->user());
        $this->authorize('can_export');
        return Excel::download(
            new OrderExport($this->filteredItems),
            'orders' . now() . '.xlsx'
        );
    }
}
