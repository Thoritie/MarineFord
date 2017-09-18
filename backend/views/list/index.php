<?php
use yii\widgets\LinkPager;
$this->title = 'List Boat';
// $this->params['breadcrumbs'][] = $this->title;
$baseUrl = \Yii::getAlias('@web');
?>
<div class="panel panel-default">
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
		<div class="ui centered">

		<div class="ui link cards" style="margin-left:15px;">

		<?php foreach ($result as $var){ ?>
		  <div class="card">
		    <div class="image">
		      <img src="https://www.w3schools.com/w3css/img_avatar3.png">
		    </div>
		    <div class="content">
		      <div class="header"><?=$var['name']?></div>
		      <div class="meta">
		        <a><?=$var['type']?></a>
		      </div>
		      <div class="description">
				Boat id : <?=$var['boat_id']?>
		        Matthew is an interior designer living in New York.

		      </div>
		    </div>
		    <div class="extra content">
		      <span class="right floated">
				<a class="btn btn-primary" href="<?=$baseUrl."/reser/reserboat?id=".$var['_id']?>" role="button" style="margin-right:5px">Book Now</a>

		      </span>
		      <span>
		        <i class="user icon"></i>
		        Maxseat <?=$var['maxseat']?>
		      </span>
		    </div>
		  </div>
		  <?php }?>
		  <br><br>
		</div>
		<div class="test-center">
		<?= LinkPager::widget(['pagination' => $pagination]) ?>
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
