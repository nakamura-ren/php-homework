<?php
ini_set('display_errors', 1); //画面にエラーを表示
error_reporting(E_ALL); //全ての種類のエラーを表示
session_start();


?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>以下の内容で保存します</h2>
    <form action="/regist.php" method="post">
        <?php print(htmlspecialchars($_SESSION['comment'])); ?>
        <input type="submit" value="送信" />
    </form>
</body>

</html>
