<?php
use yii\widgets\LinkPager;
use yii\helpers\Html;
$baseUrl=\Yii::getAlias('@web');
 ?>

      <br><br><br><br>

    <div class="container">
      <div class="panel panel-default">

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
                  </select>
                </div>


                    <!-- <div class="form-group">
                        <label  class="col-sm-2 control-label">วันที่จอง</label>
                            <div class="col-xs-2 col-sm-4"><div class="col-sm-10">
                                <input type="text" class="form-control" id="inputtext" placeholder="2013-12-14" name="rentdate">
                              </div>
                            </div>
                              <div class="form-group">
                                <label  class="col-sm-2 control-label">ถึงวันที่</label>
                                  <div class="col-xs-2 col-sm-4"><div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputtext" placeholder="2013-12-14" name="backdate">
                                      </div>
                                  </div>
                              </div>
                    </div><br><br><br> -->
                        <!-- <div class="form-group">
                            <label  class="col-sm-2 control-label">ระยะทาง</label>
                                <div class="col-xs-2 col-sm-4"><div class="col-sm-10">
                                    <input type="text" class="form-control" id="inputtext" placeholder="text" name="distance">
                                  </div>
                                </div>
                      </div> -->
                    </div>
                </div>
                </div>
              </div>
              <form action="<?=$baseUrl."/reser/save" ?>" method="get">
                ชื่อลูกค้า <input type="text" name="cusname"><br><br>
                รหัสบัตรประชาชน <input type="text"><br><br>
                อีเมล<input type="text"><br><br>
                ระยะทาง <input type="text" name="distance"><br><br>
                วันไป <input type="text" name="rentdate"><br><br>
                วันกลับ <input type="text" name="backdate"><br><br>

                <input type="submit" value="บันทึก">
              </form>
            </div>
                    <!-- <div class="panel panel-default">
                      <div class="panel-body">
                        <div class="form-group">
                            <label  class="col-sm-1 control-label">ชื่อลูกค้า</label>
                                <div class="col-xs-5 col-sm-5"><div class="col-sm-10">
                                    <input type="text" class="form-control" id="inputtext" placeholder="text" name="cusname">
                                  </div>
                                </div>
                        </div>


                        <br><br><br>
                      </div>
                    </div> -->
