<?php
// エラーリストや入力値が未定義でもエラーにならないよう初期化
$errorList = $errorList ?? ['エラー１', 'エラー２'];
$name     = $name ?? "";
$address  = $address ?? "";
$tel      = $tel ?? "";
$email    = $email ?? "";
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>会員登録</title>
<link rel="stylesheet" type="text/css" href="/css/style.css">
</head>
<body>
    <header>
        <h1>SayYou</h1>
    </header>

    <main>
        <h3>お客様情報</h3>

        <form action="/register" method="post">

            <!-- エラー表示 -->
            <?php if (!empty($errorList)): ?>
                <ul class="error">
                    <?php foreach ($errorList as $error): ?>
                        <li>{{ $error }}</li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>

            <table border="1">
                <tr>
                    <th>お名前</th>
                    <td>
                        <input type="text" name="name" value="<?= htmlspecialchars($name) ?>">
                    </td>
                </tr>
                <tr>
                    <th>住所</th>
                    <td>
                        <input type="text" name="address" value="<?= htmlspecialchars($address) ?>">
                    </td>
                </tr>
                <tr>
                    <th>電話番号</th>
                    <td>
                        <input type="text" name="tel" value="<?= htmlspecialchars($tel) ?>">
                    </td>
                </tr>
                <tr>
                    <th>e-mail</th>
                    <td>
                        <input type="text" name="email" value="<?= htmlspecialchars($email) ?>">
                    </td>
                </tr>
                <tr>
                    <th>パスワード</th>
                    <td>
                        <input type="password" name="password">
                    </td>
                </tr>
            </table>

            <button>登録</button>
        </form>
    </main>

    <hr>

    <!-- footer.php を読み込む -->
    <?php @include('footer'); ?>
</body>
</html>