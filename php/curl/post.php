
<html>
	<head>
		
	</head>
	<body>
		<div style="border: 1px solid #e2e2e2;">
			<form action="post.php" />
				<p><label>Name:<input type="text" name="name" /></label></p>
				<p><label>Age:<input type="text" name="age" /></label></p>
				<p><label>Location:<input type="text" name="location" /></label></p>
				<input type="submit" name="submit" value="Submit" />
			</form>
		</div>
	</body>
</html>

<?php

if(isset($_POST['submit']))
{
 echo '<br />Form sent!'.$_POST['nabc'];
}
?>