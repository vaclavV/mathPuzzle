<?php

class Segment {

    var $trojuhelniky;
    var $fill;

    function Segment($pozice, $obrazek) {
        require './source/connect2.php';

        $sql = "SELECT * FROM obrazekTest WHERE jmeno='$obrazek'";
        $result = $conn->query($sql);
        $row = $result->fetch_array();

        $this->trojuhelniky = ($row[$pozice]);

        $conn->close();
    }

    function Vypis() {
        for ($x = 0; $x < 8; $x++) {
            if ($this->trojuhelniky[$x] == 1) {$this->fill[$x] = "#FEF";}
            else {$this->fill[$x] = "#010";}
        }
        echo '<polygon points="0,0 0,60 60,0" class="segment segment-1-1-1"
                 style="fill:'.$this->fill[0].';" />
        <polygon points="0,60 60,60 60,0" class="segment segment-1-1-2"
                 style="fill:'.$this->fill[1].';" />
        <polygon points="60,0 60,60 120,60" class="segment segment-1-1-3"
                 style="fill:'.$this->fill[2].';" />
        <polygon points="60,0 120,0 120,60" class="segment segment-1-1-4"
                 style="fill:'.$this->fill[3].';" />
        <polygon points="0,60 0,120 60,120" class="segment segment-1-1-5"
                 style="fill:'.$this->fill[4].';" />
        <polygon points="0,60 60,120 60,60" class="segment segment-1-1-6"
                 style="fill:'.$this->fill[5].';" />
        <polygon points="120,60 60,120 120,120" class="segment segment-1-1-7"
                 style="fill:'.$this->fill[6].';" />
        <polygon points="60,60 120,60 60,120" class="segment segment-1-1-8"
                 style="fill:'.$this->fill[7].';" />';
    }

}
