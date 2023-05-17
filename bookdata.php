<?php
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
  $sql="select *from store";
  $stmt=$pdo->prepare($sql);
  $stmt->execute();
}catch(PDOException $e){
  echo '障害発生です'. $e->getMessage() ."\n";
  exit();
}


?>
<table border="1">
   <tr>
    
      <th>タイトル</th>
      <th>価格(税込み 円)</th>
      <th>ジャンル</th>
      <th>メッセージ</th>
      
   </tr>
   <?php while($row = $stmt->fetch()):?>
   <tr>
   <td><?php echo ($row['title']) ?></td>
   <td><?php echo ($row['price']) ?></td>
   <td><?php echo ($row['junle']) ?></td>
   <td>
      <?php if(['junle'] ===0): ?>

      <a href="novel.php">novel</a>
      <?php else: ?>
      <a href="commic.php">commic</a>
      <?php endif; ?>
      </td>
      <td><?php echo $row['message']; ?></td>
   </tr>
   <?php endwhile; ?>
</table>
