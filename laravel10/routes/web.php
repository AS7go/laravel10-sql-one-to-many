<?php

use App\Models\Book;
use App\Models\Author;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\AuthorController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
//--- без контроллера, как пример
//--- hasMany -----------------

    // $authors = Author::all();

    // foreach ($authors as $author) {
    //     echo 'Author name ' . $author['name'] . '<br>';
    //     echo 'Author books: ';
    //     foreach ($author->books as $book) {
    //         echo $book['title'] . '<br>';
    //     }
    //     echo '<br>------------<br>';
    // }

//--- belongsTo -----------------

    // $books = Book::all();

    // foreach ($books as $book) {
    //     echo 'Book title: ' . $book['title'] . '<br>';
    //     echo 'Author: '. $book->author['name'] .'<br>';
    //     echo '<br>------------<br>';
    // }
});

// Маршрут для отображения авторов и их книг
Route::get('/authors-with-books', [AuthorController::class, 'showAuthorsWithBooks']);

// Маршрут для отображения книг и их авторов
Route::get('/books-with-authors', [BookController::class, 'showBooksWithAuthors']);

// http://localhost:8000/books-with-authors
// http://localhost:8000/public/authors-with-books