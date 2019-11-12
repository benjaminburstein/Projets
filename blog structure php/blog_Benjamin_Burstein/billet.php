<?php 
  session_start();
  session_regenerate_id();
  $text; // le texte stocké dans la variable $text
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="billet.css">
    <title>Create a billet</title>
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
      <div id="hello" style="color: white;">hello world</div>
      <div id="nav" class="nav_lien" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a style="color: white;" class="nav_index" href="home.php">Home<span class="sr-only">(current)</span></a>
          </li>
          <ul></ul>
          <li class="nav-item">
            <a   style="color: white;" class="nav_sign_up" href="billet.php">Create a Post</a>
          </li>
          <ul></ul>
          <li class="nav-item">
            <a style="color: white;" class="nav_login" href="index.php">Disconnect</a>
          </li>
        </ul>
      </div>
    </nav>
    <h1>Create your article</h1>
    <form action="verifBillet.php" method="post" enctype="multipart/form-data" id="form">
      <div class="form-group">
        <label for="input"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><strong>Title</strong> </font></font></label>
        <input name="title" type="text" id="input" placeholder="Enter title">
      </div>
      <div class="form-group">
        <label for="exampleFormControlTextarea1"><strong>Body</strong></label>
        <textarea name="body" class="form-control" id="textarea" rows="14" placeholder="Write here your artwork"></textarea>
      </div>
      <div class="form-group">
        <input name="img" type="file" class="form-control-file" id="file">
        <label id="img" for="exampleFormControlFile1">Choose  a picture (not more 2Mo, files type: JPG/PNG/JPEG/GIF)</label>
      </div>
      <button id="check" type="submit" class="btn btn-primary">Upload your artwork</button>
    </form>
  </body>
</html>
<?php
  if(isset($_GET['err']) && $_GET['err'])
  {
    echo "<h2 style='color: red;'>titre déjà utilisé</h2>";
  }
  if(isset($_GET['error']) && $_GET['error'] )
  {
    echo "<h2 style='color: red;'>veuiller remplir les champs titre et article!</h2>" ;
  }
?>