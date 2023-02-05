"use strict";

// 長方形

function tyouhoukei() {
    const haba = document.getElementById("haba").value;
    const takasa = document.getElementById("takasa").value;

    const menseki = haba * takasa;

    const kaitou = document.getElementById("kaitou1");
    kaitou.innerText = menseki;
}

const btn1 = document.getElementById("submit1");
// ボタンを取り出して、変数に代入

btn1.addEventListener("click", tyouhoukei);

//
// 正方形
function seihoukei() {
    const haba = document.getElementById("haba2").value;

    const menseki = haba * haba;

    const kaitou = document.getElementById("kaitou2");
    kaitou.innerText = menseki;
}

const btn2 = document.getElementById("submit2");
// ボタンを取り出して、変数に代入

btn2.addEventListener("click", seihoukei);

//
// 円形
function enkei() {
    const hankei = document.getElementById("hankei").value;

    const menseki = hankei * hankei * 3.14;

    const kaitou = document.getElementById("kaitou3");
    kaitou.innerText = menseki;
}

const btn3 = document.getElementById("submit3");
// ボタンを取り出して、変数に代入

btn3.addEventListener("click", enkei);

//
// 三角形
function sankakukei() {
    const teihen = document.getElementById("teihen").value;
    const takasa = document.getElementById("takasa2").value;

    const menseki = (teihen * takasa) / 2;

    const kaitou = document.getElementById("kaitou4");
    kaitou.innerText = menseki;
}

const btn4 = document.getElementById("submit4");
// ボタンを取り出して、変数に代入

btn4.addEventListener("click", sankakukei);

//
// 台形
function daikei() {
    const joutei = Number(document.getElementById("joutei").value);
    const katei = Number(document.getElementById("katei").value);
    const takasa = document.getElementById("takasa3").value;

    const menseki = ((joutei + katei) * takasa) / 2;

    const kaitou = document.getElementById("kaitou5");
    kaitou.innerText = menseki;
}

const btn5 = document.getElementById("submit5");
// ボタンを取り出して、変数に代入

btn5.addEventListener("click", daikei);

//
// ひし形
function hishigata() {
    const taikakusen1 = document.getElementById("taikakusen1").value;
    const taikakusen2 = document.getElementById("taikakusen2").value;

    const menseki = (taikakusen1 * taikakusen2) / 2;

    const kaitou = document.getElementById("kaitou6");
    kaitou.innerText = menseki;
}

const btn6 = document.getElementById("submit6");
// ボタンを取り出して、変数に代入

btn6.addEventListener("click", hishigata);
