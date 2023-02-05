"use strict";

// // ①HTMLの中に関数を埋め込む
// // HTMLのボタンにonclick属性で関数書いている
function soushin() {
    // BMI値
    const height = document.getElementById("height").value;
    const weight = document.getElementById("weight").value;
    console.log(height);
    console.log(weight);
    const BMI = Math.floor(weight / ((height / 100) * (height / 100)));
    console.log(BMI);
    const element = document.createElement("p");
    var text = document.createTextNode("あなたのBMI値は、" + BMI + "です。");
    document.body.appendChild(element).appendChild(text);

    //判定
    if (BMI < 18.5) {
        const element2 = document.createElement("p");
        var text = document.createTextNode("低体重(痩せ型)です。");
        document.body.appendChild(element2).appendChild(text);
    } else if (BMI < 25) {
        const element2 = document.createElement("p");
        var text = document.createTextNode("普通体重です。");
        document.body.appendChild(element2).appendChild(text);
    } else if (BMI < 30) {
        const element2 = document.createElement("p");
        var text = document.createTextNode("肥満(1度)です。");
        document.body.appendChild(element2).appendChild(text);
    } else if (BMI < 35) {
        const element2 = document.createElement("p");
        var text = document.createTextNode("肥満(2度)です。");
        document.body.appendChild(element2).appendChild(text);
    } else if (BMI < 40) {
        const element2 = document.createElement("p");
        var text = document.createTextNode("肥満(3度)です。");
        document.body.appendChild(element2).appendChild(text);
    } else {
        const element2 = document.createElement("p");
        var text = document.createTextNode("肥満(4度)です。");
        document.body.appendChild(element2).appendChild(text);
    }

    // 適正体重 ＝ (身長m)2 ×22
    const tekisei = Math.floor((height / 100) * (height / 100) * 22);
    const element3 = document.createElement("p");
    var text = document.createTextNode("適性体重は、" + tekisei + "です。");
    document.body.appendChild(element3).appendChild(text);
}

//
//
// 解答

// ①まずそれぞれの関数を用意する

// BMI計算
function calcBmi(h, w) {
    return w / (h * h);
}

// ランキングを評価
function bmiRank(b) {
    let rank = "";
    // ランクを定義づけ let rank;と一緒
    if (b < 18.5) {
        rank = "低体重です";
    } else if (b < 25) {
        rank = "普通体重です";
    } else {
        rank = "健康に気を付けましょう";
    }
    return rank;
}

// 身長から適性体重

function calkStd(h) {
    let sw = h * h * 22;
    return sw;
}

// ②メイン関数を発動させる

// メイン関数
function calkFunk() {
    // 【インプット】
    // cmからmに単位を変換
    let height = document.getElementById("height").value / 100;
    let weight = document.getElementById("weight").value;

    // 【加工】
    // BMI
    let bmi = calcBmi(height, weight);

    // ランク
    let bmiRank = bmiRank(bmi);

    // 標準体重
    let std = calkStd(height);

    console.log(bmi);
    console.log(bmiRank);
    console.log(std);

    // 【アウトプット】
    document.getElementById("bmi").innerText = `あなたのBMI値は${bmi.toFixed(
        1
    )}`;
    // toFixed(1)小数点第一位まで出力する

    document.getElementById("rank").innerText = `あなたは${bmiRank}`;
    // HTMLのidのランクを引っ張ってきている

    document.getElementById(
        "std"
    ).innerText = `あなたの身長から導き出される標準体重は${std}です`;
}
