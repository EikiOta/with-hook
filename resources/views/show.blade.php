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
    @foreach ($Word_Show as $Word)
    <tr>
        <td>{{ $Word->id}}</td>
        <td>{{ $Word->word}}</td>
        <td>{{ $Word->meaning}}</td>
        <td>{{ $Word->hook}}</td>
    </tr>
    @endforeach


    </table>
</body>
</html>