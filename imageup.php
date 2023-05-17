
<?php
 $old_img=$_FILES['im']['tmp_name'];
 $new_img=$_FILES['im']['name'];


if(is_uploaded_file($old_img)){
  if( move_uploaded_file($old_img,'./images/'.$new_img)){
    echo $new_img ."アップロード";
  }else{
    echo "アップロード失敗";
  }
}else{
  echo "ファイルが選択されていません";
}


 ?>

