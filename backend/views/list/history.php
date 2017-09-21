<?php
use yii\widgets\LinkPager;
$this->title = 'List Reservation';
//$baseUrl = \Yii::getAlias('@web');
?>

<div class="panel">
   	 	<div class="panel-heading">
   	 		<div class="row">
			  <div class="col-md-6"><h1>List Reservation history</h1></div>
			  <div class="col-md-6">
			  	<form class="input-group" action="" method="get">
			  	<input type="text" name="search" value="<?php echo $input?>"
   	 			placeholder="Search.." class="form-control pull-right" style="width:200px;">
    	 			<div class="input-group-btn">
    	 				<button class="btn btn-primary btn-sm" type="submit">
    	 					<i class="glyphicon glyphicon-search"></i>
   	 				</button>
    	 			</div>
    	 		</form>
			  </div>
			</div>
   	 	</div>
</div>

<div class="ui two column grid">

	<?php foreach ($result['bill'] as $var){ ?>

 		<div class="column">
 			<div class="ui items">
  				<div class="item">
	    			<div style="width:200px;">
	     				<img class="ui small circular image" src="https://www.w3schools.com/w3css/img_avatar3.png">
	    			</div>
    				<div class="content">
      					<a class="header">Bill</a>
      					<div class="meta">
      						<div class="description">Boat ID : <a><?=$var['idboat']?></a></div><br>
                  <div class="description">Destination : <a><?=$var['destination']?></a></div><br>
      						<div class="description">Rentdate : <a><?=$var['rentdate']?></a></div>
      					</div>
      					<div class="extra content">
      						<div class="ui buttons">
       							<div class="ui basic red button" href="">ยกเลิกการจอง</div>
      						</div>
    					</div>
    				</div>
  				</div>
			</div>
		</div>
	<?php } ?>
</div>
