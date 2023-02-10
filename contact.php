<?php

$name = "";

if (isset($_GET["name"]) & !empty($_GET["name"])) {
    $name = $_GET["name"];
}

$email = "";

if (isset($_GET["email"]) & !empty($_GET["email"])) {
    $email = $_GET["email"];
}

$tel = "";

if (isset($_GET["tel"]) & !empty($_GET["tel"])) {
    $tel = $_GET["tel"];
}

// 年齢、性別、項目名は保留

$naiyou = "";

if (isset($_GET["naiyou"]) & !empty($_GET["naiyou"])) {
    $naiyou = $_GET["naiyou"];
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
            <div class="main-inner">
                <h2 class="h2">Contact</h2>

                <form id="otoiawase" action="./contact_receive.php" method="post">
                    <p>
                        お問い合わせは、下記のメールフォームより送信をお願いします。<br />
                        必須の項目は必ずご記入お願いします。
                    </p>
                    <ul class="contact-ul">
                        <li class="contact-li">
                            <p>
                                お名前
                                <span class="span">必須</span>
                            </p>

                            <input type="text" name="namae" required placeholder="例）徳島　太郎" class="border" value="<?php echo $name; ?>" />
                        </li>
                        <li class="contact-li">
                            <p>
                                メールアドレス<span class="span">必須</span>
                            </p>

                            <input type="email" name="email" required placeholder="tokushima@example.com" class="border" value="<?php echo $email; ?>" />
                        </li>
                        <li class="contact-li">
                            <p>電話番号</p>

                            <input type="tel" name="tel" placeholder="0123-123-456" class="border" value="<?php echo $tel; ?>" />
                        </li>
                        <li class="contact-li">
                            <p>ご年齢</p>
                            <label>
                                <div class="pulldown-div">
                                    <select name="age" id="age" class="pulldown-age">
                                        <option value="" selected>
                                            選択してください
                                        </option>
                                        <!-- valueの値とpostの値が一緒だったら、selectedを付ける処理をする -->
                                        <option value="1">20歳未満</option>
                                        <option value="2">20代</option>
                                        <option value="3">30代</option>
                                        <option value="4">40代</option>
                                        <option value="5">50代</option>
                                        <option value="6">60歳以上</option>
                                    </select>
                                </div>
                            </label>
                        </li>

                        <li class="contact-li">
                            <p>性別</p>

                            <input type="radio" name="seibetu" value="男性" id="boy" />
                            <label for="boy">男性</label>

                            <input type="radio" name="seibetu" value="女性" id="girl" /><label for="girl">女性</label>

                            <input type="radio" name="seibetu" value="その他" id="other" /><label for="other">その他</label>
                        </li>

                        <li class="contact-li">
                            <p>
                                お問い合わせ項目<span class="span">2個まで</span>
                            </p>
                            <div class="contact-flex">
                                <div class="checklist">
                                    <input type="checkbox" name="koumoku[]" value="スキルについて" id="koumoku-skill" onclick="click_cb();" /><label for="koumoku-skill">スキルについて</label>
                                </div>

                                <div class="checklist">
                                    <input type="checkbox" name="koumoku[]" value="ワークスについて" id="koumoku-works" onclick="click_cb();" /><label for="koumoku-works">ワークスについて</label>
                                </div>

                                <div class="checklist">
                                    <input type="checkbox" name="koumoku[]" value="ブログについて" id="koumoku-blog" onclick="click_cb();" /><label for="koumoku-blog">ブログについて</label>
                                </div>
                            </div>
                        </li>

                        <li class="contact-li">
                            <p>
                                お問い合わせ内容<span class="span">必須</span>
                            </p>

                            <textarea name="naiyou" id="naiyou" cols="30" rows="10" class="border otoiawase-naiyou"><?php echo $naiyou; ?></textarea>
                        </li>

                        <li class="contact-li">
                            <input type="submit" value="内容を確認する" class="button">
                        </li>
                    </ul>

                </form>

            </div>
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
