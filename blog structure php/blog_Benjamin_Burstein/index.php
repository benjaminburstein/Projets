<?php 
  session_start();
  session_regenerate_id();
  $_SESSION['Connecte'] = 0;
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css" />
    <title>Home</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
      <ul></ul>
      <img class="nav_icon" src="img/sword.png">
      <a style="color: white;" class="nav_menu">My blog, your artwork</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <ul>
      </ul>
      <div id="hello" style="color: white;"><?php echo 'Hello stranger!'; ?></div>
      <div id="nav" class="nav_lien" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a style="color: white;" class="nav_index" href="index.php">Home<span class="sr-only">(current)</span></a>
          </li>
          <ul></ul>
          <li class="nav-item">
            <a style="color: white;" class="nav_sign_up" href="sign_up.php">Sign_up</a>
          </li>
          <ul></ul>
          <li class="nav-item">
            <a style="color: white;" class="nav_login" href="login.php">Login</a>
          </li>
        </ul>
      </div>
    </nav>
    <h1>Article</h1>
    <span  class="border border-dark" >
    
      <?php 
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
      $ask = $pdo->query('SELECT * FROM blog_post ');

      while ($donnees = $ask->fetch())
      {
        ?>
        <p>
        <strong><?php echo 'article'.$donnees['id'].'-TITRE : '?></strong>  <?php echo $donnees['title'].'<br/> '.$donnees['body'].'<br><br><br>'.'<img src="'.$donnees['image_paths'].'">'.'<br><br> date of creation: '.$donnees['date_time_article']; ?><br/><br/>
        <?php
      }

      $ask->closeCursor(); // Termine le traitement de la requête

      ?>

    </span>
  </body>
</html>
