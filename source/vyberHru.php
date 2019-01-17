<?php



require './connect3.php';
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Connected successfully"; 


    
    $stmt = $conn->prepare( "UPDATE `hraTest` SET `aktivni`= 0 WHERE `aktivni` = 1 ");
    $stmt->execute();

    
   $stmt2 = $conn->prepare( "UPDATE `hraTest` SET `aktivni`= 1 WHERE `jmenoHry`= :jmenohry");
    $stmt2->bindParam(':jmenohry', $_POST[vybranaHra]);
     $stmt2->execute();

/*require './connect2.php';
$sql = "UPDATE `hraTest` SET `aktivni`= 0 WHERE `aktivni` = 1 ";

if ($conn->query($sql) === TRUE) {
   
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();

require './connect2.php';

$sql = "UPDATE `hraTest` SET `aktivni`= 1 WHERE `jmenoHry`= '$a'";

if ($conn->query($sql) === TRUE) {

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();

echo "je vybrána hra: <strong>" . $a . "</strong>";
?>  */    
            
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
$conn = null;            ?> 
<script>
  location.replace("http://mathpuzzle.gevo.cz/adminTajny.php?zmena=y");
</script>
 
