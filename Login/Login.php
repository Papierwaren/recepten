<!DOCTYPE html>
<html lang="nl">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Webcepten - Login</title>
  <link href="Login.css" rel="stylesheet" type="text/css" />

</head>

<body>
  <!--Het object dat alles omvat-->
  <div id="wrapper">

    <!--De navigatie balk-->
    <nav>
        <div class="logo">
            <img src="../Images/NoordlesIcon.png" alt="Het Logo">
        </div>

        <div class="navigation">
          <a href="../index.php">Home</a>
          <a href="../Post/Post.php">Post</a>
          <a href="../Recepten/Recepten.php">Recepten</a>
        </div>

        <a href="Login.php" class="icon"><img src="../Images/LoginIcon.png" alt="Inlog"></a>
    </nav>

    <div class="Container">
      <h1>Inloggen bij Webceptie</h1>

      <form action="insert_inlog.php" method='post' >
        <label for="Email">Emailadres:</label><br>
        <input type="text" id="Email" name="Email"><br>
        <label for="Wwoord">Wachtwoord:</label><br>
        <input type="text" id="Wwoord" name="Wwoord"><br>
        <input type="submit" value="Log in">
      </form>
   
    </div>
    <div class="footer">
      <footer>
        <ul>
          <li>
            <p></p><span style="color:#009246">Web</span>
            <span style="color:#ffffff">cep</span>
            <span style="color:#ce2b37">tie</span></p>
          </li>
          <li><a href="index.php">Contact</a></li>
          <li><a href="index.php">Algemene voorwaarden</a </li>
        </ul>
      </footer>
    </div>
  </div>
</body>

<?php
        require_once '../connect.php';
      ?>


</html>