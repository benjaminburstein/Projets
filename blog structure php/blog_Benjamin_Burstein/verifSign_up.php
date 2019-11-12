<?php 
	Session_Start();
	session_regenerate_id();
	
	define('HOST', 'localhost');
	define('USER', 'root');
	define('PASSWORD', '');
	define('BDD', 'tp_php');
	define('TABLE', 'user');
	
	try
	{
		$pdo = new PDO("mysql:host=localhost;dbname=tp_php", "root","");
	} 
	catch (PDOException $e)
	{
		print "erreur !! : " . $e->getMessage()  . "<br>";
	}

	$request = "INSERT INTO `user` (`email`,`password`,`lastname`,`firstname`) VALUES (?,?,?,?);";
	$ask = $pdo->prepare($request);
	$ask->execute(array($_POST['email'],$_POST['password'],$_POST['lastname'],$_POST['firstname']));
	$result = $ask->errorInfo();
	if($result[1] == 1062)
	{
	    header('location:sign_up.php?error=true');
	}
	else
	{
	    header('location:login.php');
	}
?>
