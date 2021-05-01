<?php

namespace App\View\Components;

use App\Models\Size;
use Illuminate\View\Component;

class DataTable extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $items = [];
    public function __construct($data)
    {
        $this->items = $data;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.data-table');
    }
}
