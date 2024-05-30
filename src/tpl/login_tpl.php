<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>ログイン</title>
</head>
<body>
  <h1>ログイン</h1>
  <form action="../php/login.php" method="post">
    <label for="username">ユーザー名:</label>
    <input type="text" id="user_id" name="user_id" required><br>
    <label for="password">パスワード:</label>
    <input type="password" id="user_password" name="user_password" required><br>
    <input type="submit" value="ログイン">
  </form>
  <a href="../php/user_regiset.php">
    <input type="submit" value="新規登録">
  </a>
</body>
</html>
