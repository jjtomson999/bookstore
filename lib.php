<?php
$title = $_POST['title'];
$price = $_POST['price'];
$junle = $_POST['junle'];
$message =$_POST['message'];
$old_img=$_FILES['im']['tmp_name'];
$new_img=$_FILES['im']['name'];

move_uploaded_file($old_img, './images/'.$new_img);








echo '<img src="./images/'.$new_img.'">';
echo '<br/>';
echo '<div>' .$title. '</div>';
echo '<div>' .$price. '</div>';
echo '<div>' .$junle. '</div>';
echo '<div>' .$message. '</div>';


require_once 'db_connect.php';
?>
<?php
 echo '<a href="bookdata.php">小説</a>';
 echo '<br>';
 echo '<a href="bookdata.php">コミック</a>';
 var_dump($_POST);
 ?>