
<?php
session_start();
function h($val){
  return htmlspecialchars($val,ENT_QUOTES,'UTF-8');
}

if(
isset($_POST['title'])
&& isset($_POST['price'])
&& isset($_POST['junle'])
&& isset($_POST['im'])){
  
$_SESSION['book']=[
  'title' => h($_POST['title']),
  'price' => h($_POST['price']),
  'junle' => h($_POST['junle'])
  
];
}


 $old_img=$_FILES['im']['tmp_name'];
 $new_img=$_FILES['im']['name'];
 move_uploaded_file($old_img,'./images/'.$new_img);
 


