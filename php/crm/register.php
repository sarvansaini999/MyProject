<?php
	include 'includes/init.php';
	include 'includes/header.php';
	include 'classes/db.crud.php';
?>

<?php
$error = "";
$msg = "";
$errMsg = "";

$crud = new CRUD();
if(isset($_POST['register'])){
	$uname = $_POST['name'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$c_password = $_POST['c_password'];
 
	if($password != $c_password){
		$errMsg = "Password Miss Match. ";
		$error = true;
	}else{
		$pass =  md5($password);
	}

	if($error != true){
		$crud->create($uname,$email,$pass);
		$msg = "Registration successfully";
	}else{
		$msg = $errMsg . "Please try Again";
	}

}
?>

<div class="login">
	<form class="login-form" method="post">
		<div class="field">
			<input type="text" name="name" placeholder="Username">
		</div>
		<div class="field">
			<input type="text" name="email" placeholder="Email">
		</div>
		
		<div class="field">
			<input type="password" name="password" placeholder="Password">
		</div>
		
		<div class="field">
			<input type="password" name="c_password" placeholder="Confirm Password">
		</div>
		
		<div class="button">
			<input type="submit" name="register" value="Register">
		</div>
		<span><?php echo $msg; ?></span>
	</form>
</div>
<?php
	
	include 'includes/footer.php';
?>