<?php
// mysqlにアクセス
$servername = "10.50.0.19";
$username_ = "hk";
$password_ = "16HKte@#_";
$dbname = "hk_presentation";

// アクセスして変数に保存
$conn = new mysqli($servername, $username_, $password_, $dbname);

// アクセスの状態の確認
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}