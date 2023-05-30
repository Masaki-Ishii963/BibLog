<!doctype html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BibLog</title>
</head>
<body>
    <h1>BibLog</h1>
    <h2>読書の記録ができます。</h2>
    @auth
        <div>
            <p>登録フォーム</p>
            @if (session('feedback.success'))
                <p style="color: green;">{{ session('feedback.success') }}</p>
            @endif
            <form action="{{ route('book.create') }}" method="post">
                @csrf
                <label for="book-title">タイトル</label>
                <span>255文字まで</span>
                <textarea id="book-title" type="text" name="book" placeholder="タイトルを入力"></textarea>
                @error('book')
                <p style="color: red;">{{ $message }}</p>
                @enderror
                <button type="submit">登録</button>
            </form>
        </div>
    @endauth
    <div>
        @foreach ($books as $book)
            <details>
                <summary>{{ $book->title }} by {{ $book->user->name }}</summary>
                <div>
                    <a href="{{ route('book.update.index', ['id' => $book->id]) }}">編集</a>
                    <form action="{{ route('book.delete', ['id' => $book->id]) }}" method="post">
                        @csrf
                        @method('delete')
                        <button type="submit">削除</button>
                    </form>
                </div>
            </details>
        @endforeach
    </div>
</body>
</html>
