<?php
$baseUrl=\Yii::getAlias('@web');
 ?>

 <div class="container h-100 d-flex justify-content-center">       
       <form class="ui form" role="form" method="post" action="<?=$baseUrl."/auth/loginaction"?>">
       		<div class="container" style="width:550px;padding-top:45px;">
	       		<h2>Login</h2>
	       		<hr>
	  			<div class="field">
	    			<label>E-mail</label>
	    			<input type="email" name="email" id="email" placeholder="you@example.com" required autofocus>
	  			</div>
	  			<div class="field">
	    			<label>Password</label>
	    			<input type="password" name="password" id="password" placeholder="Password" required>
	  			</div>
	  			<button class="btn btn-success" type="submit"><i class="fa fa-sign-in"></i> Login</button>
	             <a href="<?= $baseUrl."/auth/register"?>"><button type="button" class="btn btn-link">Register</button></a>
            </div>
		</form>
 </div>
