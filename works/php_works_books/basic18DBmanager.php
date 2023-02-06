<?php

// データベースの接続を関数化する

/**
 * getdb function
 *
 * @return PDO
 */
function getdb(): PDO
// pdoはハンドルという
{    // :PDOは戻り値、PDOオブジェクトを返す

    $dsn = "mysql:dbname=app2_db;host=localhost;charset=utf8";
    $usr = "root";
    $passwd = "";

    // PDOクラスを使って、データベースに接続して、$dbというオブジェクトを生成する
    $db = new PDO($dsn, $usr, $passwd);
    // $dbを返す

    // 接続したデータに接続オプションを後から設定
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // ->は、アクセス演算子
    // エラーの通知方法をサイレント→「エラー出力しない」に設定
    // EXCEPTION→例外を出力

    return $db;
}

// try catchでやる場合
// die("データベースに接続する時にエラーが発生したため、アプリを終了します。");
