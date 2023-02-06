<?php

// 外部化されたDBmanager関数を読み込む
require_once "./basic18DBmanager.php";

// $isbnをresultから送信されたものをゲットする
$isbn = "";
$msg = "";

if (isset($_GET['isbn']) && !empty($_GET['isbn'])) {
    $isbn = $_GET['isbn'];
    //メッセージを出力
    $msg = "ご指定の書籍を削除しました。";
    $msg .= "<div>ISBN：{$isbn}</div>";
    //
} else {
    // フッターのリンクから来た場合、
    // isbn番号ないので下記のメッセージを表示させる。
    $msg = "書籍一覧から削除ボタンを押して下さい。";
}


try {
    // ①データベースに接続
    $db = getdb();

    // ②SQL文を作成
    $sql = "DELETE FROM ";
    $sql .= "books ";

    $sql .= "WHERE ";
    $sql .= "isbn = :isbn ";


    // ③SQL文をprepareメソッドに代入して、準備する
    $stt = $db->prepare($sql);


    // SQL文に登録データを埋め込む
    $stt->bindValue(":isbn", $isbn);
    // :isbnで用意した場所に、$isbnの値を入れる

    //SQL文を実行する
    $stt->execute();
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
    <title>書籍の削除</title>
</head>

<body>
    <h1>書籍の削除</h1>

    <p><?php echo $msg; ?></p>


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