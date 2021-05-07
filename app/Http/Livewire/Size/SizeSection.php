<?php

namespace App\Http\Livewire\Size;

use App\Models\Size;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Livewire\Component;
use Livewire\WithPagination;

class SizeSection extends Component
{
    use WithPagination;
    use AuthorizesRequests;

    public $size;
    public $editSize;
    public $rules = [
        'size' => 'required|min:1|max:10|unique:sizes,size,{$this->size->id}',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
    public function add()
    {
        $this->validate();
        Size::create([
            'size' => $this->size,
        ]);
        $this->alert('success', 'Register Success!', [
            'position' => 'top-end',
            'timer' => 3000,
            'toast' => true,
            'text' => '',
            'confirmButtonText' => 'Ok',
            'cancelButtonText' => 'Cancel',
            'showCancelButton' => true,
            'showConfirmButton' => false,
        ]);

        $this->size = '';
    }
    public function edit(Size $size)
    {
        $this->size = $size->size;
        $this->editSize = $size;
    }
    public function update()
    {
        $this->editSize->update([
            'size' => $this->size,
        ]);
        $this->alert('success', 'Update Success!', [
            'position' => 'top-end',
            'timer' => 3000,
            'toast' => true,
            'text' => '',
            'confirmButtonText' => 'Ok',
            'cancelButtonText' => 'Cancel',
            'showCancelButton' => true,
            'showConfirmButton' => false,
        ]);
        $this->size = '';
    }
    public function delete(Size $size)
    {
        $size->delete();
        $this->flash('Size Deleted');
    }
    public function render()
    {
        return view('livewire.size.size-section', [
            'sizes' => Size::latest()->paginate(10),
        ]);
    }
}
