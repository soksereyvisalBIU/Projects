<?php

namespace App\Livewire\Admin\Book;

use App\Models\Book;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\Attributes\Validate;

class BookComponent extends Component
{
    use WithFileUploads;

    // #[Validate('required|string|max:255')]
    // public $name;

    // #[Validate('required|string|max:255')]
    // public $author;

    // #[Validate('required|string|max:255')]
    // public $category;

    // #[Validate('nullable|string')]
    // public $description;

    // #[Validate('nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048')]
    // public $cover;

    // #[Validate('nullable|mimes:pdf|max:10000')]
    // public $pdf;
    
    public $name;
    public $author;
    public $category;
    public $description;
    public $cover;
    public $pdf;
    public $showModal = false;

    protected $rules = [
        'name' => 'required|string|max:255',
        'author' => 'required|string|max:255',
        'category' => 'required|string|max:255',
        'description' => 'nullable|string',
        'cover' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'pdf' => 'nullable|mimes:pdf|max:10000',
    ];

    public function submit()
    {
        $this->validate();

        // Save the book or perform any other logic

        $this->resetFields();
        $this->emit('hideModal');
    }

    public function showModal()
    {
        $this->showModal = true;
        $this->emit('showModal');
    }

    public function closeModal()
    {
        $this->resetFields();
        $this->showModal = false;
        $this->emit('hideModal');
    }

    private function resetFields()
    {
        $this->name = '';
        $this->author = '';
        $this->category = '';
        $this->description = '';
        $this->cover = '';
        $this->pdf = '';
    }

    
    public function render()
    {
        $books = Book::paginate(100);
        
        return view('livewire.admin.book.book-component' , compact('books'));
    }
}
