<!DOCTYPE html>
<html lang="nl">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Webcepten</title>
  <link href="style.css" rel="stylesheet" type="text/css" />
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
            <a href="index.php">Home</a>
            <a href="../Post/Post.php">Post</a>
            <a href="../Recepten/Recepten.php">Recepten</a>
        </div>

        <a href="../Login/Login.php" class="icon"><img src="../Images/LoginIcon.png" alt="Inlog"></a>
    </nav>


    <!--De kop-->
    <header>
      <h1>De lekkerste recepten</h1>
      <h2> Uit eigen keuken</h2>
    </header>

    <div class="Container">



    </div>
      <h2 class= rc>
         Recente recepten
     </h2>  

     <?php require_once 'connect.php';

// Voer hier je query's uit of voer andere databasebewerkingen uit
     // Query om gegevens op te halen uit de 'gebruiker'-tabel
$sql = "SELECT * FROM gebruiker";
$result = $conn->query($sql);

// Controleer of er resultaten zijn
if ($result->num_rows > 0) {
    // Resultaten in een HTML-tabel weergeven
    echo "<table border='1'>";
    echo "<tr><th>id</th><th>Email</th><th>Wachtwoord</th></tr>";

    // Output data van elke rij
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["gebruiker_id"]."</td><td>".$row["Email"]."</td><td>".$row["Wachtwoord"]."</td></tr>";
    }

    echo "</table>";
} else {
    echo "Geen resultaten gevonden";
}?>

    <div class="footer">
      <footer>
        <ul>
          <li>
          <p>
                <span style="color:#ce2b37">Web</span><span style="color:#ffffff">cep</span><span style="color:#009246">tie</span>
            </p>
          </li>
          <li><a href="../Footer/Contact.php">Contact</a></li>
          <li><a href="../Footer/Voorwaarden.php">Algemene voorwaarden</a </li>
        </ul>
      </footer>
    </div>
  </div>
</body>

</html>