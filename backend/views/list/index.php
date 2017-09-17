<?php
use yii\widgets\LinkPager;
$this->title = 'List Boat';
$this->params['breadcrumbs'][] = $this->title;
$baseUrl = \Yii::getAlias('@web');
?>

<div class="container">
	<div class="panel panel-default">
		<div class="panel-heading">
			<h4 class="pull-left">Boat List</h4>
			<form class="input-group" action="" method="get">
				<input type="text" name="search" value="<?php echo $input; ?>" placeholder="Search.." class="form-control pull-right" style="width:200px;">
				<div class="input-group-btn">
					<button class="btn btn-primary btn-sm" type="submit">
						<i class="glyphicon glyphicon-search"></i>
					</button>
				</div>
			</form>
		</div>
		<div class="panel panel-body">
			<?php foreach ($result as $var){ ?>
			  <div class="col-sm-6 col-md-4">
			    <div class="thumbnail" >
			      <img class="img-responsive img-thumbnail" src="" alt=" " style="width:250px;height:250px";>
			      <div class="caption">
			        <h3 class="card-title">name :<?=$var['name']?></h3>
			          <p class="card-text">type :<?=$var['type']?></p>
			          <p class="card-text">max of seat :<?=$var['maxseat']?></p>
			        <button class="btn btn-primary" role="button" href="<?=$baseUrl."/reser/index" ?>">book</button>
			      </div>
			    </div>
			  </div>
			<?php }?>
		</div>
		<div class="text-center">
			<?= LinkPager::widget(['pagination' => $pagination]) ?>
		</div><br><br>
	</div>
</div>
