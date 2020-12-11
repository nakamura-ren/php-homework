<?php
ini_set('display_errors', 1); //画面にエラーを表示
error_reporting(E_ALL); //全ての種類のエラーを表示
session_start();;


if (isset($_POST['comment'])) {
    $_SESSION['comment'] = $_POST['comment'];
    header('Location: confirm.php');
}

try {
    $pdo = new PDO('mysql:host=localhost;dbname=php_homework;charset=utf8', 'root', 'rYKA7HBrb6@');

    print('接続しました。');
} catch (PDOException $e) {
    print('ERROR:' . $e->getMessage());
    exit;
}

?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>フォーム</h2>
    <form action="" method="post">
        <input type="text" name="comment"> <br />
        <input type="submit" value="確認画面へ" />
    </form>
</body>

</html>
