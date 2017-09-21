<?php
use yii\widgets\LinkPager;
$this->title = 'List Reservation';
//$baseUrl = \Yii::getAlias('@web');
?>

<div class="panel">
   	 	<div class="panel-heading">
   	 		<form class="input-group" action="" method="get">
   	 			<input type="text" name="search" value="<?php echo $input ?>" 
   	 			placeholder="Search.." class="form-control pull-right" style="width:200px;">
   	 			<div class="input-group-btn">
   	 				<button class="btn btn-primary btn-sm" type="submit">
   	 					<i class="glyphicon glyphicon-search"></i>
   	 				</button>
   	 			</div>
   	 		</form>
   	 	</div>
</div>
 
	
<div class="ui one column grid">
	<?php foreach ($result as $var){ ?> 
		  <div class="column">
		    <div class="ui fluid card">
		      <div class="image">
		        <img src="">
		      </div>
		      <div class="content">
		        <div class="header">Customer ID :</div>
		        <div class="description">Name : <a><?=$var['cusname']?></a></div>
		        <div class="description">Last Name : <a><?=$var['cussirname']?></a></div>
		      </div>
		    </div>
		  </div>
	<?php }?>
</div>
	