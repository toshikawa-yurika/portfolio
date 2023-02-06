"use strict";

// 削除の確認
function book_delete(title, isbn) {
        let res = confirm("「" + title + "」を削除します。よろしいでしょうか?");
    // if (res === true) {
    //     // OKならphpのdeleteファイルに移動
    //     window.location.href = "basic19delete.php?isbn=" + isbn;
    // }

    // relustでやったリンクでのやり方だったら、下記のやり方でもいける（関数のところにreturnを書けばOK）
    // ただ、それだとupdateでの削除が効かなくなってしまうので、このままでいく

    if (res == true) {
        return true;
    } else {
        return false;
    }
}


// 新規登録・編集
function save(isbn, title, price, published, publish) {

    let msg = "下記の内容で書籍を登録します。よろしいでしょうか?\n";
    msg += "\nisbn番号:" + isbn;
    msg += "\n書籍名:" + title;
    msg += "\n価格:" + price;
    msg += "\n初版日:" + published;
    msg += "\n出版社:" + publish;

    let res = confirm(msg);

    if (res == true) {
        return true;
    } else {
        return false;
    }
}
