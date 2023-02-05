"use strict";

// 背景用
window.onload = function () {
    Particles.init({
        selector: ".background",
        sizeVariations: 60,
        // オプション・サイズのバリエーション量
        color: ["#0bd", "rgba(0,187,221,.5)", "rgba(0,187,221,.2)"],
        // オプション・パーティクルと接続線の色（複数可
        maxParticles: 200,
        // オプション・パーティクルの量
        speed: 0.3,
        // オプション・パーティクルの移動速度

        // responsive:でレスポンシブ対応も可能

    });
};


// ------------------------

// 星空

window.addEventListener("DOMContentLoaded", () => {
  // 星を表示するための親要素を取得
  const stars = document.querySelector(".stars");

  // 星を生成する関数
  const createStar = () => {
    const starEl = document.createElement("span");
    starEl.className = "star";
    const minSize = 2; // 星の最小サイズを指定
    const maxSize = 3; // 星の最大サイズを指定
    const size = Math.random() * (maxSize - minSize) + minSize;
    starEl.style.width = `${size}px`;
    starEl.style.height = `${size}px`;
    starEl.style.left = `${Math.random() * 100}%`;
    starEl.style.top = `${Math.random() * 100}%`;
    starEl.style.animationDelay = `${Math.random() * 10}s`;
    stars.appendChild(starEl);
  };

  // for文で星を生成する関数を指定した回数呼び出す
  for (let i = 0; i <= 500; i++) {
    createStar();
  }
});


// ------------------------

// モーダルウィンドウ

const buttonOpen = document.getElementById("modalOpen");
// click meボタンを取得
const modal = document.getElementById("easyModal");
// 背景を含めたモーダル全体を取得
const buttonClose = document.getElementsByClassName("modalClose")[0];
// モーダル内の×ボタンを取得

// click meボタンをクリックされた時
buttonOpen.addEventListener("click", modalOpen);
function modalOpen() {
    modal.style.display = "block";
    // もともとCSSでdisplay:noneだった、モーダル全体をdisplay:blockに変更
}

// モーダル内の×ボタンがクリックされた時
buttonClose.addEventListener("click", modalClose);
function modalClose() {
    modal.style.display = "none";
    //モーダル全体を消す
}

// ×ボタンだけじゃなくて、モーダルの背景がクリックされた時も消す仕組み
modal.addEventListener("click", outsideClose);

function outsideClose(e) {
    if (e.target == modal) {
        // e.targetでどの要素が取れているか確認
        console.log(e.target);

        // クリックしたのがモーダル背景だった時に
        modal.style.display = "none";
        //モーダル全体を消す
    }
    // e.targetは、イベントが発生した要素のことを指す
    // つまり、クリックした要素のこと
    // e.targetは、event.targetの略っぽい
}

// ------------------------

// チェックボックス

// チェックボックス2個以上で選択不可にする

function click_cb() {
    // チェックカウント用変数 0でリセット
    var check_count = 0;

    $(".checklist").each(function () {
        var parent_checkbox = $(this).children("input[type='checkbox']");
        if (parent_checkbox.prop("checked")) {
            check_count++;
            // check_count = check_count + 1;
        }
    });
    // ちゃんとカウントできているか確認
    console.log(check_count);

    // なんで0個の時にこの設定いるんだろう？
    if (check_count === 0) {
        // 0個の時
        $(".checklist").each(function () {
            $(this).find(".locked").removeClass("locked");
        });
    } else if (check_count >= 2) {
        // 2個以上の時（チェック可能上限数）
        $(".checklist").each(function () {
            // チェックされていないチェックボックスをロックする
            if (!$(this).children("input[type='checkbox']").prop("checked")) {
                $(this)
                    .children("input[type='checkbox']")
                    .prop("disabled", true);
                $(this).addClass("locked");
            }
        });
    } else {
        $(".checklist").each(function () {
            // チェックされていないチェックボックスを選択可能にする
            if (!$(this).children("input[type='checkbox']").prop("checked")) {
                $(this)
                    .children("input[type='checkbox']")
                    .prop("disabled", false);
                $(this).removeClass("locked");
            }
        });
    }
    return false;
    // 親要素のクリックイベントを発動させないようにする
}

// ------------------------
