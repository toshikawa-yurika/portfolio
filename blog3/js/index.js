"use strict";

// 画像を格納
var imgList = [
	"images/img01.jpg",
	"images/img02.jpg",
	"images/img03.jpg",
	"images/img04.jpg"
];


// 画像と下の〇要素を追加
for (let i = 0; i < imgList.length; i++) {
    // imgListの枚数分生成
    var slide = document.createElement("li");
    // liを生成
    slide.innerHTML = "<img src='" + imgList[i] + "'>";
    // そこに<img src ='images/img01.jpg'>などを入れ込む
    document.getElementsByClassName("slider-inner")[0].appendChild(slide);
    // slider-innerクラスの下に要素を追加
    // getElementsByClassNameは配列なので、[0]で何番目のslider-innerなのか指定

    var nav = document.createElement("li");
    // liを生成
    nav.setAttribute("date-nav-index", i);
    // setAttributeは、新しい属性を追加 or すでにある属性の値を変更
    // date-から始まる属性は、自分で独自に作れる属性
    // iで数字を割り振っていく
    document.getElementsByClassName("nav")[0].appendChild(nav);
    // 一番目のnavクラスに属性の付いたliを追加
}



// いろいろ定義していく

var length = imgList.length - 1;
// スライドの数を取得(配列なので、個数から-1する)

var imageSlide = document.getElementsByClassName("slider-inner")[0].getElementsByTagName("li");
// 「imageSlide」に画像の要素を格納（配列）
// なんでこれが1枚になるん？

var dotNavigation = document.getElementsByClassName("nav")[0].getElementsByTagName("li");
// 「dotNavigation」にドットナビの要素を格納（配列）

var nowIndex = 0;
// 「現在○○枚目のスライドを表示している」というインデックス番号を格納する変数

imageSlide[nowIndex].classList.add("show");
dotNavigation[nowIndex].classList.add("current");
// 現在表示されている画像とドットナビにクラス名を付ける



// スライドがアニメーション中か判断するフラグ
var isChanging = false;
// どういうこと？

// スライドのsetTimeoutを管理するタイマー
var slideTimer;


// スライド切り替え時に呼び出す関数
function sliderSlide(val) {
	if (isChanging === true) {
		return false;
	}
    isChanging = true;
    // ここで最初に切り替え中に設定する
    // trueの間は、切り替えできないようにする

	imageSlide[nowIndex].classList.remove("show");
    dotNavigation[nowIndex].classList.remove("current");
    // 今あるものからクラスをはずす

    nowIndex = val;
    // nowIndexを引数valにする

	imageSlide[nowIndex].classList.add("show");
    dotNavigation[nowIndex].classList.add("current");
    // 新たなものにクラスを付ける

	slideTimer = setTimeout(function () {
		isChanging = false;
    }, 600);
    // アニメーション中の600ミリ秒経ったら、isChanging = falseにして、新たに切り替えできるようにする。
}



// 左矢印のナビをクリックした時のイベント
document.getElementById("arrow-prev").addEventListener("click", function () {
    var index = nowIndex - 1;
    // 一個前に戻る

    if (index < 0) {
        // 最初より前の数字になったら、
        index = length;
        // 最後の画像に戻る
    }

    sliderSlide(index);
    // 関数の呼び出し、indexは引数valになる。

}, false);
//falseは、第3引数 useCapture 詳しくはネットで


// 右矢印のナビをクリックした時のイベント
document.getElementById("arrow-next").addEventListener("click", function () {
    var index = nowIndex + 1;
    // 1個進む

    if (index > length) {
        // 最後の枚数より数字が多くなったら、
        index = 0;
        // 最初の画像に行く
    }

    sliderSlide(index);
    // 関数の呼び出し
}, false);


// ドットナビをクリックした時のイベントを作成
for (var i = 0; i < dotNavigation.length; i++) {
    // 〇の数だけアドイベントリスナー付ける

	dotNavigation[i].addEventListener("click", function () {
		var index = Number(this.getAttribute("data-nav-index"));
		// getAttributeで、dotNavigation[i]の属性の値を取得
        // Numberは数値化
        // indexに数字を格納

        sliderSlide(index);
        // 関数の呼び出し

	}, false);
}
