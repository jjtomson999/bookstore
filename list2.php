<?php
$title=$_POST['title'];

$message=$_POST['message'];
$junle = $_POST['junle'];
$old_img=$_FILES['im']['tmp_name'];
$new_img=$_FILES['im']['name'];

move_uploaded_file($old_img, './images/'.$new_img);
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
  $sql="select *from store where junle='.$junle' and title='$title'";
  $stmt=$pdo->prepare($sql);
  $stmt->execute();
}catch(PDOException $e){
  echo '障害発生です'. $e->getMessage() ."\n";
  exit();
}
?>
<?php
($row = $stmt->fetch());
echo '<div>';
echo '<p>'.$title.'</p>';
echo $message;

echo '</div>';
echo '<img src="./images/'.$new_img.'">';
?>
<a href="./book.php">本棚へ</a>
<style>
p{
  width: 50%;
  color: skyblue;
  font-size: 32px;
  border-bottom: 10px solid black;
}
div{
  width: 80%;
  margin: 0 auto;
}
</style>




