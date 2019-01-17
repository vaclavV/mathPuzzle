<?php
require './connect3.php';
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Connected successfully"; 

    $stmt = $conn->prepare("INSERT INTO obrazekTest(jmeno, segment1, segment2, segment3, segment4, segment5, segment6, segment7, segment8, segment9, segment10, segment11, segment12, segment13, segment14, segment15)  VALUES (:jmeno, :segment1, :segment2, :segment3, :segment4, :segment5, :segment6, :segment7, :segment8, :segment9, :segment10, :segment11, :segment12, :segment13, :segment14, :segment15)");
    $stmt->bindParam(':jmeno', $jmenoObrazku);
    $stmt->bindParam(':segment1', $segment1);
    $stmt->bindParam(':segment2', $segment2);
    $stmt->bindParam(':segment3', $segment3);
    $stmt->bindParam(':segment4', $segment4);
    $stmt->bindParam(':segment5', $segment5);
    $stmt->bindParam(':segment6', $segment6);
    $stmt->bindParam(':segment7', $segment7);
    $stmt->bindParam(':segment8', $segment8);
    $stmt->bindParam(':segment9', $segment9);
    $stmt->bindParam(':segment10', $segment10);
    $stmt->bindParam(':segment11', $segment11);
    $stmt->bindParam(':segment12', $segment12);
    $stmt->bindParam(':segment13', $segment13);
    $stmt->bindParam(':segment14', $segment14);
    $stmt->bindParam(':segment15', $segment15);

    $jmenoObrazku = $_POST[jmenoObrazku];
    $segment1 = $_POST[segment1];
    $segment2 = $_POST[segment2];
    $segment3 = $_POST[segment3];
    $segment4 = $_POST[segment4];
    $segment5 = $_POST[segment5];
    $segment6 = $_POST[segment6];
    $segment7 = $_POST[segment7];
    $segment8 = $_POST[segment8];
    $segment9 = $_POST[segment9];
    $segment10 = $_POST[segment10];
    $segment11 = $_POST[segment11];
    $segment12 = $_POST[segment12];
    $segment13 = $_POST[segment13];
    $segment14 = $_POST[segment14];
    $segment15 = $_POST[segment15];


    $stmt->execute();
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
$conn = null;

?>
<script >
        location . replace("http://mathpuzzle.gevo.cz/adminTajny.php?obrazek=y");

</script>
