<?php
  use yii\widgets\LinkPager;
$baseUrl=\Yii::getAlias('@web');
 ?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>MarineFord</title>
  </head>
  <body>
    <!-- Following Menu -->
    <!-- Page Contents -->
    <div class="pusher">
      <div class="ui inverted vertical masthead center aligned segment">

        <div class="ui container">
          <div class="ui large secondary inverted pointing menu">
            <a class="toc item">
              <i class="sidebar icon"></i>
            </a>
            <a class="active item">
              <h3>
              <i class="home icon"></i>Home
            </h3>
            </a>
            <a class="item" href="list/index">
              <h3>
              <i class="list icon"></i>list
            </h3></a>
            <?php if (isset($user)): ?>
            <a class="item" href="<?=$baseUrl."/list/history"?>">
              <h3>
              <i class="add to cart icon"></i>ประวัติการจอง
            </h3></a>
            <?php endif; ?>
            <div class="right item">
              <?php if (isset($user)): ?>
              <?=$user->cusname?> &nbsp;&nbsp;&nbsp;
                <a class="ui inverted button" href="<?=$baseUrl."/auth/logout"?>">Log Out</a>
              <?php else: ?>
                <a class="ui inverted button" href="<?=$baseUrl."/auth/login"?>">Log In</a>
                <a class="ui inverted button" href="auth/register">Sign Up</a>
             <?php endif; ?>
            </div>
          </div>
        </div>
        <br><br><br>
        <div class="ui text container">
            <h1 class="ui inverted aligned icon header">
                MarineFord.
            </h1>
            <br>
            <center>
            <img class="ui medium  rounded image" src="https://image.flaticon.com/icons/svg/198/198367.svg">
          </center>
            <br>
          <!-- <div class="ui massive blue animated button" tabindex="0">
            <div class="visible content">Next</div>
            <div class="hidden content">
              <i class="Angle Double Right"></i>
            </div>
            </div> -->
        </div>
        </div>
      </div>
    </div>
<br>
    <!-- <div class="ui equal width center aligned padded grid">
      <div class="row">
        <div class="White column">
          <h1><strong>MY TEAM</strong></h1>
          <div class="ui container">
            <hr>
            <div class="ui small images">
                <img class="ui medium  circular image" src="http://www.mx7.com/i/104/mKMVth.jpg">
                <img class="ui medium  circular image" src="http://www.mx7.com/i/12a/k2O7WU.jpg">
                <img class="ui medium  circular image" src="http://www.mx7.com/i/124/QjvzQR.jpg">
                <img class="ui medium  circular image" src="http://www.mx7.com/i/1ed/0P5L0i.jpg">
                <img class="ui medium  circular image" src="http://www.mx7.com/i/1d1/6IPhj7.jpg">
            </div>
            </div>
        </div>
      </div>
    </div> -->

    <!-- <div class="ui massive blue animated button" tabindex="0">
  <div class="visible content">Next</div>
  <div class="hidden content">
    <i class="Angle Double Right"></i>
  </div>
  </div> -->
