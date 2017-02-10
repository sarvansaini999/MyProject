<?php
session_start();
	include 'includes/init.php';
	include 'includes/header.php';
	include 'classes/db.crud.php';
	
	if(isset($_SESSION['uname'])){
		header('Location: welcome.php');
	}
	
?>

<?php
$error = "";
$msg = "";
$errMsg = "";

$crud = new CRUD();
if(isset($_POST['login'])){
	$email = $_POST['email'];
	$password = $_POST['password'];
	
	if($password != ""){
		$pass =  md5($password);
	}else{
		$errMsg = "Please enter a password";
	}	

	
	$crud->login($email,$pass);
	
}
?>

<div class="login">
	<form class="login-form" method="post">
		<div class="field">
			<input type="text" name="email" placeholder="Email">
		</div>
		<div class="field">
			<input type="password" name="password" placeholder="Password">
		</div>
		
		<div class="button">
			<input type="submit" name="login" value="Login">
		</div>
	</form>
</div>
<?php
	
	include 'includes/footer.php';
?>