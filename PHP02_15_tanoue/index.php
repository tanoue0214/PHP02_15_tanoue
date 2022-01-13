<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>データ登録</title>
   
    <style>div{padding:10px;font-size:16px ;}</style>

</head>
<body>

<header>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
        <div class="navbar-header"><a class="navbar-brand" href="select.php">データ一覧</a>
        </div>

        </div>
    </nav>
</header>

<form method="post" action="insert.php">
    <div class="jumbotron">
        <fieldset>
            <legend>ブックマーク登録</legend>
            <label>書籍名:<input type="text" name="book_name"></label><br>
            <label>URL:<input type="text" name="book_url"></label><br>
            <label>コメント<textarea name="book_comment"  cols="40" rows="4"></textarea></label><br>
            <input type="submit" value="送信">
        </fieldset>
    </div>
</form>


    
</body>
</html>