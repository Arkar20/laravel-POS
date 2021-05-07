<?php

namespace App\Http\Livewire\Category;

use App\Models\Category;
use Livewire\Component;
use Livewire\WithPagination;

class CategorySection extends Component
{
    use WithPagination;

    public $category;
    public $madein;
    public $thickness;
    public $editCategory;
    protected $rules = [
        'category' => 'required',
        'madein' => 'required|min:1',
        'thickness' => 'required|max:10',
    ];
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function add()
    {
        $this->validate();
        Category::create([
            'type' => $this->category,
            'madein' => $this->madein,
            'thickness' => $this->thickness,
        ]);
        $this->resetForm();
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
    }
    public function edit(Category $category)
    {
        $this->editCategory = $category;
        $this->category = $category->type;
        $this->madein = $category->madein;
        $this->thickness = $category->thickness;
    }
    public function update()
    {
        $this->validate();
        $this->editCategory->update([
            'type' => $this->category,
            'madein' => $this->madein,
            'thickness' => $this->thickness,
        ]);
        $this->alert('success', 'Update Success!', [
            'position' => 'top-end',
            'timer' => 3000,
            'toast' => true,
            'text' => '',
            'confirmButtonText' => 'Ok',
            'cancelButtonText' => 'Cancel',
            'showCancelButton' => false,
            'showConfirmButton' => false,
        ]);
        $this->resetForm();
    }

    public function delete(Category $category)
    {
        $category->delete();
        $this->alert('error', 'Delete Success!', [
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

    public function render()
    {
        return view('livewire.category.category-section', [
            'categories' => Category::latest()->paginate(10),
        ]);
    }
    public function resetForm()
    {
        $this->category = '';
        $this->madein = '';
        $this->thickness = '';
    }
}
