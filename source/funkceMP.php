<?php


  

function drawSegment($noSegment){
    $row;
    require './source/connect2.php';
         $jmenoHry='testHry';
        $sql = "SELECT * FROM hraTest WHERE jmenoHry='$jmenoHry'";
        $result = $conn->query($sql);
       $row = $result->fetch_array();

          $conn->close(); 
          
         
    $noTriangle=0;
echo '<text x="15" y="45" fill="red">'.$row[($noSegment+2)].'</text>';
echo '<polygon onclick="changeColor(this, '.$noTriangle.', '.($noSegment-1).')" points="0,0 0,60 60,0" class="segment segment-1-'.$noSegment.'-'.($noTriangle + 1).'"
style="fill:#eeffee80;" />';$noTriangle++;                 
 echo'<polygon onclick="changeColor(this, '.$noTriangle.', '.($noSegment-1).')" points="0,60 60,60 60,0" class="segment segment-1-'.$noSegment.'-'.($noTriangle + 1).'" style="fill:#eeffee80;" />';$noTriangle++;                 
 echo'<polygon onclick="changeColor(this, '.$noTriangle.', '.($noSegment-1).')" points="60,0 60,60 120,60" class="segment segment-1-'.$noSegment.'-'.($noTriangle + 1).'" style="fill:#eeffee80;" />';$noTriangle++;                 
 echo'<polygon onclick="changeColor(this, '.$noTriangle.', '.($noSegment-1).')" points="60,0 120,0 120,60" class="segment segment-1-'.$noSegment.'-'.($noTriangle + 1).'" style="fill:#eeffee80;" />';$noTriangle++;                 
 echo'<polygon onclick="changeColor(this, '.$noTriangle.', '.($noSegment-1).')" points="0,60 0,120 60,120" class="segment segment-1-'.$noSegment.'-'.($noTriangle + 1).'" style="fill:#eeffee80;" />';$noTriangle++;                 
 echo'<polygon onclick="changeColor(this, '.$noTriangle.', '.($noSegment-1).')" points="0,60 60,120 60,60" class="segment segment-1-'.$noSegment.'-'.($noTriangle + 1).'" style="fill:#eeffee80;" />';$noTriangle++;                 
 echo'<polygon onclick="changeColor(this, '.$noTriangle.', '.($noSegment-1).')" points="120,60 60,120 120,120" class="segment segment-1-'.$noSegment.'-'.($noTriangle + 1).'" style="fill:#eeffee80;" />';$noTriangle++;                 
 echo'<polygon onclick="changeColor(this, '.$noTriangle.', '.($noSegment-1).')" points="60,60 120,60 60,120" class="segment segment-1-'.$noSegment.'-'.($noTriangle + 1).'" style="fill:#eeffee80;" />';
}
                
                

