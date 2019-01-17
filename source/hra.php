<?php
require './connect3.php';
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Connected successfully"; 

    $stmt = $conn->prepare("INSERT INTO hraTest (jmenoHry, obrazek, priklad1, priklad2, priklad3, priklad4, priklad5, priklad6, priklad7, priklad8, priklad9, priklad10, priklad11, priklad12, priklad13, priklad14, priklad15, vysledek1, vysledek2, vysledek3, vysledek4, vysledek5, vysledek6, vysledek7, vysledek8, vysledek9, vysledek10, vysledek11, vysledek12, vysledek13, vysledek14, vysledek15) 
    VALUES (:jmenoHry, :obrazek, :priklad1, :priklad2, :priklad3, :priklad4, :priklad5, :priklad6, :priklad7, :priklad8, :priklad9, :priklad10, :priklad11, :priklad12, :priklad13, :priklad14, :priklad15, :vysledek1, :vysledek2, :vysledek3, :vysledek4, :vysledek5, :vysledek6, :vysledek7, :vysledek8, :vysledek9, :vysledek10, :vysledek11, :vysledek12, :vysledek13, :vysledek14, :vysledek15)");
    $stmt->bindParam(':jmenoHry', $jmenoHry);
    $stmt->bindParam(':obrazek', $obrazek);
    $stmt->bindParam(':priklad1', $priklad1);
    $stmt->bindParam(':priklad2', $priklad2);
    $stmt->bindParam(':priklad3', $priklad3);
    $stmt->bindParam(':priklad4', $priklad4);
    $stmt->bindParam(':priklad5', $priklad5);
    $stmt->bindParam(':priklad6', $priklad6);
    $stmt->bindParam(':priklad7', $priklad7);
    $stmt->bindParam(':priklad8', $priklad8);
    $stmt->bindParam(':priklad9', $priklad9);
    $stmt->bindParam(':priklad10', $priklad10);
    $stmt->bindParam(':priklad11', $priklad11);
    $stmt->bindParam(':priklad12', $priklad12);
    $stmt->bindParam(':priklad13', $priklad13);
    $stmt->bindParam(':priklad14', $priklad14);
    $stmt->bindParam(':priklad15', $priklad15);
    $stmt->bindParam(':vysledek1', $vysledek1);
    $stmt->bindParam(':vysledek2', $vysledek2);
    $stmt->bindParam(':vysledek3', $vysledek3);
    $stmt->bindParam(':vysledek4', $vysledek4);
    $stmt->bindParam(':vysledek5', $vysledek5);
    $stmt->bindParam(':vysledek6', $vysledek6);
    $stmt->bindParam(':vysledek7', $vysledek7);
    $stmt->bindParam(':vysledek8', $vysledek8);
    $stmt->bindParam(':vysledek9', $vysledek9);
    $stmt->bindParam(':vysledek10', $vysledek10);
    $stmt->bindParam(':vysledek11', $vysledek11);
    $stmt->bindParam(':vysledek12', $vysledek12);
    $stmt->bindParam(':vysledek13', $vysledek13);
    $stmt->bindParam(':vysledek14', $vysledek14);
    $stmt->bindParam(':vysledek15', $vysledek15);


    $jmenoHry = $_POST[jmenoHry];
    $obrazek = $_POST[obrazek];
    $priklad1 = $_POST[priklad1];
    $priklad2 = $_POST[priklad2];
    $priklad3 = $_POST[priklad3];
    $priklad4 = $_POST[priklad4];
    $priklad5 = $_POST[priklad5];
    $priklad6 = $_POST[priklad6];
    $priklad7 = $_POST[priklad7];
    $priklad8 = $_POST[priklad8];
    $priklad9 = $_POST[priklad9];
    $priklad10 = $_POST[priklad10];
    $priklad11 = $_POST[priklad11];
    $priklad12 = $_POST[priklad12];
    $priklad13 = $_POST[priklad13];
    $priklad14 = $_POST[priklad14];
    $priklad15 = $_POST[priklad15];
    $vysledek1 = $_POST[vysledek1];
    $vysledek2 = $_POST[vysledek2];
    $vysledek3 = $_POST[vysledek3];
    $vysledek4 = $_POST[vysledek4];
    $vysledek5 = $_POST[vysledek5];
    $vysledek6 = $_POST[vysledek6];
    $vysledek7 = $_POST[vysledek7];
    $vysledek8 = $_POST[vysledek8];
    $vysledek9 = $_POST[vysledek9];
    $vysledek10 = $_POST[vysledek10];
    $vysledek11 = $_POST[vysledek11];
    $vysledek12 = $_POST[vysledek12];
    $vysledek13 = $_POST[vysledek13];
    $vysledek14 = $_POST[vysledek14];
    $vysledek15 = $_POST[vysledek15];
    $stmt->execute();
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
$conn = null;
?>
<script>
    location.replace("http://mathpuzzle.gevo.cz/adminTajny.php?hra=y");
</script>



