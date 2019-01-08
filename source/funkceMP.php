<?php

    class hra {    
   var $jmenoHry="testHry"; 
   var $poradi;
public function vyberHry(){
        require './source/connect2.php';
    

       
        $sql = "SELECT `jmenoHry` FROM `hraTest` WHERE `aktivni`=1";
        $result = $conn->query($sql);
    $this->jmenoHry = $result->fetch_array()[0];

          $conn->close(); 
     
    }
  

function drawSegment($noSegment){
 
    require './source/connect2.php';
    
      $sql = "SELECT * FROM hraTest WHERE jmenoHry='$this->jmenoHry'";
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

function adminSegment($noSegment){
    
    $noTriangle=0;
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

function poradi() {

        $cisla;
        for ($n = 0; $n < 15; $n++) {
            $cisla[$n] = ($n + 1);
        }
        
        for ($i = 14; $i >= 0; $i--) {
            $nahodne = mt_rand(0, $i);
            $this->poradi[$i] = $cisla[$nahodne];
            for ($j = $nahodne; $j < count($cisla); $j++) {
                $cisla[$j] = $cisla[($j + 1)];
            }
        }
        
    }

                
    }  
 

