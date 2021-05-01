<?php

namespace App\Http\Livewire\Color;

use App\Models\Size;
use App\Models\Color;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Validation\Rule;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class ColorSection extends Component
{
    use WithPagination;
    use AuthorizesRequests;
    protected $colorCollection = [];
    public $color;
    public $editColor;

    protected $rules = [
        'color' => [
            'required',
            'min:3',
            'max:10',
            'unique:colors,color,{$this->color->id}',
        ],
    ];
    public function mount()
    {
        $this->colorCollection = Color::latest()->get();
    }
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
    public function add()
    {
        $this->validate();
        Color::create([
            'color' => $this->color,
        ]);
        // $this->alertMessage();

        $this->alert('success', 'Register Success!', [
            'position' => 'bottom-start',
            'timer' => 3000,
            'toast' => true,
            'text' => '',
            'confirmButtonText' => 'Ok',
            'cancelButtonText' => 'Cancel',
            'showCancelButton' => false,
            'showConfirmButton' => false,
        ]);

        $this->color = '';
        $this->fetch();
    }
    public function edit(Color $color)
    {
        $this->color = $color->color;
        $this->editColor = $color;
    }
    public function update()
    {
        $this->validate();
        $this->editColor->update([
            'color' => $this->color,
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
        $this->color = '';
    }
    public function delete(Color $color)
    {
        $color->delete();
        $this->alert('error', 'Delete success!', [
            'position' => 'top-end',
            'timer' => 3000,
            'toast' => true,
            'text' => '',
            'confirmButtonText' => 'Ok',
            'cancelButtonText' => 'Cancel',
            'showCancelButton' => true,
            'showConfirmButton' => false,
        ]);
        $this->fetch();
    }
    public function fetch()
    {
        $this->colorCollection = Color::latest()->get();
    }
    public function render()
    {
        return view('livewire.color.color-section', [
            'colors' => $this->colorCollection,
        ]);
    }
}
