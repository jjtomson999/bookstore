<?php

if($_GET['data']){

  $data = $_GET['data'];

  $i = $data[0];
}



?>



  <?php require './partial/header.php'; ?>
 
   
  <?php
 
  echo $bookimage="images\book$i.jpg";
 ?>
 <div class="container">

   <img src="<?php echo $bookimage ?>">
   <div class="book-info">
    <?php
    class BookMenu{
      public $title;
      public $message;
      public $price;
      function __construct($title,$message, $price)
      {
        $this->title=$title;
        $this->message=$message;
        $this->price=$price;
      }
       function showTitle(){
         echo  $this->title;
         return $this;
 
       }
       function showMessage(){
        echo $this->message;
        return $this;
       }
       function showPrice(){
        echo $this->price;
        return $this;
       }
 
    
    }
    echo $i;
    $book[0] = new BookMenu('"はてなぜだろうの物理学"','自然の風景の中で、宇宙の広大さや人間の不条理、驚くべき人類史がかかれた名著を読むことで感動することができます','&yen1780');
    $book[1] = new BookMenu('"ソフィーの世界"','"「自分」「それ」「これ」といった西洋人と東洋人の世界観の差。オブジェクト指向の思考の原点"','&yen2345');
    $book[3] = new BookMenu('ファーブル昆虫記','"ファーブル昆虫記は文字通りファーブルによる昆虫の観察記録です。最も優れた部分はファーブルの観察の観点です。彼は昆虫愛好家というより分析し、解析し、そして昆虫に関する研究方針を打ち立てました。"','&yen3000');


    $book[4] = new BookMenu('死に至る病','"キルケゴールの死に至る病。人間の不条理を描いた名著。ヘーゲルの弁証法と対極をなす現代哲学書の金字塔"','&yen1400');
    

    $book[$i]->showTitle();
    $book[$i]->showPrice();
    $book[$i]->showMessage();

    ?>



   </div>
   
 </div>

 <style>
  .container{
    width: 80%;
    display: flex;
    align-items: center;
    gap: 30px;
    margin: 0 auto;
  }
  p{
   line-height: 1.5;
   
  }
  img{
    display: block;
  }
 </style>
 <?php require './partial/footer.php'; ?>
