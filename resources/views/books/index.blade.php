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
    <div>
        @foreach ($books as $book)
            <p>{{ $book->title }}</p>
        @endforeach
    </div>
</body>
</html>
