<?php

namespace App\Http\Controllers\Book;

use App\Http\Controllers\Controller;
use App\Http\Requests\Book\CreateRequest;
use App\Models\Book;

class CreateController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(CreateRequest $request)
    {
        $book = new Book();
        $book->user_id = $request->userId();
        $book->title = $request->getBookTitle();
        $book->save();
        return redirect()->route('book.index');
    }
}
