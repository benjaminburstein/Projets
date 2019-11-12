<?php 
    session_start();
    session_regenerate_id();
    define('HOST', 'localhost');
    define('USER', 'root');
    define('PASSWORD', '');
    define('BDD', 'tp_php');
    define('TABLE', 'blog_post');
    try
    {
        $pdo = new PDO("mysql:host=localhost;dbname=tp_php", "root","");
    }
    catch (PDOException $e)
    {
        print "erreur !! : " . $e->getMessage() . "<br>";
    }

    if (isset($_FILES['img']) AND $_FILES['img']['error'] == 0)
    {
            // Testons si le fichier n'est pas trop gros
        if ($_FILES['img']['size'] <= 2097152)
        {
                    // Testons si l'extension est autorisée
            $infosfichier = pathinfo($_FILES['img']['name']);
            $extension_upload = $infosfichier['extension'];
            $extensions_autorisees = array('jpg', 'jpeg', 'gif', 'png');
                  
            if (in_array($extension_upload, $extensions_autorisees))
            {
                    
                move_uploaded_file($_FILES['img']['tmp_name'], 'img/'.$infosfichier['basename']); // On peut valider le fichier et le stocker définitivement
            }
        }
    } 

    $title = $_POST['title'];
    $body = $_POST['body'];
    $path = 'img/'.pathinfo($_FILES['img']['name'])['basename'];

    if($_POST['title'] == '' || $_POST['body'] == '') // on vérifie si 'title" et 'body' sont vides, si c'est le cas on retourne la page de création de billet avec une erreur 'error'. 
    {
        header('location:billet.php?error=true');
    }
    else
    {
        $request = "INSERT INTO `blog_post` (`title`,`body`,`image_paths`,`date_time_article`) VALUES (?,?,?,now());";
        $ask = $pdo->prepare($request);
        $ask->execute(array($title,$body,$path));
        $err = $ask->errorInfo();
        if($err[1] == 1062)
        {
            header('location:billet.php?err=true');
        }
        else
        {
            header('location:home.php');
        }
    }
?>

 