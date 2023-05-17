<?php
require './partial/header.php';
require './db_connect.php';
$id =$_GET['code'];
$title=$book[$id][0];
echo '本のコードは'.$id;
echo $title;
// $sql = "insert into store(title,price,message)values('$title',$price,'$message') where id='$id";
// $stmt = $pdo->query($sql);

// $result = $stmt->fetchAll();

// var_dump($result);
