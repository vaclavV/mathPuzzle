<?php

    require './connect2.php';
    
$sql = "INSERT INTO hraTest (jmenoHry, obrazek, priklad1, priklad2, priklad3, priklad4, priklad5, priklad6, priklad7, priklad8, priklad9, priklad10, priklad11, priklad12, priklad13, priklad14, priklad15, vysledek1, vysledek2, vysledek3, vysledek4, vysledek5, vysledek6, vysledek7, vysledek8, vysledek9, vysledek10, vysledek11, vysledek12, vysledek13, vysledek14, vysledek15)
VALUES ('$_POST[jmenoHry]', '$_POST[obrazek]', '$_POST[priklad1]', '$_POST[priklad2]', '$_POST[priklad3]', '$_POST[priklad4]', '$_POST[priklad5]', '$_POST[priklad6]', '$_POST[priklad7]', '$_POST[priklad8]', '$_POST[priklad9]', '$_POST[priklad10]', '$_POST[priklad11]', '$_POST[priklad12]', '$_POST[priklad13]', '$_POST[priklad14]', '$_POST[priklad15]', '$_POST[vysledek1]', '$_POST[vysledek2]', '$_POST[vysledek3]', '$_POST[vysledek4]', '$_POST[vysledek5]', '$_POST[vysledek6]', '$_POST[vysledek7]', '$_POST[vysledek8]', '$_POST[vysledek9]', '$_POST[vysledek10]', '$_POST[vysledek11]', '$_POST[vysledek12]', '$_POST[vysledek13]', '$_POST[vysledek14]', '$_POST[vysledek15]')";

if ($conn->query($sql) === TRUE) {
    echo "nahrano";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();    




