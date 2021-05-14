<?php

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>新規会員登録</title>
    <h1>新規会員登録</h1>
</head>
<body>
    <form action="register.php" method="POST" class="form">
        <dl>
            <dt>メールアドレス</dt>
            <dd><input type="text" class="text" name="address"></dd>
            <dt>パスワード</dt>
            <dd><input type="text" class="text" name="password"></dd>
        </dl>
        <button type="submit" class="btn">登録</button>
    </form>
</body>
</html>

<style>
    h1 {
        margin-left: 50px;
    }
    form {
    background-color: #eaeaea;
    padding:30px 50px;
    }

    form dl dt {
    width: 165px;
    padding:10px 0;
    float:left;
    clear:both;
    }

    form dl dd {
    padding:10px 0;
    }
    
    .text {
        width: 250px;
        height: 25px;
    }
</style>