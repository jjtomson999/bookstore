
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Book Store</title>
</head>
<body>
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
  $sql="select *from store where junle=1";
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
      <th>価格(円)</th>
      <th>ジャンル</th>
      <th>感想</th>
      
   </tr>
   <?php while($row = $stmt->fetch()):?>
   <tr>
 
   <td><?php echo ($row['title']); ?></td>
   <td><?php echo ($row['price']); ?></td>
   <td><?php if($junle==1){?>
    <?php echo '小説';
}?></td>
   <td><?php if($junle==0){?>
    <?php echo '漫画';
}?></td>
   <td><?php echo ($row['message']); ?></td>
   <td>
      <?php if($row['junle'] ===1): ?>
      <?php echo '<a href="list.php?title='.$row['title'].'&price='.$row['price'].'&message='.$row['message'].'&img='.$row['img'].'">小説</a>'; ?>
      <?php else: ?>
      <?php if($row['junle'] ===0): ?>
        <?php echo '<a href="list2.php?title='.$row['title'].'&price='.$row['price'].'&message='.$row['message'].'&img='.$row['img'].'">コミック</a>'; ?>
       <?php endif; ?>
       <?php endif; ?>
      </td>
      <td><?php echo $row['message']; ?></td>
   </tr>
   <?php endwhile; ?>

   
  </table>
  <div class="form-access">

    <a href="login.html">ログインフォームから購入した本の評価をつけてください</a>
  </div>
<style>
table{
  text-align: center;
  width: 80%;
  margin: 0 auto;
}
.form-access{
  padding: 12px 0;
  text-align: center;
}
</style>
</body>
</html>
