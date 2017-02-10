<?php

require_once 'core/init.php';

$user = new User();

if(!$user->isLoggedIn()) {
    Redirect::to('index.php');
}

?>

<html>
	<head>
		<title>My Budget</title>
		<script src="jquery.min.js"></script>
	</head>
	<body>
	<?php echo 'Login as ' . escape($user->data()->name); ?>
	
	<p>How much my pocket money?<p>
	
	<div class="add-money">
		<div class="">
			<input type="text" name="add_pocket_money" id="add_pocket_money" placeholder="Add Pocket Money in Rupees" size="50">
			<input type="hidden" name="user_id" id="user_id" value="<?php echo escape($user->data()->id); ?>" size="50">
			<br>
			<input type="button" id="add_money_btn"  value="Add">
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
				data: { 'apm': apm,'u_id':u_id},
				success: function(data){
					$('#msg').show().html(data);
					$('#add_pocket_money').val('');
				}
			});
		});
	});
	</script>
	</body>
</html>