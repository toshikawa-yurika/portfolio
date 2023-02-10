<?php

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


// プルダウン
$age = "";

if (isset($_POST["age"]) & !empty($_POST["age"])) {
    $age = $_POST["age"];
}

// 新しく配列を作る
// 通常はデータベース上に下記のデータを入れておく？
$age_list[] = "20歳未満";
$age_list[] = "20代";
$age_list[] = "30代";
$age_list[] = "40代";
$age_list[] = "50代";
$age_list[] = "60歳以上";

$age_name = "未選択";

if ($age != "") {
    // 空白でなければ、
    $age_name = $age_list[$age - 1];
}


// ラジオボタン
if (isset($_POST["seibetu"]) & !empty($_POST["seibetu"])) {
    $sex = $_POST["seibetu"];
}


// チェックボックス
if (isset($_POST["koumoku"]) & !empty($_POST["koumoku"])) {
    $koumoku = implode(',', $_POST["koumoku"]);
}

if (isset($_POST["naiyou"]) & !empty($_POST["naiyou"])) {
    $naiyou = $_POST["naiyou"];
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

                <form action="contact_mail.php" method="post">
                    <input type="hidden" name="namae" value="<?php echo $name; ?>">
                    <input type="hidden" name="email" value="<?php echo $email; ?>">
                    <input type="hidden" name="tel" value="<?php echo $tel; ?>">
                    <input type="hidden" name="age" value="<?php echo $age_name; ?>">
                    <input type="hidden" name="seibetu" value="<?php echo $sex; ?>">
                    <input type="hidden" name="koumoku[]" value="<?php echo $koumoku; ?>">
                    <input type="hidden" name="naiyou" value="<?php echo $naiyou; ?>">

                    <p>問い合わせ内容をご確認ください。</p>
                    <p>よろしければ「内容を送信する」ボタンを押して下さい。</p>

                    <!-- <dl class="about-dl">
                    <dt class="about-dt">お名前:</dt>
                    <dd class="about-dd">
                        <?php echo htmlspecialchars($name); ?>
                    </dd>

                    <dt class="about-dt">メールアドレス：</dt>
                    <dd class="about-dd">
                        <?php echo htmlspecialchars($email); ?>
                    </dd>

                    <dt class="about-dt">電話番号：</dt>
                    <dd class="about-dd">
                        <?php echo htmlspecialchars($tel); ?>
                    </dd>

                    <dt class="about-dt">ご年齢：</dt>
                    <dd class="about-dd"><?php echo $age_name; ?></dd>

                    <dt class="about-dt">性別：</dt>
                    <dd class="about-dd"><?php echo $sex; ?></dd>

                    <dt class="about-dt">お問い合わせ項目：</dt>
                    <dd class="about-dd"><?php echo $koumoku; ?></dd>

                    <dt class="about-dt">お問い合わせ内容：</dt>
                    <dd class="about-dd">
                        <?php echo nl2br(htmlspecialchars($naiyou)); ?>
                    </dd>
                </dl> -->

                    <ul class="contact-ul">
                        <li>
                            <span class="bold">お名前：</span>
                            <?php echo htmlspecialchars($name); ?>
                            <!-- いらずらでタグが入れられていた場合に、変換して文字として表示 -->
                            <!-- htmlspecialcharsで、タグを無効化する -->
                        </li>

                        <li>
                            <span class="bold">メールアドレス：</span>
                            <?php echo htmlspecialchars($email); ?>
                        </li>
                        <!-- メールアドレスもhtmlspecialcharsいるのか？ -->

                        <li>
                            <span class="bold">電話番号：</span>
                            <?php echo htmlspecialchars($tel); ?>
                        </li>
                        <!-- 電話番号もhtmlspecialcharsいるのか？ -->

                        <!-- プルダウン -->
                        <li>
                            <span class="bold">ご年齢：</span>
                            <?php echo $age_name; ?>
                        </li>

                        <!-- ラジオボタン -->
                        <li>
                            <span class="bold">性別：</span>
                            <?php echo $sex; ?>
                        </li>

                        <!-- チェックボックス -->
                        <li>
                            <span class="bold">お問い合わせ項目：</span>
                            <?php echo $koumoku; ?>
                        </li>

                        <li class="contact-li">
                            <span class="bold">お問い合わせ内容：</span>
                            <?php echo nl2br(htmlspecialchars($naiyou)); ?>
                            <!-- nl2brで、ソースコードの改行をbrに変換 -->
                        </li>

                        <li>
                            <input type="button" value="内容を修正する" onclick="history_back('<?= $name ?>','<?= $email ?>','<?= $tel ?>','<?= $age_name ?>','<?= $sex ?>','<?= $koumoku ?>','<?= $naiyou ?>')" class="button">
                            <input type="submit" value="内容を送信する" name="submit" class="button">
                        </li>
                    </ul>
                </form>
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