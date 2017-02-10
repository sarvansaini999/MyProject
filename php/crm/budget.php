<?php
session_start();
	include 'includes/init.php';
	include 'includes/header.php';
	include 'classes/db.crud.php';
	$crud = new CRUD();
?>

<html>
	<head>
		<title>My Budget</title>
		<script src="jquery.min.js"></script>
	</head>
	<body>
	<?php echo 'Login as ' . $_SESSION['uname']; ?>
	<?php $user_id = $_SESSION['uid']; ?>
	
	<p>How much my pocket money?<p>
	<?php echo "Rupees" . $t = $crud->get_last_row($user_id); ?>
	<div class="add-money" style="width: 50%;float:left">
		<div class="">
			<input type="text" name="add_pocket_money" id="add_pocket_money" placeholder="Add Pocket Money in Rupees" size="50">
			<input type="hidden" name="user_id" id="user_id" value="<?php echo $_SESSION['uid'] ?>" size="50">
			<br>
			<input type="button" id="add_money_btn"  value="Add">
			<span id="msg"></span>
		</div>
	</div>
	
	<div class="add-money" style="width: 50%;float:right">
		<div class="">
			<input type="text" name="sub_pocket_money" id="sub_pocket_money" placeholder="Expensive Money" size="50">
			<input type="hidden" name="user_id" id="user_id" value="<?php echo $_SESSION['uid'] ?>" size="50">
			<br>
			<input type="button" id="sub_money_btn"  value="Add">
			<span id="msg"></span>
		</div>
	</div>
	<script>
	$(document).ready(function(){
		$('#add_money_btn').click(function(){
			var apm = $('#add_pocket_money').val();
			var u_id = $('#user_id').val();
			$.ajax({
				url: 'budget-query.php',
				type: 'POST',
				data: { 'is_ajax': 'added', 'apm': apm,'u_id':u_id},
				success: function(data){
					$('#msg').show().html(data);
					$('#add_pocket_money').val('');
				}
			});
		});
		
		$('#sub_money_btn').click(function(){
			var spm = $('#sub_pocket_money').val();
			var u_id = $('#user_id').val();
			$.ajax({
				url: 'budget-query.php',
				type: 'POST',
				data: { 'is_ajax': 'sub', 'spm': spm,'u_id':u_id},
				success: function(data){
					$('#msg2').show().html(data);
					$('#sub_pocket_money').val('');
				}
			});
		});
	});
	</script>
	</body>
</html>