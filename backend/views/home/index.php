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



<div class="ui vertical segment">
<div class="ui three column grid">
  <div class="column">

    <div class="ui fluid link card">
      <div class="image">
        <img src="https://img.happycharter.com/image-charter-boat/50m-2-mast-sailing-ship-huge-1046877389207ce9.jpg">
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
        <img src="https://img.happycharter.com/image-charter-boat/50m-2-mast-sailing-ship-huge-104687421627daf3.jpg">
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
        <img src="https://img.happycharter.com/image-charter-boat/50m-2-mast-sailing-ship-huge-104687ef1d6e6882.jpg">
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

<br>

<div class="ui three column grid">
  <div class="column">
    <div class="ui fluid link card">
      <div class="image">
        <img src="https://img.happycharter.com/image-charter-boat/50m-2-mast-sailing-ship-huge-1046875bc3dca099.jpg">
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
        <img src="https://img.happycharter.com/image-charter-boat/50m-2-mast-sailing-ship-huge-10468771ead94846.jpg">
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
        <img src="https://img.happycharter.com/image-charter-boat/50m-2-mast-sailing-ship-huge-10468716b9321a36.jpg">
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

              <div class="ui centered link cards">
                <div class="card">
                  <div class="content">
                    <div class="header"><img class="ui top aligned tiny image" src="https://image.flaticon.com/icons/svg/284/284414.svg"></div>
                    <div class="description">
                      <p><strong>สามารถเลือกได้ </strong> <br>ว่าจะจองยานพาหนะประเภทใดโดย<br>คิดค่าจองยานพาหนะเเต่ละประเภท<br>เป็นรายวัน</p>
                    </div>
                  </div>
                </div>

                <div class="card">
                  <div class="content">
                    <div class="header">  <img class="ui top aligned tiny image" src="https://image.flaticon.com/icons/svg/320/320331.svg"></div>
                    <div class="description">
                      <p><strong>ขับขี่ยานพาหนะ </strong> <br>ผู้ซึ่งยานพาหนะแต่ละประเภทนั้นจุคน<br>ต่างกันมีผู้เชี่ยวชาญพิเศษในการขับขี่<br>ประจําตําแหน่งผู้ขับขี่ยานพาหนะนั้นๆ</p>
                    </div>
                  </div>
                </div>

                <div class="card">
                  <div class="content">
                    <div class="header">  <img class="ui top aligned tiny image" src="https://image.flaticon.com/icons/svg/201/201623.svg"></div>
                    <div class="description">
                      <p><strong>แผนการเดินทาง</strong> <br>โดยลูกค้าต้องบอกแผน<br>การเดินทางที่ชัดเจนเพื่อการวางแผน<br>การใช้เชื้อเพลิงที่ชัดเจน</p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="ui centered link cards">
                <div class="card">
                  <div class="content">
                    <div class="header"><img class="ui top aligned tiny image" src="https://image.flaticon.com/icons/svg/201/201574.svg"></div>
                    <div class="description">
                        <p><strong>เบอร์โทรศัพท์</strong> <br>บริษัทจะเก็บเบอร์โทรศัพท์ของ<br>ลูกค้าหนึ่งเบอร์เพื่อโทรกลับไป<br>สอบถามความพึงพอใจในการใช้งาน</p>
                    </div>
                  </div>
                </div>

                <div class="card">
                  <div class="content">
                    <div class="header">   <img class="ui top aligned tiny image" src="https://image.flaticon.com/icons/png/512/504/504627.png"></div>
                    <div class="description">
                      <p><strong>การวิจัย </strong> <br> เพื่อทําการทดลองวิจัยว่าธุรกิจนี้จะ<br>ประสบผลสําเร็จหรือไม่จึงสร้างระบบเพื่อ<br>ประกอบการวิจัย วัดจากรายได้แต่ละเดือน</p>
                    </div>
                  </div>
                </div>

                <div class="card">
                  <div class="content">
                    <div class="header">   <img class="ui top aligned tiny image" src="https://image.flaticon.com/icons/svg/172/172155.svg"></div>
                    <div class="description">
                      <p><strong>ของกำนัล </strong> <br> ลูกค้าใดมีการจองยานพาหนะ<br>กับบริษัทมากที่สุดทาง<br>บริษัทก็จะมีของกํานัลให้</p>
                    </div>
                  </div>
                </div>
                <br>
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
            	<div class="col-md-1"></div>
            	<div class="col-md-2">
            		<img class="ui medium  circular image" src="http://www.mx7.com/i/104/mKMVth.jpg">
            		<h1>Thor</h1>
            	</div>
            	<div class="col-md-2">
            		<img class="ui medium  circular image" src="http://www.mx7.com/i/12a/k2O7WU.jpg">
            		<h1>Tan</h1>
            	</div>
                <div class="col-md-2">
                	<img class="ui medium  circular image" src="http://www.mx7.com/i/124/QjvzQR.jpg">
                	<h1>Fern</h1>
                </div>
                <div class="col-md-2">
                	<img class="ui medium  circular image" src="http://www.mx7.com/i/1ed/0P5L0i.jpg">
                	<h1>Dome</h1>
                </div>
                <div class="col-md-2">
                	<img class="ui medium  circular image" src="http://www.mx7.com/i/1d1/6IPhj7.jpg">
                	<h1>Kok</h1>
                </div>
                <div class="col-md-1"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
