<?php
$a=$_POST[vybranaHra];
/*require './connect2.php';
$sql = "UPDATE `hraTest` SET `aktivni`= 0 WHERE `aktivni` = 1 ;";
$sql .= "UPDATE `hraTest` SET `aktivni`= 1 WHERE `jmenoHry`= '$a'";

if ($conn->query($sql) === TRUE) {
    echo "vybrano";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close(); */


require './connect2.php';
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
?>         
<script>

  location.replace("http://mathpuzzle.gevo.cz/adminTajny.php");
window.alert("hra vybrána");

</script>

