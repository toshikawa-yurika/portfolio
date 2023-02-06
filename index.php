<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>歳川柚里香のポートフォリオサイト</title>

    <!-- リセットCSS -->
    <link href="./css/riset.css" rel="stylesheet" media="all" />

    <!-- font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- グーグルフォント -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Kiwi+Maru:wght@300&family=Lato:wght@100;300;400;700;900&display=swap" rel="stylesheet" />

    <!-- スタイルCSS -->
    <link href="./css/style.css" rel="stylesheet" media="all" />

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
                                <a href="#blog" class="nav-link" id="navLink">blog</a>
                            </li>
                            <li class="nav-ul-li">
                                <a href="./contact.html" class="nav-link">contact</a>
                            </li>
                        </ul>
                    </nav>
                    <!------------------------->
                </div>
            </div>
        </header>

        <main>
            <div class="sumaho-img">
                <img src="./img/sumaho-kv.png" alt="キービジュアル" class="sumaho-img-gazou" />
                <div class="sumaho-maru">
                    <p class="sumaho-maru-p">
                        歳川 柚里香のポートフォリオサイトです。
                    </p>
                </div>
            </div>

            <div class="pc-img">
                <img src="./img/pc-kv.png" alt="キービジュアル" class="pc-img-gazou" />
                <div class="pc-maru">
                    <p class="pc-maru-p">
                        歳川 柚里香のポートフォリオサイトです。
                    </p>
                </div>
            </div>

            <div class="section-inner">
                <section class="section skill">
                    <h2 class="h2">Skill</h2>

                    <div class="flex skill-flex">

                        <div class="illustrator skill-div fade-in">
                            <h3 class="h3 skill-h3">illustrator</h3>
                            <!-- <div class="skill-img illustrator-img">
                                <svg class="skill-svg" width="36" height="35" viewBox="0 0 36 35" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0 0V34.6452H36V0H0ZM1.49962 1.48029H34.4993V33.1638H1.49962V1.48029ZM12.4864 19.6191L11.2972 24.0555C11.2736 24.1832 11.2264 24.2054 11.0801 24.2054H8.87737C8.7255 24.2054 8.70187 24.1588 8.7255 23.9911L12.9847 9.26596C13.0612 8.99944 13.1074 8.76291 13.131 8.02776C13.131 7.92893 13.1839 7.88339 13.2604 7.88339H16.4014C16.5015 7.88339 16.5532 7.90671 16.5769 8.02776L21.3525 24.0144C21.3818 24.1355 21.3525 24.2054 21.2299 24.2054H18.7571C18.6278 24.2054 18.558 24.1766 18.5344 24.0777L17.2924 19.618H12.4819L12.4864 19.6191ZM16.6702 17.2127C16.2484 15.5758 15.2584 11.99 14.8894 10.2543H14.8601C14.544 11.9833 13.7464 14.9162 13.1321 17.2127H16.6702ZM23.4202 8.98278C23.4202 8.02887 24.0885 7.46696 24.9559 7.46696C25.8705 7.46696 26.4915 8.07995 26.4915 8.98278C26.4915 9.96002 25.8469 10.4986 24.9266 10.4986C24.03 10.4986 23.4146 9.96113 23.4146 8.98278H23.4202ZM23.5901 12.3487C23.5901 12.2332 23.6374 12.1866 23.76 12.1866H26.1158C26.2508 12.1866 26.2969 12.2332 26.2969 12.3598V24.0489C26.2969 24.1699 26.2733 24.2165 26.1214 24.2165H23.8005C23.6486 24.2165 23.6014 24.1466 23.6014 24.0255V12.3476L23.5901 12.3487Z" />
                                    <path d="M1.49962 1.43029H1.44963V1.48029V33.1638V33.2138H1.49962H34.4993H34.5493V33.1638V1.48029V1.43029H34.4993H1.49962ZM16.529 8.04207L21.3042 24.0274C21.3178 24.0844 21.3136 24.1152 21.3049 24.1302C21.2988 24.1406 21.283 24.1554 21.2299 24.1554H18.7571C18.6945 24.1554 18.655 24.1481 18.6297 24.1346C18.6079 24.1229 18.5921 24.1043 18.583 24.0661L18.583 24.0661L18.5825 24.0643L17.3405 19.6046L17.3304 19.568H17.2924H12.4819L12.476 19.6163L12.4381 19.6061L11.249 24.0426L11.2488 24.0425L11.2481 24.0464C11.2369 24.1069 11.2225 24.1266 11.2074 24.1365C11.1883 24.1489 11.1545 24.1554 11.0801 24.1554H8.87737C8.80059 24.1554 8.78305 24.1421 8.77711 24.1332C8.7733 24.1276 8.76891 24.1164 8.76785 24.0931C8.76683 24.0705 8.76909 24.0409 8.77453 24.0016L13.0328 9.27985L13.0328 9.27975C13.1109 9.00776 13.1573 8.7667 13.181 8.02936L13.181 8.02937V8.02776C13.181 7.98695 13.1918 7.96487 13.2031 7.95314C13.2141 7.94162 13.232 7.93339 13.2604 7.93339H16.4014C16.4497 7.93339 16.4735 7.9396 16.4881 7.95042C16.5017 7.96042 16.5169 7.98165 16.5278 8.03734L16.5276 8.03738L16.529 8.04207ZM16.6702 17.2627H16.7348L16.7187 17.2002C16.6013 16.7447 16.4401 16.139 16.2606 15.4646C15.7943 13.7124 15.2045 11.4962 14.9383 10.2439L14.9299 10.2043H14.8894H14.8601H14.8184L14.8109 10.2453C14.5189 11.8424 13.8152 14.4694 13.2248 16.673C13.177 16.8516 13.1299 17.0275 13.0838 17.1997L13.067 17.2627H13.1321H16.6702ZM23.4652 9.03278H23.4702V8.98278C23.4702 8.5181 23.6327 8.15282 23.8971 7.90353C24.1619 7.65385 24.5329 7.51696 24.9559 7.51696C25.4018 7.51696 25.7725 7.66619 26.0315 7.92189C26.2905 8.17754 26.4415 8.54316 26.4415 8.98278C26.4415 9.45992 26.2845 9.82472 26.0201 10.0705C25.7552 10.3168 25.3772 10.4486 24.9266 10.4486C24.4882 10.4486 24.1237 10.3173 23.8691 10.0716C23.6237 9.83477 23.4753 9.48669 23.4652 9.03278ZM23.6514 12.2924L23.6462 12.2929C23.6506 12.2768 23.6569 12.2669 23.6637 12.2604C23.6768 12.2478 23.7031 12.2366 23.76 12.2366H26.1158C26.18 12.2366 26.2083 12.2482 26.2222 12.2616C26.2355 12.2746 26.2469 12.3003 26.2469 12.3598V24.0489C26.2469 24.1108 26.2395 24.1333 26.2294 24.1441C26.2202 24.154 26.1963 24.1665 26.1214 24.1665H23.8005C23.7311 24.1665 23.6977 24.1504 23.6803 24.1321C23.6625 24.1132 23.6514 24.0811 23.6514 24.0255V12.3476V12.2924ZM0.05 34.5952V0.05H35.95V34.5952H0.05Z" stroke-opacity="0.8" stroke-width="0.1" />
                                </svg>
                            </div> -->

                            <img src="./img/illustrator.svg" alt="illustrator" class="skill-img" />
                            <p class="skill-p">
                                Photoshopと共に学びました。授業では最終課題でFacebookカバーを作成しました。<br>worksの<span class="bold"><a href="./facebookcover3.html">うさぎのFacebookカバー</a></span>をぜひご覧ください。
                                ちなみに、こちらの<span class="bold">ポートフォリオサイトのロゴ</span>もillustratorで作成しました。
                            </p>
                        </div>


                        <div class="Photoshop skill-div fade-in">
                            <h3 class="h3 skill-h3">Photoshop</h3>
                            <!-- <div class="skill-img">
                                <svg viewBox="0 0 36 35" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0 0V34.6452H36V0H0ZM1.49962 1.48029H34.4993V33.1638H1.49962V1.48029ZM8.70075 8.11438C8.70075 8.01554 8.91225 7.94114 9.03487 7.94114C10.3234 7.88734 11.613 7.86216 12.9026 7.86563C17.0629 7.86563 18.6795 10.1155 18.6795 12.9961C18.6795 16.7618 15.9143 18.3753 12.5269 18.3753C11.9531 18.3753 11.7596 18.3465 11.3614 18.3465V24.0377C11.3614 24.1588 11.3141 24.211 11.1915 24.211H8.87063C8.748 24.211 8.70075 24.1643 8.70075 24.0433V8.11438ZM11.3614 15.9811C11.7067 16.0044 11.9824 16.0044 12.5798 16.0044C14.3314 16.0044 15.984 15.3914 15.984 13.0494C15.984 11.1693 14.8005 10.2154 12.7969 10.2154C12.2051 10.2154 11.637 10.2388 11.3614 10.2621V15.9811ZM24.2752 14.2165C23.0861 14.2165 22.6879 14.8062 22.6879 15.2926C22.6879 15.8301 22.9579 16.1954 24.5452 17.005C26.8954 18.1333 27.639 19.2027 27.639 20.7929C27.639 23.1582 25.8053 24.4309 23.3325 24.4309C22.0196 24.4309 20.9014 24.1588 20.2568 23.7945C20.1634 23.7479 20.1398 23.6735 20.1398 23.5513V21.377C20.1398 21.2326 20.2106 21.1804 20.3096 21.256C21.2075 21.8322 22.2559 22.1378 23.3269 22.1355C24.516 22.1355 25.0087 21.6491 25.0087 20.985C25.0087 20.4475 24.6634 19.9844 23.157 19.2038C21.024 18.1977 20.133 17.1738 20.133 15.4614C20.133 13.5525 21.645 11.9678 24.264 11.9678C25.5533 11.9678 26.4611 12.1643 26.9595 12.3787C27.0821 12.4542 27.1057 12.5752 27.1057 12.6741V14.704C27.1057 14.8251 27.0292 14.9006 26.883 14.8484C26.2148 14.4608 25.2304 14.2121 24.2696 14.2121L24.2752 14.2165Z" />
                                </svg>
                            </div> -->
                            <img src="./img/Photoshop.svg" alt="Photoshop" class="skill-img" />
                            <p class="skill-p">
                                illustratorと共に学びました。授業では最終課題でFacebookカバーを作成しました。<br>worksの<span class="bold"><a href="./works.html#works3">Facebookカバー3点</a></span>をぜひご覧ください。
                            </p>
                        </div>

                        <div class="html skill-div fade-in">
                            <h3 class="h3 skill-h3">HTML5</h3>
                            <!-- <div class="skill-img html-img">
                                <svg viewBox="0 0 40 36" xmlns="http://www.w3.org/2000/svg">
                                    <mask id="path-1-inside-1_89_12" fill="white">
                                        <path d="M17.7656 27.7569C17.7656 27.9497 17.6883 28.1346 17.5505 28.2709C17.4128 28.4072 17.226 28.4838 17.0312 28.4838H14.8281V35.0262C14.8281 35.219 14.7508 35.4039 14.613 35.5402C14.4753 35.6765 14.2885 35.7531 14.0938 35.7531C13.899 35.7531 13.7122 35.6765 13.5745 35.5402C13.4367 35.4039 13.3594 35.219 13.3594 35.0262V28.4838H11.1562C10.9615 28.4838 10.7747 28.4072 10.637 28.2709C10.4992 28.1346 10.4219 27.9497 10.4219 27.7569C10.4219 27.5641 10.4992 27.3792 10.637 27.2428C10.7747 27.1065 10.9615 27.0299 11.1562 27.0299H17.0312C17.226 27.0299 17.4128 27.1065 17.5505 27.2428C17.6883 27.3792 17.7656 27.5641 17.7656 27.7569ZM6.75 27.0299C6.55523 27.0299 6.36844 27.1065 6.23072 27.2428C6.093 27.3792 6.01562 27.5641 6.01562 27.7569V30.6646H2.34375V27.7569C2.34375 27.5641 2.26638 27.3792 2.12866 27.2428C1.99093 27.1065 1.80414 27.0299 1.60938 27.0299C1.41461 27.0299 1.22782 27.1065 1.09009 27.2428C0.952372 27.3792 0.875 27.5641 0.875 27.7569V35.0262C0.875 35.219 0.952372 35.4039 1.09009 35.5402C1.22782 35.6765 1.41461 35.7531 1.60938 35.7531C1.80414 35.7531 1.99093 35.6765 2.12866 35.5402C2.26638 35.4039 2.34375 35.219 2.34375 35.0262V32.1184H6.01562V35.0262C6.01562 35.219 6.093 35.4039 6.23072 35.5402C6.36844 35.6765 6.55523 35.7531 6.75 35.7531C6.94477 35.7531 7.13156 35.6765 7.26928 35.5402C7.407 35.4039 7.48438 35.219 7.48438 35.0262V27.7569C7.48438 27.5641 7.407 27.3792 7.26928 27.2428C7.13156 27.1065 6.94477 27.0299 6.75 27.0299ZM38.3281 34.2992H34.6562V27.7569C34.6562 27.5641 34.5789 27.3792 34.4412 27.2428C34.3034 27.1065 34.1166 27.0299 33.9219 27.0299C33.7271 27.0299 33.5403 27.1065 33.4026 27.2428C33.2649 27.3792 33.1875 27.5641 33.1875 27.7569V35.0262C33.1875 35.219 33.2649 35.4039 33.4026 35.5402C33.5403 35.6765 33.7271 35.7531 33.9219 35.7531H38.3281C38.5229 35.7531 38.7097 35.6765 38.8474 35.5402C38.9851 35.4039 39.0625 35.219 39.0625 35.0262C39.0625 34.8334 38.9851 34.6485 38.8474 34.5121C38.7097 34.3758 38.5229 34.2992 38.3281 34.2992ZM29.0016 27.0663C28.8521 27.024 28.6933 27.0274 28.5459 27.0761C28.3985 27.1247 28.2693 27.2163 28.1754 27.3389L25.1094 31.5914L22.0434 27.3389C21.9494 27.2163 21.8203 27.1247 21.6729 27.0761C21.5254 27.0274 21.3666 27.024 21.2172 27.0663C21.0686 27.1125 20.9387 27.2044 20.8463 27.3285C20.7539 27.4527 20.7037 27.6027 20.7031 27.7569V35.0262C20.7031 35.219 20.7805 35.4039 20.9182 35.5402C21.0559 35.6765 21.2427 35.7531 21.4375 35.7531C21.6323 35.7531 21.8191 35.6765 21.9568 35.5402C22.0945 35.4039 22.1719 35.219 22.1719 35.0262V30.0285L24.5035 33.2634C24.5735 33.3573 24.6648 33.4336 24.77 33.4863C24.8752 33.5389 24.9915 33.5663 25.1094 33.5663C25.2273 33.5663 25.3435 33.5389 25.4488 33.4863C25.554 33.4336 25.6453 33.3573 25.7152 33.2634L28.0469 30.0285V35.0262C28.0469 35.219 28.1242 35.4039 28.262 35.5402C28.3997 35.6765 28.5865 35.7531 28.7812 35.7531C28.976 35.7531 29.1628 35.6765 29.3005 35.5402C29.4383 35.4039 29.5156 35.219 29.5156 35.0262V27.7569C29.515 27.6027 29.4649 27.4527 29.3725 27.3285C29.2801 27.2044 29.1502 27.1125 29.0016 27.0663ZM33.1875 21.2145C32.9927 21.2145 32.8059 21.1379 32.6682 21.0016C32.5305 20.8652 32.4531 20.6804 32.4531 20.4876V12.4913H22.9062C22.7115 12.4913 22.5247 12.4147 22.387 12.2784C22.2492 12.1421 22.1719 11.9572 22.1719 11.7644V2.3143H5.28125C5.08648 2.3143 4.89969 2.39089 4.76197 2.52722C4.62425 2.66354 4.54688 2.84844 4.54688 3.04123V20.4876C4.54688 20.6804 4.4695 20.8652 4.33178 21.0016C4.19406 21.1379 4.00727 21.2145 3.8125 21.2145C3.61773 21.2145 3.43094 21.1379 3.29322 21.0016C3.1555 20.8652 3.07812 20.6804 3.07812 20.4876V3.04123C3.07812 2.46285 3.31024 1.90816 3.72341 1.49918C4.13657 1.0902 4.69694 0.860442 5.28125 0.860442H22.9062C23.0028 0.857384 23.0989 0.875327 23.1877 0.913006C23.2766 0.950685 23.3559 1.00718 23.4203 1.07852L33.7016 11.2374C33.8365 11.3812 33.9147 11.5682 33.9219 11.7644V20.4876C33.9219 20.6804 33.8445 20.8652 33.7068 21.0016C33.5691 21.1379 33.3823 21.2145 33.1875 21.2145ZM23.6406 11.0375H31.4066L23.6406 3.35018V11.0375Z" />
                                    </mask>
                                    <path d="M17.7656 27.7569C17.7656 27.9497 17.6883 28.1346 17.5505 28.2709C17.4128 28.4072 17.226 28.4838 17.0312 28.4838H14.8281V35.0262C14.8281 35.219 14.7508 35.4039 14.613 35.5402C14.4753 35.6765 14.2885 35.7531 14.0938 35.7531C13.899 35.7531 13.7122 35.6765 13.5745 35.5402C13.4367 35.4039 13.3594 35.219 13.3594 35.0262V28.4838H11.1562C10.9615 28.4838 10.7747 28.4072 10.637 28.2709C10.4992 28.1346 10.4219 27.9497 10.4219 27.7569C10.4219 27.5641 10.4992 27.3792 10.637 27.2428C10.7747 27.1065 10.9615 27.0299 11.1562 27.0299H17.0312C17.226 27.0299 17.4128 27.1065 17.5505 27.2428C17.6883 27.3792 17.7656 27.5641 17.7656 27.7569ZM6.75 27.0299C6.55523 27.0299 6.36844 27.1065 6.23072 27.2428C6.093 27.3792 6.01562 27.5641 6.01562 27.7569V30.6646H2.34375V27.7569C2.34375 27.5641 2.26638 27.3792 2.12866 27.2428C1.99093 27.1065 1.80414 27.0299 1.60938 27.0299C1.41461 27.0299 1.22782 27.1065 1.09009 27.2428C0.952372 27.3792 0.875 27.5641 0.875 27.7569V35.0262C0.875 35.219 0.952372 35.4039 1.09009 35.5402C1.22782 35.6765 1.41461 35.7531 1.60938 35.7531C1.80414 35.7531 1.99093 35.6765 2.12866 35.5402C2.26638 35.4039 2.34375 35.219 2.34375 35.0262V32.1184H6.01562V35.0262C6.01562 35.219 6.093 35.4039 6.23072 35.5402C6.36844 35.6765 6.55523 35.7531 6.75 35.7531C6.94477 35.7531 7.13156 35.6765 7.26928 35.5402C7.407 35.4039 7.48438 35.219 7.48438 35.0262V27.7569C7.48438 27.5641 7.407 27.3792 7.26928 27.2428C7.13156 27.1065 6.94477 27.0299 6.75 27.0299ZM38.3281 34.2992H34.6562V27.7569C34.6562 27.5641 34.5789 27.3792 34.4412 27.2428C34.3034 27.1065 34.1166 27.0299 33.9219 27.0299C33.7271 27.0299 33.5403 27.1065 33.4026 27.2428C33.2649 27.3792 33.1875 27.5641 33.1875 27.7569V35.0262C33.1875 35.219 33.2649 35.4039 33.4026 35.5402C33.5403 35.6765 33.7271 35.7531 33.9219 35.7531H38.3281C38.5229 35.7531 38.7097 35.6765 38.8474 35.5402C38.9851 35.4039 39.0625 35.219 39.0625 35.0262C39.0625 34.8334 38.9851 34.6485 38.8474 34.5121C38.7097 34.3758 38.5229 34.2992 38.3281 34.2992ZM29.0016 27.0663C28.8521 27.024 28.6933 27.0274 28.5459 27.0761C28.3985 27.1247 28.2693 27.2163 28.1754 27.3389L25.1094 31.5914L22.0434 27.3389C21.9494 27.2163 21.8203 27.1247 21.6729 27.0761C21.5254 27.0274 21.3666 27.024 21.2172 27.0663C21.0686 27.1125 20.9387 27.2044 20.8463 27.3285C20.7539 27.4527 20.7037 27.6027 20.7031 27.7569V35.0262C20.7031 35.219 20.7805 35.4039 20.9182 35.5402C21.0559 35.6765 21.2427 35.7531 21.4375 35.7531C21.6323 35.7531 21.8191 35.6765 21.9568 35.5402C22.0945 35.4039 22.1719 35.219 22.1719 35.0262V30.0285L24.5035 33.2634C24.5735 33.3573 24.6648 33.4336 24.77 33.4863C24.8752 33.5389 24.9915 33.5663 25.1094 33.5663C25.2273 33.5663 25.3435 33.5389 25.4488 33.4863C25.554 33.4336 25.6453 33.3573 25.7152 33.2634L28.0469 30.0285V35.0262C28.0469 35.219 28.1242 35.4039 28.262 35.5402C28.3997 35.6765 28.5865 35.7531 28.7812 35.7531C28.976 35.7531 29.1628 35.6765 29.3005 35.5402C29.4383 35.4039 29.5156 35.219 29.5156 35.0262V27.7569C29.515 27.6027 29.4649 27.4527 29.3725 27.3285C29.2801 27.2044 29.1502 27.1125 29.0016 27.0663ZM33.1875 21.2145C32.9927 21.2145 32.8059 21.1379 32.6682 21.0016C32.5305 20.8652 32.4531 20.6804 32.4531 20.4876V12.4913H22.9062C22.7115 12.4913 22.5247 12.4147 22.387 12.2784C22.2492 12.1421 22.1719 11.9572 22.1719 11.7644V2.3143H5.28125C5.08648 2.3143 4.89969 2.39089 4.76197 2.52722C4.62425 2.66354 4.54688 2.84844 4.54688 3.04123V20.4876C4.54688 20.6804 4.4695 20.8652 4.33178 21.0016C4.19406 21.1379 4.00727 21.2145 3.8125 21.2145C3.61773 21.2145 3.43094 21.1379 3.29322 21.0016C3.1555 20.8652 3.07812 20.6804 3.07812 20.4876V3.04123C3.07812 2.46285 3.31024 1.90816 3.72341 1.49918C4.13657 1.0902 4.69694 0.860442 5.28125 0.860442H22.9062C23.0028 0.857384 23.0989 0.875327 23.1877 0.913006C23.2766 0.950685 23.3559 1.00718 23.4203 1.07852L33.7016 11.2374C33.8365 11.3812 33.9147 11.5682 33.9219 11.7644V20.4876C33.9219 20.6804 33.8445 20.8652 33.7068 21.0016C33.5691 21.1379 33.3823 21.2145 33.1875 21.2145ZM23.6406 11.0375H31.4066L23.6406 3.35018V11.0375Z" stroke-width="2" mask="url(#path-1-inside-1_89_12)" />
                                </svg>
                            </div> -->
                            <img src="./img/HTML.svg" alt="HTML5" class="skill-img html-img" />
                            <p class="skill-p">
                                CSSと共に学びました。知らない要素もまだまだあるかと思いますが、割と使いこなせていると思います。<br>
                                ぜひ<span class="bold"><a href="#blog">blog</a></span>やworksの<span class="bold"><a href="./HTMLsaisyuukadai.html">WEBサイトトップページ</a></span>をご覧ください。
                            </p>
                        </div>

                        <div class="css skill-div fade-in">
                            <h3 class="h3 skill-h3">CSS3</h3>
                            <!-- <div class="skill-img">
                                <svg viewBox="0 0 34 38" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1.5814 31.9629C1.5814 34.1067 3.18256 35.8607 5.13953 35.8607C5.97138 35.8655 6.77248 35.551 7.37326 34.9837C7.53399 34.8517 7.73935 34.7844 7.94825 34.7952C8.15715 34.8061 8.35421 34.8943 8.5 35.0422C8.63845 35.1987 8.70969 35.4021 8.69862 35.6095C8.68755 35.8168 8.59504 36.0118 8.4407 36.1531C7.5369 36.963 6.36089 37.4143 5.13953 37.4199C2.31279 37.4199 0 34.9642 0 31.9629C0 28.9615 2.31279 26.5059 5.13953 26.5059C6.36089 26.5114 7.5369 26.9627 8.4407 27.7727C8.59504 27.9139 8.68755 28.1089 8.69862 28.3163C8.70969 28.5236 8.63845 28.7271 8.5 28.8836C8.35421 29.0315 8.15715 29.1197 7.94825 29.1305C7.73935 29.1413 7.53399 29.074 7.37326 28.942C6.77248 28.3747 5.97138 28.0602 5.13953 28.065C3.18256 28.065 1.5814 29.819 1.5814 31.9629ZM17.514 31.1248C15.814 30.6766 15.0233 30.3842 15.0233 29.6241C15.0233 28.5327 15.8337 27.8701 17.1977 27.8701C18.0808 27.8687 18.9406 28.149 19.6488 28.6692C19.7293 28.7357 19.8223 28.786 19.9225 28.8171C20.0226 28.8482 20.1281 28.8596 20.2327 28.8505C20.3373 28.8415 20.4391 28.8122 20.5323 28.7644C20.6254 28.7165 20.7081 28.6511 20.7756 28.5717C20.8431 28.4924 20.8941 28.4007 20.9256 28.3019C20.9572 28.2032 20.9687 28.0993 20.9595 27.9961C20.9503 27.8929 20.9206 27.7926 20.8721 27.7007C20.8236 27.6089 20.7572 27.5274 20.6767 27.4608C19.6695 26.7245 18.4515 26.322 17.1977 26.311C14.9442 26.311 13.4419 27.6362 13.4419 29.6241C13.4419 31.6121 15.4779 32.1967 17.1186 32.6255C18.7593 33.0543 19.7674 33.4051 19.7674 34.3016C19.7674 34.7888 19.7674 36.0556 17.1977 36.0556C16.3096 36.0504 15.4455 35.7709 14.7267 35.2566C14.5663 35.126 14.3602 35.063 14.153 35.0812C13.9458 35.0994 13.7542 35.1975 13.6198 35.354C13.4861 35.5153 13.4217 35.7218 13.4401 35.9293C13.4586 36.1368 13.5585 36.329 13.7186 36.4649C14.7258 37.2012 15.9439 37.6037 17.1977 37.6148C19.8267 37.6148 21.3488 36.4064 21.3488 34.3016C21.3488 32.1967 19.2337 31.5536 17.514 31.1248ZM30.1651 31.1248C28.4651 30.6766 27.6744 30.3842 27.6744 29.6241C27.6744 28.5327 28.4849 27.8701 29.8488 27.8701C30.7319 27.8687 31.5918 28.149 32.3 28.6692C32.4625 28.8036 32.6725 28.8688 32.8838 28.8505C33.0951 28.8322 33.2904 28.732 33.4267 28.5717C33.5631 28.4115 33.6292 28.2044 33.6107 27.9961C33.5921 27.7878 33.4904 27.5952 33.3279 27.4608C32.3207 26.7245 31.1027 26.322 29.8488 26.311C27.5953 26.311 26.093 27.6362 26.093 29.6241C26.093 31.6121 28.1291 32.1967 29.7698 32.6255C31.4105 33.0543 32.4186 33.4051 32.4186 34.3016C32.4186 34.7888 32.4186 36.0556 29.8488 36.0556C28.9607 36.0504 28.0966 35.7709 27.3779 35.2566C27.2175 35.126 27.0113 35.063 26.8041 35.0812C26.5969 35.0994 26.4053 35.1975 26.2709 35.354C26.1373 35.5153 26.0728 35.7218 26.0913 35.9293C26.1098 36.1368 26.2097 36.329 26.3698 36.4649C27.377 37.2012 28.595 37.6037 29.8488 37.6148C32.4779 37.6148 34 36.4064 34 34.3016C34 32.1967 31.8849 31.5536 30.1651 31.1248ZM34 11.7134V19.4897C34 19.6964 33.9167 19.8947 33.7684 20.0409C33.6201 20.1871 33.419 20.2693 33.2093 20.2693C32.9996 20.2693 32.7985 20.1871 32.6502 20.0409C32.5019 19.8947 32.4186 19.6964 32.4186 19.4897V12.4735H22.1395C21.9298 12.4735 21.7287 12.3914 21.5804 12.2452C21.4321 12.099 21.3488 11.9007 21.3488 11.694V1.55951H3.16279C2.95308 1.55951 2.75197 1.64164 2.60368 1.78784C2.4554 1.93404 2.37209 2.13232 2.37209 2.33908V19.4897C2.37209 19.6964 2.28879 19.8947 2.1405 20.0409C1.99222 20.1871 1.7911 20.2693 1.5814 20.2693C1.37169 20.2693 1.17057 20.1871 1.02229 20.0409C0.874003 19.8947 0.790698 19.6964 0.790698 19.4897V2.33908C0.790698 1.71881 1.04061 1.12395 1.48547 0.685354C1.93032 0.246759 2.53367 0.000358567 3.16279 0.000358567H22.1395C22.2435 -0.00292034 22.347 0.0163217 22.4426 0.0567291C22.5382 0.0971366 22.6237 0.157727 22.693 0.234231L33.7628 11.1288C33.9081 11.283 33.9923 11.4836 34 11.694V11.7134ZM22.9302 10.9144H31.2919L22.9302 2.6704V10.9144Z" />
                                </svg>
                            </div> -->

                            <img src="./img/CSS.svg" alt="CSS3" class="skill-img" />
                            <p class="skill-p">
                                HTMLと共に学びました。知らないプロパティなどまだまだあるかと思いますが、割と使いこなせていると思います。<br>
                                ぜひ<span class="bold"><a href="#blog">blog</a></span>やworksの<span class="bold"><a href="./HTMLsaisyuukadai.html">WEBサイトトップページ</a></span>をご覧ください。
                            </p>
                        </div>

                        <div class="javascript skill-div fade-in">
                            <h3 class="h3 skill-h3">Java script</h3>
                            <!-- <div class="skill-img">
                                <svg viewBox="0 0 36 36" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M21.8571 16.7143C21.8571 15.6913 22.2635 14.7102 22.9869 13.9869C23.7102 13.2635 24.6913 12.8571 25.7143 12.8571H29.5714C29.9124 12.8571 30.2394 12.9926 30.4806 13.2337C30.7217 13.4748 30.8571 13.8019 30.8571 14.1429C30.8571 14.4838 30.7217 14.8109 30.4806 15.052C30.2394 15.2931 29.9124 15.4286 29.5714 15.4286H25.7143C25.3733 15.4286 25.0463 15.564 24.8051 15.8051C24.564 16.0463 24.4286 16.3733 24.4286 16.7143V19.2857C24.4286 19.6267 24.564 19.9537 24.8051 20.1949C25.0463 20.436 25.3733 20.5714 25.7143 20.5714H27C28.023 20.5714 29.0041 20.9778 29.7274 21.7012C30.4508 22.4245 30.8571 23.4056 30.8571 24.4286V27C30.8571 28.023 30.4508 29.0041 29.7274 29.7274C29.0041 30.4508 28.023 30.8571 27 30.8571H23.1429C22.8019 30.8571 22.4748 30.7217 22.2337 30.4806C21.9926 30.2394 21.8571 29.9124 21.8571 29.5714C21.8571 29.2304 21.9926 28.9034 22.2337 28.6623C22.4748 28.4212 22.8019 28.2857 23.1429 28.2857H27C27.341 28.2857 27.668 28.1503 27.9091 27.9091C28.1503 27.668 28.2857 27.341 28.2857 27V24.4286C28.2857 24.0876 28.1503 23.7606 27.9091 23.5194C27.668 23.2783 27.341 23.1429 27 23.1429H25.7143C24.6913 23.1429 23.7102 22.7365 22.9869 22.0131C22.2635 21.2898 21.8571 20.3087 21.8571 19.2857V16.7143ZM20.5714 14.1429C20.5714 13.8019 20.436 13.4748 20.1949 13.2337C19.9537 12.9926 19.6267 12.8571 19.2857 12.8571C18.9447 12.8571 18.6177 12.9926 18.3766 13.2337C18.1355 13.4748 18 13.8019 18 14.1429V27C18 27.341 17.8645 27.668 17.6234 27.9091C17.3823 28.1503 17.0553 28.2857 16.7143 28.2857H14.1429C13.8019 28.2857 13.4748 28.4212 13.2337 28.6623C12.9926 28.9034 12.8571 29.2304 12.8571 29.5714C12.8571 29.9124 12.9926 30.2394 13.2337 30.4806C13.4748 30.7217 13.8019 30.8571 14.1429 30.8571H16.7143C17.7373 30.8571 18.7183 30.4508 19.4417 29.7274C20.1651 29.0041 20.5714 28.023 20.5714 27V14.1429ZM0 7.71429V28.2857C0 30.3317 0.812753 32.2938 2.25946 33.7405C3.70617 35.1872 5.66833 36 7.71429 36H28.2857C30.3317 36 32.2938 35.1872 33.7405 33.7405C35.1872 32.2938 36 30.3317 36 28.2857V7.71429C36 5.66833 35.1872 3.70617 33.7405 2.25946C32.2938 0.812753 30.3317 0 28.2857 0H7.71429C5.66833 0 3.70617 0.812753 2.25946 2.25946C0.812753 3.70617 0 5.66833 0 7.71429ZM7.71429 2.57143H28.2857C29.6497 2.57143 30.9578 3.11326 31.9223 4.07774C32.8867 5.04221 33.4286 6.35032 33.4286 7.71429V28.2857C33.4286 29.6497 32.8867 30.9578 31.9223 31.9223C30.9578 32.8867 29.6497 33.4286 28.2857 33.4286H7.71429C6.35032 33.4286 5.04221 32.8867 4.07774 31.9223C3.11326 30.9578 2.57143 29.6497 2.57143 28.2857V7.71429C2.57143 6.35032 3.11326 5.04221 4.07774 4.07774C5.04221 3.11326 6.35032 2.57143 7.71429 2.57143Z" />
                                </svg>
                            </div> -->
                            <img src="./img/javascript.svg" alt="javascript" class="skill-img" />
                            <p class="skill-p">
                                java scriptをjQueryと共に学びました。授業で習った基礎的な部分は、理解できています。
                                ぜひ<span class="bold"><a href="./happyou2/particles.html">blog2</a></span>、<span class="bold"><a href="./blog3/index.html">blog3</a></span>や、worksの<span class="bold"><a href="./works/rensyuumondaiC/rensyuumondaiC.html">BMI計算アプリ</a></span>や<span class="bold"><a href="./works/rensyuumondaiD/rensyuumondaiD.html">図形の面積計算アプリ</a></span>をご覧ください。
                            </p>
                        </div>

                        <div class="php skill-div fade-in">
                            <h3 class="h3 skill-h3 php-h3">SQL</h3>
                            <img src="./img/SQL.svg" alt="SQL" class="skill-img sql-img" />
                            <p class="skill-p">
                                Microsoft SQL server・MySQL・SQLiteを使用し、SQL文を学びました。プリントを確認しながらですが、割と使いこなせると思います。<br>
                                <span class="bold">特に頑張りたかった部分でしたので、授業でやっていない自主学習の部分まで勉強しました。</span>
                            </p>
                        </div>

                        <div class="php skill-div fade-in">
                            <h3 class="h3 skill-h3 php-h3">
                                PHP <br />
                                プログラミング
                            </h3>
                            <!-- <div class="skill-img php-img">
                                <svg viewBox="0 0 48 25" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M24 1.23512C36.855 1.23512 46.74 6.54321 46.74 12.3733C46.74 18.2034 36.8475 23.5114 24 23.5114C11.145 23.5114 1.26 18.2034 1.26 12.3733C1.26 6.54321 11.1525 1.23512 24 1.23512ZM24 0C10.7475 0 0 5.536 0 12.3733C0 19.2106 10.7475 24.7466 24 24.7466C37.2525 24.7466 48 19.2106 48 12.3733C48 5.536 37.2525 0 24 0ZM16.365 11.3808C15.7725 14.3583 13.68 14.0495 11.1075 14.0495L12.135 8.85906C14.985 8.85906 16.92 8.55764 16.365 11.3808ZM7.305 19.3061H10.0575L10.71 16.0125C13.7925 16.0125 15.705 16.233 17.475 14.6083C19.4325 12.8438 19.9425 9.70453 18.5475 8.13122C17.82 7.30781 16.65 6.90345 15.06 6.90345H9.7575L7.305 19.3061ZM21.2325 3.60244H23.97L23.3175 6.8961C25.68 6.8961 27.87 6.72701 28.9275 7.68276C30.0375 8.68262 29.505 9.96185 28.305 15.9978H25.53C26.685 10.1604 26.9025 9.67513 26.4825 9.23401C26.0775 8.8076 25.155 8.89582 22.9275 8.89582L21.5175 15.9978H18.78L21.2325 3.60244ZM37.875 11.3808C37.275 14.4024 35.1225 14.0495 32.6175 14.0495L33.645 8.85906C36.51 8.85906 38.43 8.55764 37.875 11.3808ZM28.815 19.3061H31.575L32.2275 16.0125C35.4675 16.0125 37.26 16.1963 38.9925 14.6083C40.95 12.8438 41.46 9.70453 40.065 8.13122C39.3375 7.30781 38.1675 6.90345 36.5775 6.90345H31.275L28.815 19.3061Z" />
                                </svg>
                            </div> -->
                            <img src="./img/PHP.svg" alt="PHP" class="skill-img php-img" />
                            <p class="skill-p">
                                PHPを学びました。cookie・sectionや、CRUDはできるようになりました。授業の中でも特に面白さを感じた部分です。より深めていきたいと考えています。<br>
                                ぜひworksの<span class="bold"><a href="./works.html#works7">書籍登録アプリ</a></span>をご覧ください。
                            </p>
                        </div>

                        <div class="php skill-div fade-in">
                            <h3 class="h3 skill-h3 php-h3">
                                Laravel</h3>
                            <img src="./img/laravel.svg" alt="laravel" class="skill-img laravel-img" />
                            <p class="skill-p">
                                PHPフレームワークの「laravel」も習いました。MVCの概念も併せて学びました。<span class="bold">こちらのポートフォリオもlaravelを使用しています。</span>
                            </p>
                        </div>

                        <div class="php skill-div fade-in">
                            <h3 class="h3 skill-h3 php-h3">Figma</h3>
                            <img src="./img/figma.svg" alt="laravel" class="skill-img figma-img" />
                            <p class="skill-p">
                                このポートフォリオ作成にあたり、
                                <span class="bold"><a href="./works.html#sitemap">サイトマップ</a></span>
                                ・<span class="bold"><a href="./works.html#contentsmap">コンテンツマップ</a></span>
                                ・<span class="bold"><a href="./works.html#wireframe">ワイヤーフレーム</a></span>
                                ・<span class="bold"><a href="./works.html#designcomp">デザインカンプ</a></span>
                                を作成時に学び、使用しました。<br>
                                その他ミーティングでも使用し、だいぶ使い慣れてきたと思います。
                            </p>
                        </div>
                    </div>
                </section>

                <section class="section works cleafix">
                    <h2 class="h2">Works</h2>

                    <div class="flex works-flex">
                        <div class="works-div fade-in">
                            <a href="./HTMLsaisyuukadai.html" class="works-link">
                                <img src="./img/works4.png" alt="works4" class="works-img" />
                            </a>
                        </div>
                        <div class="works-div fade-in">
                            <a href="./facebookcover3.html" class="works-link">
                                <img src="./img/works3.jpg" alt="works3" class="works-img" />
                            </a>
                        </div>
                        <div class="works-div fade-in">
                            <a href="./facebookcover2.html" class="works-link">
                                <img src="./img/works2.jpg" alt="works2" class="works-img" />
                            </a>
                        </div>
                    </div>

                    <a href="./works.html" class="btn">more</a>
                </section>

                <section class="section blog" id="blog">
                    <h2 class="h2">Blog</h2>

                    <div class="flex blog-flex">
                        <div class="blog-div clearfix fade-in">
                            <img src="./img/blog3.png" alt="blog3" class="blog-img" />
                            <p class="blog-p">
                                JavaScriptの授業でやっていなかった生のJavaScriptでスライドショーを自己学習としてやりました。
                            </p>
                            <a href="./blog3/index.html" target="_blank" class="btn">more</a>
                        </div>

                        <div class="blog-div clearfix fade-in">
                            <img src="./img/blog2.png" alt="blog2" class="blog-img" />
                            <p class="blog-p">
                                <?php

                                $str = "自分が身につけたWebサイト制作の技術。Number1: Universe 前回、丸を回転させる方法を発表した際に、クラスメイトからアドバイスいただき、面白い回り方していたので、宇宙の惑星を実現したいと思い、実行に到りました。";

                                $ret = mb_strimwidth($str, 0, 150, "・・・");

                                echo $ret;
                                ?>
                            </p>
                            <a href="./happyou2/particles.html" target="_blank" class="btn">more</a>
                        </div>

                        <div class="blog-div clearfix fade-in">
                            <img src="./img/blog1.png" alt="blog1" class="blog-img" />
                            <p class='blog-p'>
                                <?php

                                $str = "第一回目の技術シェアを始めます。よろしくお願い致します。ポートフォリオサイトの作成中に発見したものや、授業中に学んだものの中から今回は3点を紹介したいと思います。";

                                $ret = mb_strimwidth($str, 0, 150, "・・・");

                                echo $ret;
                                ?>
                            </p>

                            <a href="./happyou/happyou-1.html" target="_blank" class="btn">more</a>
                        </div>
                    </div>
                </section>
            </div>
        </main>

        <footer class="footer">
            <img src="./img/modorubutton.svg" alt="topへ戻る" class="footer-img fixed" id="pageTop" />

            <div class="tap-waku">
                <div class="tap">
                    <p class="tap-p">TAP</p>
                </div>
            </div>

            <div class="flex footer-flex">
                <nav class="footer-nav">
                    <ul class="footer-nav-ul">
                        <li class="footer-nav-ul-li">
                            <a href="./about.html" class="footer-nav-link">about</a>
                        </li>
                        <li class="footer-nav-ul-li">
                            <a href="./works.html" class="footer-nav-link">works</a>
                        </li>
                        <li class="footer-nav-ul-li">
                            <a href="#blog" class="footer-nav-link">blog</a>
                        </li>
                        <li class="footer-nav-ul-li">
                            <a href="./contact.html" class="footer-nav-link">contact</a>
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
    <script src="./js/index.js"></script>
</body>

</html>
