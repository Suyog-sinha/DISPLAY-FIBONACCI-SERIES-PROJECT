<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="header">
	<h2>ENTER FIBONACCI NUMBER </h2>
</div>
</html>


<?php
function Fibonacci($number){ 
      if ($number == 0) 
        return 0;     
    else if ($number == 1) 
        return 1;     
      
    else
        return (Fibonacci($number-1) +  
                Fibonacci($number-2)); 
} 
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Code 4 Example - PHP Examples</title>
<header>

 
<body>
<form action="" method="post">
	Number:<input type="text" name="number" value="<?=$_POST['number']??''?>"><br>
	<input type="submit" name="print" value="Print Fibonacci Numbers">
</form>	
<?php   
 
if(isset($_POST["print"]))
{
	$number = $_POST["number"]; 
	for ($counter = 0; $counter < $number; $counter++){  
		echo'<center>'.Fibonacci($counter). '<center>'; 
	} 	
}
?>
</body>
</html>


	

<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
    	<p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
    <?php endif ?>
</div>

</body>
</html>