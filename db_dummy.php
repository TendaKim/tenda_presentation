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
function dataTenda($name, $img)
{
    $sql = "INSERT INTO students (user_id, name, img, seat)
        VALUES ('$name', '$img')";
    return $sql;
}

$conn->query(dataTenda('차완','chawan.jpg'));
$conn->query(dataTenda('후지와라','fujiwara.jpg'));
$conn->query(dataTenda('후카사와','fukasawa.jpg'));
$conn->query(dataTenda('고','go.jpg'));
$conn->query(dataTenda('혼다','honda.jpg'));
$conn->query(dataTenda('이토','ito.jpg'));
$conn->query(dataTenda('카가야','kagaya.jpg'));
$conn->query(dataTenda('카나이','kanai.jpg'));
$conn->query(dataTenda('형규','kim.jpg'));
$conn->query(dataTenda('기무라','kimura.jpg'));
$conn->query(dataTenda('코니시','konishi.jpg'));
$conn->query(dataTenda('미나미','minami.jpg'));
$conn->query(dataTenda('오기노사와','oginosawa.jpg'));
$conn->query(dataTenda('오니츠카','onitsuka.jpg'));
$conn->query(dataTenda('오우라','oura.jpg'));
$conn->query(dataTenda('사카모토','sakamoto.jpg'));
$conn->query(dataTenda('사토','sato.jpg'));
$conn->query(dataTenda('스다','suda.jpg'));
$conn->query(dataTenda('스가노','sugano.jpg'));
$conn->query(dataTenda('스나카와','sunakawa.jpg'));

$conn->close();