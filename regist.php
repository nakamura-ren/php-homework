<?php
ini_set('display_errors', 1); //画面にエラーを表示
error_reporting(E_ALL); //全ての種類のエラーを表示
session_start();

$pdo = new PDO('mysql:host=localhost;dbname=php_homework;charset=utf8', 'root', 'rYKA7HBrb6@');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$comment = $_SESSION['comment'];
// var_dump($comment);
$stmt = $pdo->prepare("INSERT INTO comments(comment) VALUES(:comment)");
$stmt->bindValue(':comment', $comment, PDO::PARAM_STR);
$stmt->execute();
$pdo = NULL;
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>保存しました</h2>
</body>

</html>
