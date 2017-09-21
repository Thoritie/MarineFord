<?php
use yii\widgets\LinkPager;
$baseUrl=\Yii::getAlias('@web');
 ?>
 <!DOCTYPE html>
 <html>

 <head>
   <meta charset="utf-8">
   <title>Register</title>
 </head>

<body>
	<div class="container" style="width:850px;padding-top:15px;">
		<form class="ui form" action="<?=$baseUrl."/auth/registersave"?>">
	  		<h2>Create Account</h2>
	  		<hr>
	  		<div class="container" style="width:550px;">
	  		<div class="field">
	    		<label>Name</label>
	      			<div class="field" style="width:450px;">
	        			<input type="text" name="cusname" placeholder="First Name - Last Name">
	     			</div>
	  		</div>
	      	<div class="field" style="width:450px;">
	      		<label>Email</label>
	        	<input type="email" name="email" placeholder="Frist.Name@example.com">
	      	</div>
	      	<div class="field" style="width:450px;">
	      		<label>Phone</label>
	        	<input type="text" name="phone" placeholder="088-888-888-8">
	      	</div>
	      	<div class="field" style="width:450px;">
	      		<label>Password</label>
	        	<input type="password" name="password" placeholder="6-8 Charecter">
	      	</div>
	      	<div class="field" style="width:450px;">
	      		<label>Address</label>
	        	<textarea class="form-control" name="address" placeholder="กรอกข้อมูลที่อยู่โดยละเอียดน่ะค่ะ" rows="3"></textarea>
	      	</div>
	  		<button class="btn btn-primary" type="submit">Submit</button>
	  		</div>
		</form>
	</div>
</body>
</html>
