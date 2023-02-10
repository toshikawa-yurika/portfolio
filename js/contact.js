"use strict";

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
    // console.log(check_count);

    // 0個の時
    // if (check_count === 0) {
    //     $(".checklist").each(function () {
    //         $(this).find(".locked").removeClass("locked");
    //     });
    // なんで0個の時にこの設定いるんだろう？

    // 2個以上の時（チェック可能上限数）
    // } else

    if (check_count >= 2) {
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

// 必須項目が抜けていた場合、ボタン押せないようにする？


function history_back(name, email, tel, age_name, sex, koumoku, naiyou) {

    // 値がこれなら何番目にcheckedを付けると設定?
    // age_name, sex, koumoku,

    console.log(age_name);
    console.log(sex);
    console.log(koumoku);

    window.location.href = "contact.php?name=" + name
        + "&email=" + email
        + "&tel=" + tel
        + "&age=" + age_name
        + "&sex=" + sex
        + "&koumoku=" + koumoku
        + "&naiyou=" + naiyou;
}
