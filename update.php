<?php if(empty($_POST['login'])):?>
   <?php require '../bookstore/partial/header.php'?>

   <div>
     <?php echo '<img src="./images/hunter.jpg">'?>
      <p>ログインページからのアクセスお願いします。</p>

   </div>
<?php else: ?>
<?php if($_POST['username']==='testuser' &&$_POST['password']==='password') :?>






     <form action="db_connect.php" method="post" enctype="multipart/form-data">
     <h1>本の感想お願いします</h1>
     <label for="title">タイトル</label>
       <input type="text" name="title" id="title" required>
       <label for="price">価格</label>
       <input type="text" name="price" id="price">
       <label for="junle">ジャンル</label>
          小説
           <input type="checkbox" name="junle" value="1">
          漫画
           <input type="checkbox" name="junle" value="0">
         </div>
         <p>画像</p>
        <input type="file" name="im">
        <p>メッセージ</p>
        <textarea name="message" minlength="10" maxlength="200"col=40 row=50>
         
        </textarea>
        <span></span>
        <input type="submit" value="送信"　name="insert">
      </form>
     <?php else: ?>
       <?php echo "入力情報が正しくありません"; ?>
   
     <a href="../bookstore/book.php">TOPpage</a>
   <?php endif; ?>
   <?php endif; ?>

</body>
</html>

<script>
const  textarea = document.querySelector('textarea');
const  span = document.querySelector('span');

let maxLen = textarea.getAttribute('maxlength');


textarea.addEventListener('input',function(){
  let inputText = textarea.value.length;
  let nowlength =(maxLen-inputText);
  span.textContent=nowlength;
  if(nowlength < 10){
    nowlength.style.color='red';
  } 
})

</script>
</body>
</html>
<style>
 label,input{
  display: block;
 }
 
 input{
  height: 40px;
  width: 250px;
 }
 textarea{
  text-align: justify;
  width: 300px;
  height: 40px;
 }
 /* div{
        width: 100%;
        text-align: center;
      } */
     img{
        width:400px;
      }
      body{
        display: flex;
        justify-content: center;
        align-items: center;
      }
      /* form{
        width:500px;
        margin: 0 auto;
      } */
      input[type="submit"]{
        margin-top: 30px;
        background: blue;
        width: 200px;
        height: 30px;
        color: white;
        padding:0 12px;
        font-size: 22px;
        transition: opacity .3s;
      }
      input[type="submit"]:hover{
        opacity: 0.8;
        cursor: pointer;
      }
     
      body{
        background-image: url('./images/bg.jpg');
        background-repeat:no-repeat;
        background-size: cover;
        min-height: 100vh;
      }

</style>

