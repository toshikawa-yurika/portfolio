<?php
// 外部化されたDBmanager関数を読み込む
require_once "./basic18DBmanager.php";

// 検索機能とか付けてもいいかも

// データベースに登録されている書籍データを読み込む処理
try {
    // ①データベースに接続
    $db = getdb();

    $db->setAttribute(PDO::ATTR_CASE, PDO::CASE_LOWER);
    // 全部小文字にする


    // ②SQL文（SELECT FROM）を作成
    // 半角スペース最後に付けないと、SQL文ちゃんと作れない
    $sql = "SELECT * FROM ";

    $sql .= "books ";
    $sql .= "ORDER BY ";
    $sql .= "published DESC";
    // 刊行日の降順で並べる


    // ③SQL文をprepareメソッドに代入して、準備する
    $stt = $db->prepare($sql);


    // SQL文に登録データを埋め込む
    // $stt->bindValue(":isbn", $isbn);
    // 今回はいらない

    //SQL文を実行する
    $stt->execute();
    // executeメソッドは、取得した結果を自分自身にセットするメソッド。
    //今回のこういう場合は、queryメソッドでもいい。

    // 結果セットを取得して、配列に代入する
    $booklist = [];
    $stt->setFetchMode(PDO::FETCH_ASSOC);
    // モード（何で取ってくるか？）を設定するので、あとはfetch()だけで取ってこれる

    while ($row = $stt->fetch()) {
        // 繰り返し条件式＝fetchメソッドがfalseを返すまで
        // fetchメソッドは、次のレコードがない場合、falseを返す

        // fetchで1行ずつ取る、FETCH_ASSOCは連想配列で取る

        // booklistという配列に一度入れる
        $booklist[] = [
            'isbn' => $row['isbn'],
            'title' => $row['title'],
            'price' => $row['price'],
            'publish' => $row['publish'],
            'published' => $row['published'],
        ];
    }

    // print_r($booklist);
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
    <title>書籍一覧画面</title>
</head>

<body>
    <h1>書籍一覧画面</h1>
    <p>登録している書籍は以下のようになります。</p>

    <table border="1">
        <tr>
            <th>No</th>
            <th>ISBNコード</th>
            <th>書籍名</th>
            <th>価格(円)</th>
            <th>出版社</th>
            <th>刊行日</th>
            <th>編集</th>
            <th>削除</th>
        </tr>

        <?php foreach ($booklist as $key => $value) : ?>
            <!-- こうやって分けて書くこともできる -->

            <!-- 出力のテンプレート -->
            <tr>
                <td><?= $key + 1 ?></td>
                <td><?= $value['isbn'] ?></td>
                <td><?= $value['title'] ?></td>
                <td><?= $value['price'] ?></td>
                <td><?= $value['publish'] ?></td>
                <td><?= $value['published'] ?></td>


                <?php $href = "./basic19update.php?isbn=" . $value['isbn']; ?>
                <td><a href="<?php echo $href ?>">編集</a></td>


                <!-- <?php $href = "./basic19delete.php?isbn=" . $value['isbn']; ?> -->


                <td><a href="" onclick="book_delete('<?= $value['title'] ?>','<?= $value['isbn'] ?>')">削除</a></td>
                <!-- <?php echo $href ?>のように書いた場合、book_deleteを実行後、$hrefに遷移します。 -->
                <!-- https://hacknote.jp/archives/5311/ -->
                <!-- この場合、jsでwindow.location.hrefを書かなくてもいい -->

            </tr>

        <?php endforeach; ?>
        <!--foreach ($booklist as $key => $value) :（処理） endforeach;は、  -->
        <!--foreach ($variable as $key => $value) {（処理）}と一緒 -->
        <!-- if文とかも:endifで終われる -->

    </table>

    <footer>
        <div>
            <a href="basic19insert_form.php">新規登録</a>
            <a href="basic19result_list.php">書籍一覧</a>
            <!-- 下記まだないやつ -->
            <a href="basic19update.php">書籍の編集</a>
            <a href="basic19delete.php">書籍の削除</a>
        </div>
    </footer>

    <script src="./basic19.js"></script>
</body>

</html>
