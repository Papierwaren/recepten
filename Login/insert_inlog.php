<?php
require_once '../connect.php';

if(isset($_POST['login'])){
    $email = $_POST['mail'];
    $wachtwoord = $_POST['ww'];

    $sql = "SELECT * FROM gebruiker WHERE Email = '$email' AND Wachtwoord = '$wachtwoord'";
    $resultaat = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($resultaat);

    if($count == 1){
        header("Location: ../index.php");
        exit();
    } else {
        echo '<script>
                alert("Login mislukt. Incorrecte email of wachtwoord.");
                window.location.href = "login.php";
              </script>';
        exit();
    }
}
?>