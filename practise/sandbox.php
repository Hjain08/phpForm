<?php 
	
	//echo $_SERVER['SERVER_NAME'] . '<br />';
	//echo $_SERVER['REQUEST_METHOD'] . '<br />';
	//echo $_SERVER['SCRIPT_FILENAME'] . '<br />';
	//echo $_SERVER['PHP_SELF'] . '<br />';
	
	//sessions

if(isset($_POST['submit'])){

	session_start();

	$_SESSION['name'] = $_POST['name'];

	//echo $_SESSION['name'];

	header('location: index.php'); 
}

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 	
 	<form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
 		<input type="text" name="name">
 		<input type="submit" name="submit" value="submit">
 	</form>

 </body>
 </html>