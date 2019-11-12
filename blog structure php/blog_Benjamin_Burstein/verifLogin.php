<?php 
    session_start();
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

    $mail = $_POST['email'];
    $pass = $_POST['password'];

    $request = "SELECT * FROM ".TABLE." WHERE email='".$mail."' AND password='".$pass."'";
    $ask = $pdo->query($request);
    $result = $ask->fetch();

    if ($result['email']!= $mail AND $result['password'] != $pass)
    {
        $_SESSION['error'] = 'Login ou MDP faux';
        $_SESSION['Connecte'] = 0;
        header('location:login.php?error=true');
    }
    else
    {
        $_SESSION['Connecte'] = 1;
        $_SESSION['name'] = $result['firstname'];
        header('location:home.php');
    }
?> 
