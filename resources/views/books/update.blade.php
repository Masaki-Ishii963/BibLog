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
    <h1>本のタイトルを編集します</h1>
    <div>
        <a href="{{ route('book.index') }}">一覧に戻る</a>
        <p>登録フォーム</p>
        @if (session('feedback.success'))
            <p style="color: green;">{{ session('feedback.success') }}</p>
        @endif
        <form action="{{ route('book.update.put', ['id' => $book->id]) }}" method="post">
            @method ('PUT')
            @csrf
            <label for="book-title">タイトル</label>
            <span>255文字まで</span>
            <textarea id="book-title" type="text" name="book" placeholder="タイトルを入力"> {{$book->title}} </textarea>
            @error('book')
            <p style="color: red;">{{ $message }}</p>
            @enderror
            <button type="submit">編集</button>
        </form>
    </div>
</body>
</html>
