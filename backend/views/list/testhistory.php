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
	<?php foreach ($result as $var){ ?>
 		<div class="column">
 			<div class="ui items">
  				<div class="item">
	    			<div class="image">
	     				<img src="https://www.w3schools.com/w3css/img_avatar3.png">
	    			</div>
    				<div class="content">
      					<a class="header">Bill</a>
      					<div class="meta">
      						<?php $bill = $var->bill?>
      						<?php foreach ($bill as $var){ ?>
        						<div class="description">Boat ID : <p><?=$var['idboat']?></p></div>
        						<div class="description">Rentdate : <a><?=$var['rentdate']?></a></div>	
							<?php }?>
      					</div>
      					<div class="extra content">
      						<div class="ui two buttons">
       							<div class="ui basic green button" href="">Edit</div>
       							<div class="ui basic red button" href="">Delete</div>
      						</div>
    					</div>
    				</div>
  				</div>
			</div>
		</div>
	<?php } ?>
</div>