<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>ログイン</title>
</head>
<body>
  <h1>ログイン</h1>
  <div id="login">
  <form action="../php/login.php" method="post">
    <input type="hidden" id="login_text" value="<?php echo $msg ?>">
    <label for="username">ユーザーID:</label>
    <input type="text" id="user_id" name="user_id" required><br>
    <label for="password">パスワード:</label>
    <input type="password" id="user_password" name="user_password" required><br>
    <input type="submit" value="ログイン">
  </form>
  <a href="../php/user_register.php">
    <input type="submit" value="新規登録">
  </a>
  </div>
</body>
<script>
  var msg_tag = document.getElementById("login_text");
  if(msg_tag.value != null){
    msg_tag.setAttribute('type', 'Text');
  }else{
    msg_tag.setAttribute('type', 'hidden');
  }
</script>
</html>
