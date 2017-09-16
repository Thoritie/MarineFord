<?php
use backend\models\Boat;
$this->title = 'List Boat';
$this->params['breadcrumbs'][] = $this->title;

$baseUrl = \Yii::getAlias('@web');
?>

<div class="container">
	<h1>List Boat</h1>
	<div class="row" align="right">
		<div class="col-lg-4" >
		    <div class="input-group" >
			   <input type="text" class="form-control" placeholder="Search for...">
			   <span class="input-group-btn">
			   <button class="btn btn-info" type="button" value=" ">Go!</button></span>
		    </div>
	  	</div>
	</div>
	<br>
	<?php foreach ($result as $var){ ?>
		<div class="col-sm-6 col-md-4">	
			<div class="thumbnail" >
				<img class="img-responsive img-thumbnail" src=""
                     alt=" " style="width:250px;height:250px";>
                <div class="caption">
                	<h3 class="card-title">name :<?=$var['name']?></h3>
					<p class="card-text">type :<?=$var['type']?></p>
					<p class="card-text">max of seat :<?=$var['maxseat']?></p>
					<button class="btn btn-primary" role="button"
					href="<?=$baseUrl."/lecturer/save?id=".$var['_id']?>">book</button>
                </div>
				
				<br><br>
			</div>	
		</div>

	<?php }?>
</div>

