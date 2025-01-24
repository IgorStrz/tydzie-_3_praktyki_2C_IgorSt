<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="2.css">
    <title></title>
</head>
<body>
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
$sql= "SELECT * FROM uczniowie_2c";
$res = mysqli_query($con, $sql);
if(mysqli_num_rows($res) >0){
    while($blok = mysqli_fetch_assoc($res)){
        echo "<div id='imie'>Imię: " . $blok['Imie'] . "</div>".
        "<div id='nazwisko'> Nazwisko: " . $blok['Nazwisko'] . "</div>".
        "<div id='ocena'> Ocena: " . $blok['Oceny'] . "</div>".
        "<div id='MZ'> Miejsce zamieszkania: " . $blok['miejsce_zamieszkania'] . "</div><br>";
    }
}
else{
    echo"błąd";
}
mysqli_close($con);
?>