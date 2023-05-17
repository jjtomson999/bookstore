

<footer>
&copy;kazuki uehara <php echo echo date('Y/m/d'); ?>
<div class="ftr-page">
  <ul>
    <li><a href="novel.php">小説</li>
    <li><a href="manga.php">コミック・青年漫画
    </li>
    <li><a href="technologoy.php">技術書</li>
  　
  </ul>
</div>
</footer>
<style>
  a{
    display: block;
    text-decoration: none;
  }

  ul li a:hover{
    background: skyblue;
  }
  
  ul{
    width: 100%;
    display: flex;
    justify-content:center;
    
  }
  li{
    width: 200px;
    list-style-type: none;
    border: 1px solid black;
  }

.ftr-page{
  width: 100%;
  display: flex;
  margin: 0 auto;

}
footer{
  margin-top: 100px;
  text-align: center;
  height: 400px;
  background: #ddd;
}
</style>
