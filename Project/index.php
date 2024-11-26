<?php

session_start();

if(isset($_SESSION["user_id"])){
  $mysqli = require __DIR__ ."/database.php";
  $sql = "SELECT * FROM user
          where id = {$_SESSION["user_id"]}";
  $result =  $mysqli -> query ($sql);
  $user = $result -> fetch_assoc();
}
 ?>

 <!--index.html file-->
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>INL LIBRARY</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <style media="screen">
      *{box-sizing:border-box;}
      .banner{
        width:100%;
        height:auto;
        background:#E4E997;
      }
      .bigitem{
        display:inline-block;
        width:100%;
        height:auto;
        margin-top: 20px;
        background:#f0d9e7;
        padding: 0px;
        border-radius:10px 10px;
      }
      .item{
        display:inline-block;
        width:45%;
        height:auto;
        margin-top: 20px;
        margin-right:0;
        margin-left:22.5px;
        background:#f0d9e7;
        padding: 0px;
        border-radius:10px 10px;
      }
      .footer{
        padding:10px;
        height:50px;
        text-align:center;
        font-style:italic;
        background:#CCCCFF;
      }
    </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/light.css">
  </head>

  <body class="body">

    <div class="banner">
      <h1>INL LIBRARY</h1>
    </div>

    <?php if (isset($user)): ?>
        <p>Hello <?= htmlspecialchars($user["name"])?> <small>^^</small>!</p>
        <p><a href="logout.php">Log out</a></p>
    <?php else: ?>
        <p><a href="login.php">login in</a>
          or <a href="signup.html">sign up<a>.</p>
    <?php endif; ?>

  <div class="list">
    <div class="bigitem">
      <div class="item"> <!--try this color #f0d9e7-->
        <div><h2 style="color:white;">EXCERPTS</h2></div>

        <div class="contantbox">
            <div class="wowcard">
                <div class="wowbox">
                    <img src="img/book1.png" alt="">
                </div>
                <div class="selectbox">
                    <h2>Death and the Maiden</h2>
                    <div class="">
                        <span>Der Tod und das Mädchen</span>
                    </div>
                    <div class="">Author :
                        <span>Elfriede Jelinek</span>
                    </div>
                    <a href="DeathAndtheMaiden.php" class="wow-btn">READ</a>
                </div>
              </div>
          </div>
        <div class="slogan"><h3 style="color:#f0d9e9;"><i>INDIVIDUAL LIBRARY</i></h3></div>
     </div>

      <div class="item">
        <div><h2 style="color:white;"></h2></div>

        <div class="contantbox">
            <div class="wowcard">
                <div class="wowbox">
                    <img src="img\book2.png" alt="">
                </div>
                <div class="selectbox">
                    <h2>Half a Lipstick</h2>
                    <div class="">
                        <span>半支口红</span>
                    </div>
                    <div class="">Author :
                        <span>OuYa</span>
                    </div>
                    <a href="HalfaLipstick.php" class="wow-btn">READ</a>
                </div>
              </div>
          </div>
        <div class="slogan"><h3 style="color:#f0d9e9;"><i>SHOW WOWS~</i></h3></div>
     </div>
  </div>

  <div style="background-color:#CCCCFF;" class="bigitem">
    <div style="background-color:#CCCCFF;" class="item"> <!--try this color #f0d9e7-->
      <div><h2 style="color:white;">COMICS</h2></div>
      <div class="contantbox">
          <div class="wowcard">
              <div class="wowbox">
                  <img src="img/book3.png" alt="">
              </div>
              <div class="selectbox">
                  <h2>Band</h2>
                  <div class="">
                      <span>Band Line</span>
                  </div>
                  <div class="">Author :
                      <span>Yokada</span>
                  </div>
                  <a href="Comics.php" class="wow-btn">READ</a>
              </div>
            </div>
        </div>
      <div class="slogan"><h3 style="color:#CCCCFF;"><i>INDIVIDUAL LIBRARY</i></h3></div>
   </div>

    <div style="background-color:#CCCCFF;" class="item">
      <div><h2 style="color:white;">OTHERS</h2></div>

      <div class="contantbox">
          <div class="wowcard">
              <div class="wowbox">
                  <img src="img/contact.png" alt="">
              </div>
              <div class="selectbox">
                  <h2>View</h2>
                  <div class="">
                      <span>What is Your Best</span>
                  </div>
                  <div class="">
                      <span> Book?</span>
                  </div>
                  <a href=mailto:cst1909169@xmu.edu.my class="wow-btn">TELL ME</a>
              </div>
            </div>
        </div>
      <div class="slogan"><h3 style="color:#f0d9e9;"><i>INDIVIDUAL LIBRARY</i></h3></div>
   </div>
</div>


</div>
    <br><br>
    <div class="footer">
    <footer>
    &copy;Yokada
    </footer>
    </div>

  </body>
</html>