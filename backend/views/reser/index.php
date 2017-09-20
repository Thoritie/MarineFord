<?php
use yii\widgets\LinkPager;
use yii\helpers\Html;
$baseUrl=\Yii::getAlias('@web');
 ?>


    <div class="container">
      <div class="panel panel-default">
        <br><br><br><br>

                  <br>
          <div class="panel-body">
            <div class="row">
              <input type="hidden" name="id" value="">
              <div class="col-md-5"><img src="http://wallpapers.wallpapersdepo.net/free-wallpapers/3123/Great-Voyage.jpg" alt="..." class="img-thumbnail"></div>
              <div class="col-md-6">
                <div class="form-group">
                  เรือ : <input type="text" name="" value="">
                </div>
                <div class="form-group">
                  <label for="sel1">เลือกขนาดของเรือ</label>
                  <select class="form-control" id="sel1">
                    <option>เล็ก</option>
                    <option>กลาง</option>
                    <option>ใหญ่</option>
                  </select><br><br>
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


                <input type="submit" value="บันทึก">
              </form>
            </div>
