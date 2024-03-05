<?php
// Inclusief de databaseverbinding
require_once '../connect.php';
?>

<!DOCTYPE html>
<html lang="nl">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Webceptie - Recepten</title>
  <link href="Recepten.css" rel="stylesheet" type="text/css" />
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
        <a href="Recepten.php">Recepten</a>
      </div>

      <a href="../Login/Login.php" class="icon"><img src="../Images/LoginIcon.png" alt="Inlog"></a>
    </nav>

    <div class="Container">
      <!--De kop-->
      <header>
        <h1>Recepten</h1>
      </header>

      <?php
      // Query om recepten op te halen met JOIN-operatie
      $sql = "SELECT recept.naam, soort.Gerecht, recept.beschrijving, recept.ingredienten, 
              recept.bereiding, recept.tijd, recept.aantal_pers 
              FROM recept 
              INNER JOIN soort ON recept.soort_id = soort.soort_id";

      $resultaat = $conn->query($sql);

      // Controleer of er resultaten zijn
      if ($resultaat) {
        // Loop door de resultaten en toon de gegevens
        while ($row = $resultaat->fetch_assoc()) {
          echo '<div class="recept">';
          echo '<h2>' . $row['naam'] . '</h2>';
          echo '<p>Beschrijving: ' . $row['beschrijving'] . '</p>';
          echo '<p>Soort: ' . $row['Gerecht'] . '</p>';
          echo '<p class="extra-info">Ingredienten: ' . $row['ingredienten'] . '</p>';
          echo '<p class="extra-info">Bereiding: ' . $row['bereiding'] . '</p>';
          echo '<p class="extra-info">Tijd: ' . $row['tijd'] . '</p>';
          echo '<p class="extra-info">Aantal personen: ' . $row['aantal_pers'] . '</p>';
          echo '</div>';
        }
      } else {
        echo "Fout bij het ophalen van recepten: " . $conn->error;
      }
      ?>
    </div>

    <!--De balk aan de onderkant van het scherm-->
    <div class="footer">
    <footer><ul>
          <li>
            <p>
              <span style="color:#ce2b37">Web</span><span style="color:#ffffff">cep</span><span style="color:#009246">tie</span>
            </p>
          </li>
          <li><a href="../Footer/Contact.php">Contact</a></li>
          <li><a href="../Footer/Voorwaarden.php">Algemene voorwaarden</a></li>
        </ul></footer>
    </div>
  </div>
</body>

</html>