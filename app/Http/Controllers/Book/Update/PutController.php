<?php

namespace App\Http\Controllers\Book\Update;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Book;
use App\Http\Requests\Book\UpdateRequest;

class PutController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(UpdateRequest $request)
    {
        $book = Book::where('id', $request->id())->firstOrFail();
        $book->title = $request->getBookTitle();
        $book->save();
        return redirect()
            ->route('book.update.index', ['id' => $book->id])
            ->with('feedback.success', 'タイトルを更新しました');
    }
}
