<?php

// ------------------------------
// フォームから送られてきた内容を取ってくる

$name = "";

if (isset($_POST["namae"]) & !empty($_POST["namae"])) {
    // このデータは存在している＆空じゃない場合、
    $name = $_POST["namae"];
    // name取ってくる
}

if (isset($_POST["email"]) & !empty($_POST["email"])) {
    $email = $_POST["email"];
}

if (isset($_POST["tel"]) & !empty($_POST["tel"])) {
    $tel = $_POST["tel"];
}

if (isset($_POST["age"]) & !empty($_POST["age"])) {
    $age = $_POST["age"];
}


if (isset($_POST["seibetu"]) & !empty($_POST["seibetu"])) {
    $sex = $_POST["seibetu"];
}

if (isset($_POST["koumoku"]) & !empty($_POST["koumoku"])) {
    $koumoku = implode(',', $_POST["koumoku"]);
}

if (isset($_POST["naiyou"]) & !empty($_POST["naiyou"])) {
    $naiyou = $_POST["naiyou"];
}


// ------------------------------
// 内容を送信するボタンが押されたら、

$msg = "";

if (isset($_POST["submit"])) {

    // 日本語をメールで送る場合のおまじない
    mb_language("ja");
    mb_internal_encoding("UTF-8");

    // 件名を変数subjectに格納
    $subject = "［自動送信］お問い合わせ内容の確認";

    // メール本文を変数bodyに格納
    $body = <<< EOM
{$name}様

お問い合わせありがとうございます。
以下のお問い合わせ内容を、メールにて確認させていただきました。

===================================================
【 お名前 】
{$name}様

【 メールアドレス 】
{$email}

【 電話番号 】
{$tel}

【 ご年齢 】
{$age}

【 性別 】
{$sex}

【 お問い合わせ項目 】
{$koumoku}

【 お問い合わせ内容 】
{$naiyou}

===================================================

内容を確認のうえ、回答させて頂きます。
しばらくお待ちください。
EOM;


    // 送信元のメールアドレスを変数fromEmailに格納
    $fromEmail = "toshityan0822@gmail.com";

    // 送信元の名前を変数fromNameに格納
    $fromName = "歳川　柚里香";

    // ヘッダ情報を変数headerに格納する
    $header = "From: " . mb_encode_mimeheader($fromName) . "<{$fromEmail}>";


    // メール送信を行う

    if (mb_send_mail($email, $subject, $body, $header)) {
        // サンクスページに画面遷移させる
        // header("Location: http://testapp.hippy.jp/contact/thanks.php");
        $msg = 'メール送信に成功しました。';
    } else {
        $msg = 'メール送信に失敗しました。';
    }


    exit;
}


?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact|歳川柚里香のポートフォリオサイト</title>
    <!-- リセットCSS -->
    <link href="./css/riset.css" rel="stylesheet" media="all" />
    <!-- font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- グーグルフォント -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@100&display=swap" rel="stylesheet" />
    <!-- スタイルCSS -->
    <link href="./css/style.css" rel="stylesheet" media="all" />
    <link href="./css/contact.css" rel="stylesheet" media="all" />

    <!-- jQueri -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>


<body>
    <div class="wrap">
        <header class="header">
            <div class="flex header-zentai">
                <div class="logo">
                    <h1 class="h1">
                        <a href="./index.php">
                            <img src="./img/logo.jpg" alt="portfolio" class="header-logo" />
                        </a>
                    </h1>
                </div>

                <div class="flex icon-and-nav">
                    <div class="icon">
                        <i class="fa-brands fa-instagram"></i>
                        <i class="fa-brands fa-facebook"></i>
                    </div>

                    <!-- ハンバーガーメニュー -->
                    <div class="menu">
                        <a id="hamburger" href="#">
                            <span></span>
                            <span></span>
                            <span></span>
                        </a>
                    </div>

                    <nav class="nav" id="nav">
                        <ul class="flex nav-ul">
                            <li class="nav-ul-li">
                                <a href="./about.html" class="nav-link">about</a>
                            </li>
                            <li class="nav-ul-li">
                                <a href="./works.html" class="nav-link">works</a>
                            </li>
                            <li class="nav-ul-li">
                                <a href="./index.php#blog" class="nav-link" id="navLink">blog</a>
                            </li>
                            <li class="nav-ul-li">
                                <a href="#" class="nav-link nav-contact">contact</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </header>


        <main>

            <p><?php echo $msg ?></p>


        </main>

        <footer class="footer">
            <a href="#">
                <img src="./img/modorubutton.svg" alt="topへ戻る" class="footer-img" />
            </a>

            <div class="tap-waku">
                <div class="tap">
                    <p class="tap-p">TAP</p>
                </div>
            </div>

            <div class="flex footer-flex">
                <nav class="">
                    <ul class="footer-nav-ul">
                        <li class="footer-nav-ul-li">
                            <a href="./about.html" class="footer-nav-link">about</a>
                        </li>
                        <li class="footer-nav-ul-li">
                            <a href="./works.html" class="footer-nav-link">works</a>
                        </li>
                        <li class="footer-nav-ul-li">
                            <a href="./index.php#blog" class="footer-nav-link">blog</a>
                        </li>
                        <li class="footer-nav-ul-li">
                            <a href="#" class="footer-nav-link nav-contact">contact</a>
                        </li>
                    </ul>
                </nav>
                <p class="copyright">
                    <small>&copy;toshikawa yurika portfolio 2022</small>
                </p>
            </div>
        </footer>
    </div>
    <script src="./js/style.js"></script>
    <script src="./js/contact.js"></script>
</body>

</html>
