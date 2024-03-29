<?php require_once '../connect.php';?>

<!DOCTYPE html>
<html lang="nl">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Webceptie - Login</title>
  <link rel="icon" href="../Images/WebceptieLogo.png">
  <link href="Login.css" rel="stylesheet" type="text/css" />
</head>

<body>
  <!--Het object dat alles omvat-->
  <div id="wrapper">
    <!--De navigatie balk-->
    <nav>
        <div class="logo">
            <img src="../Images/WebceptieLogo.png" alt="Het Logo">
        </div>

        <div class="navigation">
          <a href="../index.php">Home</a>
          <a href="../Post/Post.php">Post</a>
          <a href="../Recepten/Recepten.php">Recepten</a>
        </div>

        <a href="Login.php" class="icon"><img src="../Images/LoginIcon.png" alt="Inlog"></a>    </nav>

    <div class="Container">
      <h1>Inloggen bij Webceptie</h1>

      <form action="insert_inlog.php" method='post'>
        <label>Emailadres:</label><br>
        <input type="text" id="mail" name="mail"><br>
        <label>Wachtwoord:</label><br>
        <input type="password" id="ww" name="ww"><br>
        <input type="submit" name="login" value="Log in">
      </form>
   
    </div>
    <div class="footer">
    <footer>
        <ul>
          <li><p><span style="color:#ce2b37">Web</span><span style="color:#ffffff">cep</span><span style="color:#009246">tie</span></p></li>
          <li><a href="../Footer/Contact.php">Contact</a></li>
          <li><a href="../Footer/Voorwaarden.php">Algemene voorwaarden</a </li>
        </ul>
      </footer>
    </div>
  </div>
</body>

</html>
