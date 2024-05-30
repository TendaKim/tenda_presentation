<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>新規登録</title>
</head>

<body>
    <h1>新規登録</h1>
    <div id="register">
        <form action="register.php" method="post">
            <input type="hidden" name="msg" value="<?php echo $msg; ?>">
            <label for="user_id">ID: </label>
            <input type="text" id="user_id" name="user_id" required><br>
            <label for="password">パスワード: </label>
            <input type="password" id="password" name="password" required><br>
            <label for="confirm_password">パスワードの再チェック: </label>
            <input type="password" id="confirm_password" name="confirm_password" required><br>
            <input type="submit" value="登録">
        </form>
        <a href="../php/login.php">
            <input type="submit" value="ログイン画面へ">
        </a>
    </div>
    <script>
        var msg_tag = document.getElementById("login_text");
        if (msg_tag.value != null) {
            msg_tag.setAttribute('type', 'Text');
        } else {
            msg_tag.setAttribute('type', 'hidden');
        }
    </script>
</body>

</html>
