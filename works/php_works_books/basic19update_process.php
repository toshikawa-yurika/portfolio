<?php
// 外部化されたDBmanager関数を読み込む
require_once "./basic18DBmanager.php";


// クライアントから送られたデータを受信する

// 受信のお決まり
$isbn = "";

if (isset($_POST["isbn"]) & !empty($_POST["isbn"])) {
    // このデータは存在している＆空じゃない場合、
    $isbn = $_POST["isbn"];
}

if (isset($_POST["title"]) & !empty($_POST["title"])) {
    // このデータは存在している＆空じゃない場合、
    $title = $_POST["title"];
}


if (isset($_POST["price"]) & !empty($_POST["price"])) {
    // このデータは存在している＆空じゃない場合、
    $price = $_POST["price"];
}

if (isset($_POST["published"]) & !empty($_POST["published"])) {
    // このデータは存在している＆空じゃない場合、
    $published = $_POST["published"];
}


if (isset($_POST["publish"]) & !empty($_POST["publish"])) {
    // このデータは存在している＆空じゃない場合、
    $publish = $_POST["publish"];
}


// データベースに書籍データを登録する処理

try {
    // ①データベースに接続
    $db = getdb();

    // ②SQL文（INSERT）を作成
    // 半角スペース最後に付けないと、SQL文ちゃんと作れない
    $sql = "UPDATE ";
    $sql .= "books ";

    $sql .= "SET ";

    $sql .= "title = :title, ";
    $sql .= "price = :price, ";
    $sql .= "publish = :publish, ";
    $sql .= "published = :published ";

    $sql .= "WHERE ";
    $sql .= "isbn = :isbn ";


    // ③SQL文をprepareメソッドに代入して、準備する
    $stt = $db->prepare($sql);


    // SQL文に登録データを埋め込む
    $stt->bindValue(":isbn", $isbn);
    $stt->bindValue(":title", $title);
    $stt->bindValue(":price", $price);
    $stt->bindValue(":publish", $publish);
    $stt->bindValue(":published", $published);

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
    <title>書籍の編集処理</title>
</head>

<body>
    <h1>受信画面</h1>
    <p>以下の書籍を編集しました。</p>

    <div>
        ISBN：<?php echo $isbn; ?>
    </div>

    <div>
        書籍名：<?php echo $title; ?>
    </div>

    <div>
        価格：<?php echo $price; ?>
    </div>

    <div>
        出版社：<?php echo $publish; ?>
    </div>

    <div>
        刊行日：<?php echo $published; ?>
    </div>

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