<?php

namespace App\Http\Controllers\Book\Update;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Book;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class IndexController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $id = (int)$request->route('id');
        $book = Book::where('id', $id)->firstOrFail();
        return view('books.update')->with('book', $book);
    }
}
