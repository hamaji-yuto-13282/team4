<?php
// メッセージを表示したい場合はここでセット
// $message = "ログイン失敗しました"; など
$message = $message ?? "";
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>ログイン</title>
    <link rel="stylesheet" href="/css/style.css">
</head>

<body>
    <header>
        <h1>やばいYシャツ屋さん</h1>
    </header>

    <main>
        <form action="/login.php" method="post">
            <table>
                <tr>
                    <th>メールアドレス</th>
                    <td><input type="text" name="email" placeholder="メールアドレス"></td>
                </tr>
                <tr>
                    <th>パスワード</th>
                    <td><input type="password" name="password" placeholder="パスワード"></td>
                </tr>
            </table>

            <br>
            <button>ログイン</button>

            <br>
            <span style="color: red;">
                <?= htmlspecialchars($message) ?>
            </span>
        </form>

        <a href="/register">新規会員登録の方はこちら</a>
    </main>
</body>