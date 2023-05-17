<?php if(!isset($_POST['title'])|| !isset($_POST['price'])|| !isset($_POST['junle'])):?>
   <?php require '../bookstore/partial/header.php'?>
   <div>
   <a href="javascript:history.back();">登録画面に戻る</a>

   </div>
<?php else: ?>
<?php
$title= $_POST['title'];
$price = $_POST['price'];
$junle = $_POST['junle'];
$old = $_FILES['im']['tmp_name'];
$new = $_FILES['im']['name'];

move_uploaded_file($old, './images/'.$new);

?>
<a href="novel.php?title=<?php echo $title ?>&price=<?php echo $price ?>&junle=<?php echo $junle ?>&image=<?php echo $new ?>">小説</a>

<?php endif; ?>
</body>
</html>
<style>
 label,input{
  display: block;
 }
</style>

