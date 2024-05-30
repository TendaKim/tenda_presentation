<?php

// DBの参考
require "../db/db_config.php";

// ユーザーからログインデータの確認
$id = isset($_POST["user_id"]) ? $_POST["user_id"] : [];
$password = isset($_POST["password"]) ? $_POST["password"] : [];
$password_re = isset($_POST["confirm_password"]) ? $_POST["confirm_password"] : [];

// メッセージの初期化
$msg = null;

// 로그인 데이터 가져오기
$sql = "SELECT * FROM users";
$result = $conn->query($sql);

if(($id != null) && ($password != null) && ($password_re != null)){
    // ユーザーのログインがあっているのか確認
if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        if (($row["user_id"] == $id)) {
            // IDが重複されている場合
            $msg = "IDが重複されました！";
            break;
        }else if($password != $password_re) {
            // パスワードが一致しない時
            $msg = "パスワードが一致しません！";
        }
        else {
            // 登録完了
            $msg = "登録されました！";
        }
    }
}
}else{
    // 入力されていない時
    $msg = "入力されている部分があります。";
}

//  新規登録の画面
require_once "../tpl/user_register_tpl.php";