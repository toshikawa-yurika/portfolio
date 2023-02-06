<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>書籍のデータ登録</title>
</head>

<body>
    <h1>書籍のデータ登録</h1>

    <form action="basic19insert_process.php" method="post">
        <div>
            <label for="isbn">ISBNコード：</label><br>
            <input type="text" name="isbn" id="isbn" size="25" maxlength="17" required>
            <!-- サイズは入力フォームの見た目で何文字分出すか -->
            <!-- maxlengthは何文字まで入れれるか -->

            <!-- requiredは必須 -->
        </div>

        <div>
            <label for="title">書名：</label><br>
            <input type="text" name="title" id="title" size="35" maxlength="100" required>
        </div>

        <div>
            <label for="price">価格：</label><br>
            <input type="number" name="price" id="price" size="6" maxlength="5">&nbsp;円
            <!-- &nbsp;は半角スペース一個 エスケープシーケンス -->
        </div>

        <div>
            <label for="published">刊行日：</label><br>
            <input type="date" name="published" id="published" value="2020-01-01">
        </div>

        <div>
            <label for="publish">出版社：</label><br>
            <input type="text" name="publish" id="publish" size="25" maxlength="20">
        </div>

        <div>
            <input type="submit" value="登録">
        </div>

    </form>

    <footer>
        <div>
            <a href="basic19insert_form.php">新規登録</a>
            <a href="basic19result_list.php">書籍一覧</a>
            <!-- 下記まだないやつ -->
            <a href="basic19update.php">書籍の編集</a>
            <a href="basic19delete.php">書籍の削除</a>
        </div>
    </footer>
</body>

</html>