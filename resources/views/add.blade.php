<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add</title>
</head>
<body>
    <form method="post"  action="{{ url('/add') }}">
    {{ csrf_field() }}

    <h1>英単語登録</h1>
    <p>英単語</p>
    <input type="text" name="word"/>
    <p>意味</p>
    <input type="text" name="meaning"/>
    <p>記憶hook</p>
    <input type="text" name="hook"/>
    <button value="Add">登録</button>
</form>
</body>
</html>
