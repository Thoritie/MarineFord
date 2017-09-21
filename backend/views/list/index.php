<?php
use yii\widgets\LinkPager;
$this->title = 'List Boat';
// $this->params['breadcrumbs'][] = $this->title;
$baseUrl = \Yii::getAlias('@web');
?>

<div class="ui grid">
  <div class="four wide column">
    <div class="ui vertical fluid tabular menu">
      <a class="item active">
        Booking
      </a>
      <a href="new" class="item">
        Boat
      </a>
    </div>
  </div>
  <div class="twelve wide stretched column">
    <div class="ui segment">

   	 <div class="panel">
   	 	<div class="panel-heading">

   	 		<form class="input-group" action="" method="get">
   	 			<input type="text" name="search" value="<?php echo $input; ?>" placeholder="Search.." class="form-control pull-right" style="width:200px;">
   	 			<div class="input-group-btn">
   	 				<button class="btn btn-primary btn-sm" type="submit">
   	 					<i class="glyphicon glyphicon-search"></i>
   	 				</button>
   	 			</div>
   	 		</form>
   	 	</div>

   	 	<div class="panel-body">

				<div class="ui three column grid">
				<?php foreach ($result as $var){ ?>
				  <div class="column">
				    <div class="ui fluid link card">
				      <div class="image" style ="height: 250px;">
				        <img src="<?=$var['pic']?> ">
				      </div>

					  <div class="content">
						<div class="header"><?=$var['name']?></div>
						<div class="description">
					  	Boat Type :  <a><?=$var['type']?></a>
						</div>
						<div class="description">
						  Boat id : <?=$var['boat_id']?>
						</div>
						<span>
						  <i class="user icon"></i>
						  Maxseat <?=$var['maxseat']?>
						</span>
						<span class="right floated">
            <?php if (isset($user)): ?>
						  <a class="btn btn-primary" href="<?=$baseUrl."/reser/reserboat?id=".$var['_id']?>" role="button" style="margin-right:5px">Book Now</a>
            <?php else: ?>
              <a class="btn btn-primary" href="<?=$baseUrl."/auth/login"?>" role="button" style="margin-right:5px">Book Now</a>
            <?php endif; ?>
            </span>
					  </div>
					  <!-- <div class="extra content">
						<span class="right floated">
						  <a class="btn btn-primary" href="<?=$baseUrl."/reser/reserboat?id=".$var['_id']?>" role="button" style="margin-right:5px">Book Now</a>

						</span>
						<span>
						  <i class="user icon"></i>
						  Maxseat <?=$var['maxseat']?>
						</span>
					</div> -->

				    </div>


				  </div>
				  <?php }?>


				</div>
   	 		<div class="text-center">
   	 		<?= LinkPager::widget(['pagination' => $pagination]) ?>
   	 		</div>

   	 	</div>
   	 </div>
 </div>
</div>
</div>





<!--
<div class="ui category search">
<div class="ui icon input">
<input class="prompt" type="text"  name="search"  value="<?php echo $input; ?>" placeholder="Search boat...">
<i class="search icon"></i>
</div>
<div class="results"></div>
</div> -->
