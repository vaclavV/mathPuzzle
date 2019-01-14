<?php

    require './connect2.php';
    
$sql = "INSERT INTO `obrazekTest`(`jmeno`, `segment1`, `segment2`, `segment3`, `segment4`, `segment5`, `segment6`, `segment7`, `segment8`, `segment9`, `segment10`, `segment11`, `segment12`, `segment13`, `segment14`, `segment15`) VALUES ('$_POST[jmenoObrazku]', '$_POST[segment1]', '$_POST[segment2]', '$_POST[segment3]', '$_POST[segment4]', '$_POST[segment5]', '$_POST[segment6]', '$_POST[segment7]', '$_POST[segment8]', '$_POST[segment9]', '$_POST[segment10]', '$_POST[segment11]', '$_POST[segment12]', '$_POST[segment13]', '$_POST[segment14]', '$_POST[segment15]')";
if ($conn->query($sql) === TRUE) {
    echo "nahrano";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();   
?>
<script>
  location.replace("http://mathpuzzle.gevo.cz/adminTajny.php");
window.alert("obrázek uložen");
</script>
