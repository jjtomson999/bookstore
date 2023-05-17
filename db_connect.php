<?php

require_once'data.php';
const DB_HOST ='mysql:dbname=myapp;host=127.0.0.1;charset=utf8';
const DB_USER = 'php_user';
const DB_PASSWORD = 'password123';


$pdo = new PDO(DB_HOST,DB_USER,DB_PASSWORD);

try{
  $pdo = new PDO(DB_HOST,DB_USER,DB_PASSWORD);
  [
    PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC,
    PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_EMULATE_PREPARES=>false,
  ];
  echo '接続成功';
  $sql="insert into store(title,price,junle,message,img) values('$title',$price,'$junle','$message','$new')";
  $stmt=$pdo->prepare($sql);
  $stmt->execute();
}catch(PDOException $e){
  echo '障害発生です'. $e->getMessage() ."\n";
  exit();
}
?>
<?php if($junle ==1):?>
<?php echo '<a href="manga.php">';?>

<?php elseif($junle ==0): ?>  
<?php echo '<a href="novel.php">';?>

<?php else:?>
<?php
echo'<a href="book.php">home</a>';
?>
<?php endif;?>