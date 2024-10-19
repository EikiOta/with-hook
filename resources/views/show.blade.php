<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>英単語表示</h1>
    <table>
    <thead>
            <tr>
                <th>ID</th>
                <th>英単語 </th>
                <th>意味 </th>
                <th>記憶hook </th>
                <th>操作</th>
            </tr>
        </thead>
    @foreach ($Word_Show as $Word)
    <tr>
        <td>{{ $Word->id}}</td>
        <td>{{ $Word->word}}</td>
        <td>{{ $Word->meaning}}</td>
        <td>{{ $Word->hook}}</td>
        <td>
        <form action="{{ route('word.delete', $Word->id) }}" method="POST" onsubmit="return confirm('本当に削除しますか？')">
        {{ csrf_field() }}
        {{ method_field('DELETE') }}
        <button type="submit">削除</button>
    </form>
</td>
    </tr>

    @endforeach


    </table>
</body>
</html>