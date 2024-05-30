<?php

// DBの参考
require "../db/db_config.php";

//セッションの利用
session_start();

// ログインされているのかチェック
$is_login = isset($_SESSION["is_login"]) ? $_SESSION["is_login"] : [];

// ログインされていたら移動
if($is_login != 0)
{
    header('Location: ./start.php', 301);
    exit();
}

// ユーザーからログインデータの確認
$id = isset($_POST["user_id"]) ? $_POST["user_id"] : [];
$password = isset($_POST["user_password"]) ? $_POST["user_password"] : [];

$sql = "SELECT * FROM users";
$result = $conn->query($sql);

// ユーザーのログインがあっているのか確認
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        if(($row["user_id"]==$id) && ($row["password"])){
            $_SESSION['is_login'] = $id;
            header('Location: ./start.php', 301);
            exit;
        }
        else{
            $msg = "ログインに間違いがあります。";
        }
        // あったら,ログインっ状況をセッションに保存し、スタートの画面に一道
    }

  } else {
    echo "0 results";
  }
  

// ログインページの表示
require_once "../tpl/login_tpl.php";