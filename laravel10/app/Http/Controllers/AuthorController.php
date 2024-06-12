<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function showAuthorsWithBooks()
    {
        $authors = Author::all();

        $output = '';
        foreach ($authors as $author) {
            $output .= 'Author name: ' . $author['name'] . '<br>';
            $output .= 'Author books: ';
            foreach ($author->books as $book) {
                $output .= $book['title'] . '<br>';
            }
            $output .= '<br>------------<br>';
        }

        return $output;
    }
}
