<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="3.css">
    <title>Formularz do dodawania nowych uczniów</title>
</head>
<body>
    <form method="post" action="">
        <p>Imie:</p><input type="text" name="imie"><br>
        <p>Nazwisko:</p><input type="text" name="nazwisko"><br>
        <p>Miejsce zamieszkania:</p><input type="text" name="miejsce_zamieszkania"><br><br>
        <button type="submit">Wyślij</button>
    </form><br>
    <footer>
        <a href="SG.html">Powrót do Strony głuwnej</a>
    </footer>
</body>
</html>
<?php
    $user = "root";
    $host = "localhost";
    $pass = "";
    $db = "praktyki_3_is";
    $con = mysqli_connect($host, $user, $pass, $db);
    if(!$con){
        die("Nie działa połączenie" . mysqli_connect_error());
    }
    $imie = $_POST['imie'];
    $nazwisko = $_POST['nazwisko'];
    $miejsce_zamieszkania = $_POST['miejsce_zamieszkania'];

    $sql = "INSERT INTO uczniowie_2c (imie, nazwisko, miejsce_zamieszkania) VALUES ('$imie', '$nazwisko','$miejsce_zamieszkania')";
    if (mysqli_query($con, $sql)){
        echo "dodany rekord";
    }
    else{
        echo"błąd";
    }
    mysqli_close($con);
?>