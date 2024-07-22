<?php

namespace App\Livewire\Book;

use App\Models\Book;
use Livewire\Component;

class BookComponent extends Component
{
    public function render()
    {

        $books = Book::paginate(50);
        
        return view('livewire.book.book-component' , compact('books'));
    }
}
