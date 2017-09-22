<?php
use yii\helpers\Html;
$baseUrl=\Yii::getAlias('@web');
 ?>
  <br><br><br><br>

  <div class="ui two column divided grid">
    <div class="stretched row">
      <div class="column">
        <div class="ui inverted segment">



            <!-- img -->
            <img src="<?=$model['pic']?>" alt="..." class="img-thumbnail">

            <h2 class="ui horizontal inverted divider">
                <?=$model ['name'] ?>
            </h2>
            <center><h2>
            <p>category : <?=$model['type'] ?></p>
            <p>Seating Capacity : <?=$model['maxseat'] ?> Seat</p></h2></center>


        </div>
      </div>
      <div class="column">
        <div class="ui segment very padded">
            <!-- form begin -->
            <form class="ui form" action="<?=$baseUrl."/reser/customer" ?>" method="get">
                <h3 class="ui dividing header"><i class="tag icon"></i>Customer Information</h3>
                <div class="field">
                    <label>Name</label>

                    <div class="field">
                        <div class="field">
                          <div class="twelve wide field">
                            <input type="text" name="cusname" value="<?php echo $user['cusname'] ?>" placeholder="Name">
                        </div>
                      </div>
                    </div>
                </div>
                <div class="field">
                    <label>Email Address</label>
                    <div class="fields">
                        <div class="twelve wide field">
                            <input type="text" name="email" value="<?php echo $user['email'] ?>" placeholder="email">
                        </div>
                    </div>
                </div>

        <h3 class="ui dividing header"><i class="flag icon"></i>Sailing Information</h3>
        <div class="two fields">
            <div class="field">
                <label>State</label>
                <select class="ui fluid dropdown" name="destination">
                    <option value="">State</option>
                    <option value="AL">Alabama</option>
                    <option value="AK">Alaska</option>
                    <option value="AZ">Arizona</option>
                    <option value="AR">Arkansas</option>
                    <option value="CA">California</option>
                    <option value="CO">Colorado</option>
                </select>
        </div>
    </div>


    <div class="field">
      <div class="field">
          <label>Day away</label>
          <div class="fields">
              <div class="twelve wide field">
                  <input type="date" name="rentdate" placeholder="วันออกเรือ">
              </div>
          </div>
      </div>
      <div class="field">
          <label>Day back</label>
          <div class="fields">
              <div class="twelve wide field">
                  <input type="date" name="backtdate" placeholder="เรือกลับเข้าฝัง">
              </div>
          </div>
      </div>
    </div>
    <div class="fields">
        <div class="six wide field">
        </div>
    </div>

  <input type="submit" class="ui secondary button" value="Reservations">
  <input type="hidden" name="boat_id" value="<?=$model['boat_id'] ?>">
  <input type="hidden" name="idbill" value="<?=$model['_id'] ?>">
</form>
