<?php
use yii\helpers\Html;
$baseUrl=\Yii::getAlias('@web');
 ?>
  <br><br><br><br>


    <div class="container">
      <div class="panel panel-default">



          <div class="panel-body">
            <div class="row">
              <input type="hidden" name="id" value="<?=$model['boat_id'] ?>">

              <div class="col-md-5"><center><h1><?=$model ['name'] ?></h1></center><br><br>
                <img src="http://wallpapers.wallpapersdepo.net/free-wallpapers/3123/Great-Voyage.jpg" alt="..." class="img-thumbnail">
                <h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ประเภท : <?=$model['type'] ?>
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                   จำนวนที่นั่ง : <?=$model['maxseat'] ?></h3>

             </div>
              <div class="col-md-6"><h5>

                  <div class="form-group">
                  <center><h2>ข้อมูลเกี่ยวกับลูกค้า</h2></center><br><br>

                  ชื่อลูกค้า <input type="text" name="cusname">&nbsp;&nbsp;&nbsp;
                  อีเมล<input type="text"><br><br><br>
                  หมายเลขบัตรประชาชน <input type="text"><br><br><br>
                  สถานที่ไป<input type="text"><br><br><br>
                  วันไป <input type="date" name="rentdate"><br><br><br>
                  วันกลับ <input type="date" name="backdate"><br><br><br>
                  ระยะทาง <input type="text" name="distance"><br><br><br><h5>



                </div>
                    </div>
                </div>
                </div>
              </div>
               <form action="<?=$baseUrl."/reser/save" ?>" method="get">
                      <!-- ชื่อเรือ :<?=$model ['name'] ?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ประเภท : <?=$model['type'] ?><br><br>

                      จำนวนที่นั่ง : <?=$model['maxseat'] ?><br><br>
                      ชื่อลูกค้า <input type="text" name="cusname"><br><br>
                      รหัสบัตรประชาชน <input type="text"><br><br>
                      อีเมล<input type="text"><br><br>

			                ระยะทาง <input type="text" name="distance"><br><br>
			                วันไป <input type="date" name="rentdate"><br><br>
			                วันกลับ <input type="date" name="backdate">  -->

       			<input type="hidden" name="boat_id" value="<?=$model['boat_id'] ?>">
                <input type="submit" class="ui secondary button"value="จอง">
              </form>


            </div>