</div>
</div>
</div>
</div>
<br>
<div class="ui  width center aligned padded grid">
<div class="row">
<div class="White  column">
<div class="ui container">
<h1>REVIEW</h1>
<hr>
<div class="container very padded">
<div class="ui three column grid">
  <div class="column">
    <div class="ui fluid link card">
      <div class="image">
        <img src="https://lh3.googleusercontent.com/Mq6W2e2VcqvnUie7x6mW597jCy3n7eEZcFN6rT6cP1l4cbb5lO5VSmKwZDJDORcNJLM=w300">
      </div>
      <div class="content">
        <center>
          <h3>Elliot Fu</h3>
          <hr>
        </center>
        <div class="description">
          Matthew is an interior designer living in New York.
        </div>
      </div>
    </div>
  </div>
  <div class="column">
    <div class="ui fluid link card">
      <div class="image">
        <img src="http://img.freepik.com/vettori-gratuito/sfondo-carino-barca_23-2147552049.jpg?size=338&ext=jpg">
      </div>
      <div class="content">
        <center>
          <h3>Elliot Fu</h3>
          <hr>
        </center>
        <div class="description">
          Matthew is an interior designer living in New York.
        </div>
      </div>
    </div>
  </div>
  <div class="column">
    <div class="ui fluid link card">
      <div class="image">
        <img src="https://image.freepik.com/free-vector/flat-nautical-background-with-anchors-and-lighthouse_23-2147586440.jpg">
      </div>
      <div class="content">
        <center>
          <h3>Elliot Fu</h3>
          <hr>
        </center>
        <div class="description">
          Matthew is an interior designer living in New York.
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<br>
<div class="container very padded">
<div class="ui three column grid">
  <div class="column">
    <div class="ui fluid link card">
      <div class="image">
        <img src="https://image.freepik.com/free-vector/flat-nautical-background-with-anchors-and-lighthouse_23-2147586440.jpg">
      </div>
      <div class="content">
        <center>
          <h3>Elliot Fu</h3>
          <hr>
        </center>
        <div class="description">
          Matthew is an interior designer living in New York.
        </div>
      </div>
    </div>
  </div>
  <div class="column">
    <div class="ui fluid link card">
      <div class="image">
        <img src="https://image.freepik.com/free-vector/flat-nautical-background-with-anchors-and-lighthouse_23-2147586440.jpg">
      </div>
      <div class="content">
        <center>
          <h3>Elliot Fu</h3>
          <hr>
        </center>
        <div class="description">
          Matthew is an interior designer living in New York.
        </div>
      </div>
    </div>
  </div>
  <div class="column">
    <div class="ui fluid link card">
      <div class="image">
        <img src="https://image.freepik.com/free-vector/flat-nautical-background-with-anchors-and-lighthouse_23-2147586440.jpg">
      </div>
      <div class="content">
        <center>
          <h3>Elliot Fu</h3>
          <hr>
        </center>
        <div class="description">
          Matthew is an interior designer living in New York.
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>
</div>
</div>
</div>

        <div class="ui  width center aligned padded grid">
        <div class="row">
        <div class="teal  column">
        <div class="ui container">
            <h1><strong>BOUNDRY</strong></h1>
              <hr>
              <div class="ui compact segments">
                <div class="ui yellow secondary segment">
                      <img class="ui top aligned tiny image" src="https://image.flaticon.com/icons/svg/284/284414.svg">
                      <p><strong>สามารถเลือกได้ </strong> <br>ว่าจะจองยานพาหนะประเภทใดโดย<br>คิดค่าจองยานพาหนะเเต่ละประเภท<br>เป็นรายวัน</p>
                </div>
              </div>
              <div class="ui compact segments">
                <div class="ui yellow secondary segment">
                      <img class="ui top aligned tiny image" src="https://image.flaticon.com/icons/svg/320/320331.svg"><br>
                      <p><strong>ขับขี่ยานพาหนะ </strong> <br>ผู้ซึ่งยานพาหนะแต่ละประเภทนั้นจุคน<br>ต่างกันมีผู้เชี่ยวชาญพิเศษในการขับขี่<br>ประจําตําแหน่งผู้ขับขี่ยานพาหนะนั้นๆ</p>
                </div>
              </div>
              <div class="ui compact segments">
                <div class="ui yellow secondary segment">
                      <img class="ui top aligned tiny image" src="https://image.flaticon.com/icons/svg/201/201623.svg">
                      <p><strong>แผนการเดินทาง</strong> <br>โดยลูกค้าต้องบอกแผน<br>การเดินทางที่ชัดเจนเพื่อการวางแผน<br>การใช้เชื้อเพลิงที่ชัดเจน</p>
                </div>
              </div>
              <div class="ui compact segments">
                <div class="ui yellow  secondary segment">
                      <img class="ui top aligned tiny image" src="https://image.flaticon.com/icons/svg/305/305139.svg">
                      <p><strong>สามารถเลือกได้ </strong> <br>ว่าจะจองยานพาหนะประเภทใดโดย<br>คิดค่าจองยานพาหนะ<br>เเต่ละประเภทเป็นรายวัน</p>
                </div>
              </div>
              <div class="ui compact segments">
                <div class="ui yellow  secondary segment">
                      <img class="ui top aligned tiny image" src="https://image.flaticon.com/icons/svg/201/201574.svg">
                      <p><strong>เบอร์โทรศัพท์</strong> <br>บริษัทจะเก็บเบอร์โทรศัพท์ของ<br>ลูกค้าหนึ่งเบอร์เพื่อโทรกลับไป<br>สอบถามความพึงพอใจในการใช้งาน</p>
                </div>
              </div>
              <div class="ui compact segments">
                <div class="ui yellow  secondary segment">
                      <img class="ui top aligned tiny image" src="https://image.flaticon.com/icons/png/512/504/504627.png">
                      <p><strong>การวิจัย </strong> <br> เพื่อทําการทดลองวิจัยว่าธุรกิจนี้จะ<br>ประสบผลสําเร็จหรือไม่จึงสร้างระบบเพื่อ<br>ประกอบการวิจัย วัดจากรายได้แต่ละเดือน</p>
                </div>
              </div>
              <div class="ui compact segments">
                <div class="ui yellow  secondary segment">
                      <img class="ui top aligned tiny image" src="https://image.flaticon.com/icons/svg/172/172155.svg">
                      <p><strong>ของกำนัล </strong> <br> ลูกค้าใดมีการจองยานพาหนะ<br>กับบริษัทมากที่สุดทาง<br>บริษัทก็จะมีของกํานัลให้</p>
                </div>
              </div>
          </div>
        </div>
      </div>
    </div>
    <div class="ui equal width center aligned padded grid">
      <div class="row">
        <div class="blue column">
          <h1><strong>MY TEAM</strong></h1>
          <div class="ui container">
            <hr>
            <div class="ui small images">
                <img class="ui medium  circular image" src="http://www.mx7.com/i/104/mKMVth.jpg">
                <img class="ui medium  circular image" src="http://www.mx7.com/i/12a/k2O7WU.jpg">
                <img class="ui medium  circular image" src="http://www.mx7.com/i/124/QjvzQR.jpg">
                <img class="ui medium  circular image" src="http://www.mx7.com/i/1ed/0P5L0i.jpg">
                <img class="ui medium  circular image" src="http://www.mx7.com/i/1d1/6IPhj7.jpg">
            </div>
            </div>
        </div>
      </div>
    </div>
  </body>
</html>
