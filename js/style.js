"use strict";

// ------------------------

// スクロールした時、topへボタン右下に出現
// window.onload = function () {
//     let Animation = function () {
//         let pageTop = document.getElementById("pageTop");

//         let rect = pageTop.getBoundingClientRect();

//         console.log(rect);

//         let scrollTop = rect.top + window.pageYOffset;

//         if (scrollTop > 100) {
//             pageTop.classList.add("fixed");
//         } else {
//             pageTop.classList.remove("fixed");
//         }
//     };
//     window.addEventListener("scroll", Animation);
// };

// jクエリバージョン
// スクロールした時、topへボタン右下に出現

var windowWidth = $(window).width();
var breakPoint = 760;

if (windowWidth >= breakPoint) {
    $(function () {
        const pagetop = $("#pageTop");
        const doch = $(document).innerHeight(); //ページ全体の高さ
        const winh = $(window).innerHeight(); //ウィンドウの高さ
        const bottom = doch - winh; //ページ全体の高さ - ウィンドウの高さ = ページの最下部位置

        $(window).scroll(function () {
            if ($(this).scrollTop() > 80) {
                pagetop.fadeIn();
                if (bottom * 0.95 <= $(window).scrollTop()) {
                    $("#pageTop").removeClass("fixed");
                    $("#pageTop").addClass("bottom");
                } else {
                    $("#pageTop").removeClass("bottom");
                    $("#pageTop").addClass("fixed");
                }
            } else {
                pagetop.fadeOut();
            }
        });

        // ボタンを押すとページ最上部に戻る
        pagetop.click(function () {
            $("body,html").animate(
                {
                    scrollTop: 0,
                },
                500
            );
            return false;
        });
    });
}

// ------------------------

// スクロールイベント

//   ロードしたときに関数を呼び出す
window.addEventListener("load", showBoxes);
// addEventListenerは、関数名だけで呼び出せる

// scrollしたときに関数を呼び出す
window.addEventListener("scroll", showBoxes);

// 下記showBowesの関数を定義

// boxをすべて取得
const boxes = document.querySelectorAll(".fade-in");

function showBoxes() {
  // 発火位置
  const triggerBottom = (window.innerHeight / 5) * 4.5;

    boxes.forEach((box) => {
    // boxの頭部分の座標を取得
    const boxTop = box.getBoundingClientRect().top;

    // boxの頭部分が発火位置を超えたら
    if (boxTop < triggerBottom) {
    box.classList.add("scroll-in");
    } else {
    box.classList.remove("scroll-in");
    }
});
}


// ------------------------

// ハンバーガーメニュー

const hum = document.getElementById("hamburger");

const nav = document.getElementById("nav");

hum.onclick = function () {
    this.classList.toggle("hamburger");
    nav.classList.toggle("show");
};

// ナビゲーションブログ押したら、ナビゲーション閉じる
const navLink = document.getElementById("navLink");


navLink.onclick = function () {
    hum.classList.remove("hamburger");
    nav.classList.remove("show");
};

// ------------------------

// キービジュアルの丸動かす

// スマホ版
document
    .querySelector(".sumaho-maru")
    .animate(
        [
            { transform: "translateY(25px)" },
            { transform: "translateX(5px)" },
            { transform: "translateY(-15px)" },
            { transform: "translateX(-10px)" },
        ],
        {
            iterations: Infinity,
            // 無限ループ
            // JavaScriptの予約語なので、クォーテーションで囲まず、一文字目は大文字にします。
            direction: "alternate",
            // 反転
            duration: 7000,
        }
    );

// PC版
document.querySelector(".pc-maru").animate(
    {
        borderRadius: [
            "36% 64% 37% 63% / 51% 44% 56% 49%",
            "70% 30% 63% 37% / 47% 50% 50% 53% ",
            "43% 57% 43% 57% / 38% 74% 26% 62% ",
            "69% 31% 26% 74% / 47% 48% 52% 53% ",
        ],
    },

    {
        iterations: Infinity,
        // 無限ループ
        // JavaScriptの予約語なので、クォーテーションで囲まず、一文字目は大文字にします。
        direction: "alternate",
        // 反転
        duration: 7000,
        // 7秒
    }
);

// ------------------------

// フッターナビゲーション開閉

// トグルで変更する場合
// スライドトグルにはならない
// CSSアニメーションでできることしかできない（トランジションなど）

// $(function () {
//     $(".tap").on("click", function () {
//         $(".footer-nav").toggleClass("visible");
//     });
// });

// java scriptだとPC版にした時にもナビゲーション消えてしまうので一旦不採用にしたが、
// if文で変えられることが判明

// マッチメディアのやり方
// function switchByWidth() {
//     if (window.matchMedia("(max-width: 759px)").matches) {

//     }
// }
// window.onload = switchByWidth;
// window.onresize = switchByWidth;

// windowwidthのやり方

// readyの短縮版
// bodyの最後に入れておけば、$(function () {});いらなくなる
// $(function () {});囲う場合は、jクエリ使っているところ全体を囲う

// function switchByWidth() {
var windowWidth = $(window).width();
var breakPoint = 760;

console.log(windowWidth);

if (windowWidth <= breakPoint) {
    $(".footer-nav").hide();
    // CSSでいうと、display:noneの役割

    $(".tap").on("click", function () {
        $(".footer-nav").slideToggle();
        // スライドでメニューを開閉する
        // CSSでいうと、display:block（でもスライドというアニメーションで出てくる）
    });
}
// }

// $(window).resize(switchByWidth());

// window.onload = switchByWidth;
// window.onresize = switchByWidth;
// jクエリだと、リロードしないと変わらない・・・
// java scriptだとできるらしい

// ------------------------

// フッターナビゲーションtapの色変わる＆文字変える

// これだと押したら一生グレーになってしまう
// $(function () {
//     $(".tap").on("click", function () {
//         $(".tap").css("background-color", "#666");
//     });
// });

$(".tap").on("click", function () {
    $(this).toggleClass("color-change");
    $(".tap-p").toggleClass("tap-p-henkou");

    if ($(".tap-p").text() === "TAP") {
        $(".tap-p").text("T");
    } else {
        $(".tap-p").text("TAP");
    }
});
