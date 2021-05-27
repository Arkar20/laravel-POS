<?php

namespace App\Http\Livewire\Customer;

use Livewire\Component;
use App\Models\Customer;
// use Maatwebsite\Excel\Excel;
// Maatwebsite\Excel\Excel

use App\Exports\ModelExport;
use Livewire\WithPagination;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Facades\Excel;

class CustomerTable extends Component
{
    use WithPagination;
    public $searchkeyword;
    public $filteredcustomer;
    public $loadstate = false;
    public function updatingSearch()
    {
        $this->resetPage();
    }
    public function loadFunction()
    {
        $this->filteredcustomer = Customer::where(
            'name',
            'like',
            '%' . $this->searchkeyword . '%'
        )
            ->orWhere('phnum1', 'like', '%' . $this->searchkeyword . '%')
            ->orWhere('phnum2', 'like', '%' . $this->searchkeyword . '%')
            ->orWhere('company', 'like', '%' . $this->searchkeyword . '%')

            ->get();
        $this->loadstate = true;
    }

    public function render()
    {
        return view('livewire.customer.customer-table', [
            'customers' => $this->loadstate
                ? Customer::where(
                    'name',
                    'like',
                    '%' . $this->searchkeyword . '%'
                )
                    ->orWhere(
                        'phnum1',
                        'like',
                        '%' . $this->searchkeyword . '%'
                    )
                    ->orWhere(
                        'phnum2',
                        'like',
                        '%' . $this->searchkeyword . '%'
                    )
                    ->orWhere(
                        'company',
                        'like',
                        '%' . $this->searchkeyword . '%'
                    )

                    ->paginate(10)
                : [],
        ]);
    }
    public function exportExcel()
    {
        return Excel::download(
            new ModelExport(Customer::class),
            'customers.csv'
        );
    }
    public function edit(Customer $customer)
    {
        $this->emit('editcustomer', $customer);
    }
}
