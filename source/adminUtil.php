<?php

class adminUtil {
   
    var $obrazky;
    var $hryNaVyber;

    function obrazky() {
        require './source/connect2.php';
        $sql = "SELECT `jmeno` FROM `obrazekTest`";
        $result = $conn->query($sql);


        if ($result->num_rows > 0) {
            $m = 0;
            while ($row = $result->fetch_assoc()) {
                    $this->obrazky[$m] = $row["jmeno"];
                $m++;
            }
        }$conn->close();
    }
    
    function nastaveniHry() {
        require './source/connect2.php';
        $sql = "SELECT `jmenoHry` FROM `hraTest`";
        $result = $conn->query($sql);


        if ($result->num_rows > 0) {
            $s = 0;
            while ($row = $result->fetch_assoc()) {
                    $this->hryNaVyber[$s] = $row["jmenoHry"];
                $s++;
            }
        }$conn->close();
        
    }

}

        
