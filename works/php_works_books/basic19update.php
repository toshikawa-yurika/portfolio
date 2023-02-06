<?php

// 外部化されたDBmanager関数を読み込む
require_once "./basic18DBmanager.php";

// $isbnをresultから送信されたものをゲットする
$isbn = "";
$msg = "";

if (isset($_GET['isbn']) && !empty($_GET['isbn'])) {
    $isbn = $_GET['isbn'];
} else {
    // フッターのリンクから来た場合、
    // isbn番号ないので下記のメッセージを表示させる。
    $msg = "書籍一覧から編集ボタンを押して下さい。";
}


try {
    // ①データベースに接続
    $db = getdb();

    // ②SQL文を作成
    $sql = "SELECT * FROM ";
    $sql .= "books ";

    $sql .= "WHERE ";
    $sql .= "isbn = :isbn ";
    // プレイスフォルダー用意
    // isbnが指定したものを、全ての行セレクトして取得する


    // ③SQL文をprepareメソッドに代入して、準備する
    $stt = $db->prepare($sql);


    // SQL文に登録データを埋め込む
    $stt->bindValue(":isbn", $isbn);
    // :isbnで用意した場所に、$isbnの値を入れる

    //SQL文を実行する
    $stt->execute();


    // ④結果セットを取得して、配列に代入する
    $booklist = [];
    $stt->setFetchMode(PDO::FETCH_ASSOC);
    // setFetchModeは、モード（何で取ってくるか？）を設定するので、あとはfetch()だけで取ってこれる

    while ($row = $stt->fetch()) {
        // 繰り返し条件式＝fetchメソッドがfalseを返すまで
        // fetchメソッドは、次のレコードがない場合、falseを返す

        // booklistという配列に一度入れる
        $booklist[] = [
            'isbn' => $row['isbn'],
            'title' => $row['title'],
            'price' => $row['price'],
            'publish' => $row['publish'],
            'published' => $row['published'],
        ];
    }
    //
} catch (PDOException $e) {
    // 例外が発生したときの処理
    die("エラーメッセージ：" . $e->getMessage());
}



?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>書籍の編集</title>

    <script src="./basic19.js"></script>
</head>

<body>
    <h1>書籍の編集</h1>

    <p><?php echo $msg; ?></p>


    <?php foreach ($booklist as $key => $value) : ?>

    <?php $title = $value['title']; ?>
    <?php $price = $value['price']; ?>
    <?php $published = $value['published']; ?>
    <?php $publish = $value['publish']; ?>



    <form action="basic19update_process.php" method="post">
        <div>
            <label for="isbn">ISBNコード：</label><br>
            <input type="text" name="isbn" id="isbn" size="25" maxlength="17" value="<?= $isbn ?>" readonly>
        </div>

        <div>
            <label for="title">書名：</label><br>
            <input type="text" name="title" id="title" size="35" maxlength="100" value="<?= $title ?>" required>
        </div>

        <div>
            <label for="price">価格：</label><br>
            <input type="number" name="price" id="price" size="6" maxlength="5" value="<?= $price ?>">&nbsp;円
            <!-- &nbsp;は半角スペース一個 エスケープシーケンス -->
        </div>

        <div>
            <label for="published">刊行日：</label><br>
            <input type="date" name="published" id="published" value="<?= $published ?>">
        </div>

        <div>
            <label for="publish">出版社：</label><br>
            <input type="text" name="publish" id="publish" size="25" maxlength="20" value="<?= $publish ?>">
        </div>


        <div>
            <input type="submit" value="登録" onclick="return save('<?= $isbn ?>','<?= $title ?>','<?= $price ?>','<?= $published ?>','<?= $publish ?>')">
            <!-- return 関数は、js confirmでよく使うもの -->

            <input type="button" value="削除" onclick="book_delete('<?= $title ?>','<?= $isbn ?>')">
            <!-- onclick属性でjava script読み込む -->
            <!-- $title と $isbn の引数を渡す -->
        </div>

        <?php endforeach; ?>

    </form>

    <footer>
        <div>
            <a href="basic19insert_form.php">新規登録</a>
            <a href="basic19result_list.php">書籍一覧</a>
            <a href="basic19update.php">書籍の編集</a>
            <a href="basic19delete.php">書籍の削除</a>
        </div>
    </footer>


</body>

</html>