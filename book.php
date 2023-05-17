<?php

require './partial/header.php';
?>

  <style>
    *{
      box-sizing: border-box;
      padding: 0;
      margin: 0;
    }
  body{
    min-height: 100vh;
  }
  header{
    background: #000;
    width: 100%;
    height: 80px;
    display: flex;
    justify-content: space-around;
    position:fixed;
    top: 0px;
    left: 0px;
    margin-bottom: 120px;
    color: white;
  }
  /* ここからSwiper */
  .swiper{
    width: 86%;
    margin: 80px auto 0 auto;
    pointer-events: none;
  }
 .swiper-slide{
  width: 100%;
  margin: 120px auto 0 auto;
  text-align: center;
  
 }
 .swiper-slide img{
  height: 470px;
  vertical-align:bottom;
  overflow:hidden;
  object-fit: cover;
  margin-top: 80px;
  padding-top: 70px;
  pointer-events: auto;
  cursor: pointer;
  overflow-y: hidden;
 }
 /* Swiperここまで */
 ul{
  text-align: center;
 }
 li{
   list-style: none;
   background: skyblue;
   width: 50px;
   margin-top: 50px;
   color: black;
 }
 li a{
  color: white;

 }

 .photo-message{
  margin-top: 20px;
  margin-bottom: 100px;
  text-align: center;
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  
 }
 /* AOSここから */

 .container{
  display: flex;
  gap: 30px;
  align-items: center;
 }
 .container_02{
  display: flex;
  flex-direction: row-reverse;
 }
 .container img{
   max-width: 60%;
}
.photo-message p{
  font-size: 24px;
  width: 44%;
  margin: 0 auto;
  border-bottom: 2px solid blue;
  white-space: nowrap;
  transition: .3s all;
}
.photo-message p{
  opacity: 0.8;

}
/* AOSここまで */
  </style>
  <header>
    <h1>
    Hello
    </h1>
    <nav>
      <ul>
        <li><a href="login.html">Login</li>
      </ul>
    </nav>
  </header>
  <div class="swiper">
    <div class="swiper-wrapper">
       <div class="swiper-slide">
       <a href="info.php?data%5b%5d=1">
          <img src="./images/book1.jpg" alt="">
        </a>
        <p>あなたは誰？世界はどこからきたの？--西洋人と東洋人の視点
        </p>
       </div>
       <div class="swiper-slide">
       <a href="info.php?data%5b%5d=0">

        <img src="./images/book0.jpg" alt="">
       </a>
        <p>自然の解明ーー物理学</p>
       </div>
       <div class="swiper-slide">
       <a href="info.php?data%5b%5d=3">
       <img src="./images/book3.jpg" alt="">
       </a>
    
       </div>
       <div class="swiper-slide">
       <a href="info.php?data%5b%5d=4">

          <img src="./images/book4.jpg" alt="">
        </a>
        <p>近代ヨーロッパ　哲学の夜明け</p>
       </div>
       <div class="swiper-slide">
       <a href="info.php?data%5b%5d=6">

          <img src="./images/book6.jpg" alt="">
        </a>
       </div>
    
    </div>
    <div class="swiper-pagenation">

    </div>
    <div class="swiper-button-prev"></div>
  <div class="swiper-button-next"></div>

  </div>
  <div class="photo-message">
    <p>読書と感想に関して記載したサンプル画像です。クリックしてみてね～</p>
  </div>

  </div>
  <div class="wrapper">

    <div class="container container_01">
       <div>
  
         <img src="./images/star2.jpg" data-aos="fade-up">
       </div>
      <p data-aos="fade-up" data-aos-delay="300" data-aos-duration="500">
        あのイーハトーヴォのすきとおった風、夏でも底に冷たさをもつ青いそら、うつくしい森で飾られたモリーオ市、郊外のぎらぎらひかる草の波。
      </p>
    </div>
    <div class="container container_02">
       <div>
  
         <img src="./images/star2.jpg" data-aos="fade-up">
       </div>
      <p data-aos="fade-up" data-aos-delay="300" data-aos-duration="500">
        あのイーハトーヴォのすきとおった風、夏でも底に冷たさをもつ青いそら、うつくしい森で飾られたモリーオ市、郊外のぎらぎらひかる草の波。
      </p>
    </div>
       
  </div>

 
   <?php
  require './partial/footer.php';
?>
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<script src="js/main.js"></script>
<script>
AOS.init({
  offset: 200,
  duration: 500,
  easing: "ease-in-sine",
  delay: 100
});
</script>
</body>
</html>
