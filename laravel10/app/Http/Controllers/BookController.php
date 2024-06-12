<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function showBooksWithAuthors()
    {
        $books = Book::all();

        $output = '';
        foreach ($books as $book) {
            $output .= 'Book title: ' . $book['title'] . '<br>';
            $output .= 'Author: '. $book->author['name'] .'<br>';
            $output .= '<br>------------<br>';
        }

        return $output;
    }
}
