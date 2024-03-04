<?php
require_once '../connect.php';

// Controleer of het formulier is ingediend
if(isset($_POST['submit'])){
    // Ontvang de ingevulde gegevens
    $naam = $_POST['naam'];
    $soort_id = $_POST['soort_id'];
    $beschrijving = $_POST['beschrijving'];
    $ingredienten = $_POST['ingredienten'];
    $bereiding = $_POST['bereiding'];
    $bereidingstijd = $_POST['bereidingstijd'];
    $aantal_personen = $_POST['aantal_personen'];

    // Voeg de gegevens toe aan de database
    $sql = "INSERT INTO recept (Naam, soort_id, Beschrijving, Ingredienten, Bereiding, Tijd, Aantal_pers) VALUES ('$naam', '$soort_id', '$beschrijving', '$ingredienten', '$bereiding', '$bereidingstijd', '$aantal_personen')";

    if (mysqli_query($conn, $sql)) {
      echo "<script>alert('Recept succesvol toegevoegd!');</script>";
  } else {
      echo "<script>alert('Fout bij het toevoegen van het recept: " . mysqli_error($conn) . "');</script>";
  }
}
?>

<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Webcepten - Plaats een recept</title>
    <link href="Post.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <!-- Het object dat alles omvat -->
    <div id="wrapper">
        <!-- De navigatie balk -->
        <nav>
        <div class="logo">
            <img src="../Images/NoordlesIcon.png" alt="Het Logo">
        </div>

        <div class="navigation">
          <a href="../index.php">Home</a>
          <a href="Post.php">Post</a>
          <a href="../Recepten/Recepten.php">Recepten</a>
        </div>

        <a href="../Login/Login.php" class="icon"><img src="../Images/LoginIcon.png" alt="Inlog"></a>
        </nav>

        <div class="Container">
            <h1>Plaats een recept</h1>

            <!-- Het formulier voor het plaatsen van een recept -->
            <form action="post.php" method="post">
        <label>Naam van het gerecht</label><br>
        <input type="text" name="naam" required><br><br>

        <label>Soort gerecht</label><br>
        <select name="soort_id" required>
            <option value="1">Ontbijt</option>
            <option value="2">Lunch</option>
            <option value="3">Diner</option>
            <option value="4">Dessert</option>
            <option value="5">Snack</option>
            <option value="6">Overige</option>
        </select><br><br>

        <label>Beschrijving</label><br>
        <input type="text" name="beschrijving" maxlength="100"><br><br>

        <label>Ingrediënten</label><br>
        <textarea name="ingredienten" rows="4" required></textarea><br><br>

        <label>Bereiding</label><br>
        <textarea name="bereiding" rows="4" required></textarea><br><br>

        <label>Bereidingstijd (in minuten):</label><br>
        <input type="number" name="bereidingstijd" required><br><br>

        <label>Aantal personen</label><br>
        <input type="number" name="aantal_personen" required><br><br>

        <input type="submit" name="submit" value="Plaats recept" class="submit-button"><br>
    </form>

        </div>

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