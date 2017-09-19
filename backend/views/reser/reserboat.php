<?php
use yii\helpers\Html;
$baseUrl=\Yii::getAlias('@web');
 ?>
      <br><br><h1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ชื่อเรือ :<?=$model ['name'] ?></h1>
      <br>

    <div class="container">
      <div class="panel panel-default">

          <div class="panel-body">
            <div class="row">
              <input type="hidden" name="id" value="<?=$model['boat_id'] ?>">

              <div class="col-md-5"><img src="http://wallpapers.wallpapersdepo.net/free-wallpapers/3123/Great-Voyage.jpg" alt="..." class="img-thumbnail"></div>
              <div class="col-md-6">
                <div class="form-group">
                  <h1>ประเภท : <?=$model['type'] ?></h1>
                </div>
                <div class="form-group">
                      <h1>จำนวนที่นั่ง : <?=$model['maxseat'] ?></h1>
                </div>
                    </div>
                </div>
                </div>
              </div>
              <form action="<?=$baseUrl."/reser/save" ?>" method="get">
                      ชื่อเรือ :<?=$model ['name'] ?><br><br>
                      ประเภท : <?=$model['type'] ?><br><br>
                      จำนวนที่นั่ง : <?=$model['maxseat'] ?><br><br>
			                ชื่อลูกค้า <input type="text" name="cusname">
			                ระยะทาง <input type="text" name="distance">
			                วันไป <input type="date" name="rentdate">
			                วันกลับ <input type="date" name="backdate">
       			<input type="hidden" name="boat_id" value="<?=$model['boat_id'] ?>">
                <input type="submit" value="บันทึก">
              </form>
            </div>
