<?php
namespace App\Exports;

use App\Models\Customer;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\FromCollection;

class ModelExport implements FromCollection
{
    public $model;
    public function __construct($model)
    {
        $this->model = $model;
    }
    public function collection()
    {
        return $this->model::all();
    }
}
