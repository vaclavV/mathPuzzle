<?php

class Segment {
var $trojuhelniky;
    function Segment($pozice, $obrazek) {
        require './source/connect2.php';

        $sql = "SELECT * FROM obrazekTest WHERE jmeno='$obrazek'";
        $result = $conn->query($sql);
        $row=$result->fetch_array();
      
        $this->trojuhelniky= ($row[$pozice]);
        
   $conn->close();     
    }
function Vypis(){
      for($x = 0; $x < 8; $x++) {
    echo "<br>";
    echo $x . "je " . $this->trojuhelniky[$x];
    
}  
    }

}


