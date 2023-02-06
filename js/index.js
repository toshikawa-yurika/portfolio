"use strict";


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
