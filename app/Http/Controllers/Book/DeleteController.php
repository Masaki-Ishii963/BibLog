<?php

namespace App\Http\Controllers\Book;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Book;

class DeleteController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $id = (int)$request->route('id');
        $book = Book::where('id', $id)->firstOrFail();
        $book->delete();
        return redirect()
            ->route('book.index')
            ->with('feedback.success', '本を削除しました');
    }
}
