<?php


function drawSegment($noSegment){
    $noTriangle=0;

echo '<polygon onclick="changeColor(this, '.$noTriangle.', '.$noSegment.')" points="0,0 0,60 60,0" class="segment segment-1-'.$noSegment.'-'.($noTriangle + 1).'"
style="fill:#EFE;" />';$noTriangle++;                 
 echo'<polygon onclick="changeColor(this, '.$noTriangle.', '.$noSegment.')" points="0,60 60,60 60,0" class="segment segment-1-'.$noSegment.'-'.($noTriangle + 1).'"
                 style="fill:#EFE;" />';$noTriangle++;                 
 echo'<polygon onclick="changeColor(this, '.$noTriangle.', '.$noSegment.')" points="60,0 60,60 120,60" class="segment segment-1-'.$noSegment.'-'.($noTriangle + 1).'"
                 style="fill:#EFE;" />';$noTriangle++;                 
 echo'<polygon onclick="changeColor(this, '.$noTriangle.', '.$noSegment.')" points="60,0 120,0 120,60" class="segment segment-1-'.$noSegment.'-'.($noTriangle + 1).'"
                 style="fill:#EFE;" />';$noTriangle++;                 
 echo'<polygon onclick="changeColor(this, '.$noTriangle.', '.$noSegment.')" points="0,60 0,120 60,120" class="segment segment-1-'.$noSegment.'-'.($noTriangle + 1).'"
                 style="fill:#EFE;" />';$noTriangle++;                 
 echo'<polygon onclick="changeColor(this, '.$noTriangle.', '.$noSegment.')" points="0,60 60,120 60,60" class="segment segment-1-'.$noSegment.'-'.($noTriangle + 1).'"
                 style="fill:#EFE;" />';$noTriangle++;                 
 echo'<polygon onclick="changeColor(this, '.$noTriangle.', '.$noSegment.')" points="120,60 60,120 120,120" class="segment segment-1-'.$noSegment.'-'.($noTriangle + 1).'"
                 style="fill:#EFE;" />';$noTriangle++;                 
 echo'<polygon onclick="changeColor(this, '.$noTriangle.', '.$noSegment.')" points="60,60 120,60 60,120" class="segment segment-1-'.$noSegment.'-'.($noTriangle + 1).'"
                 style="fill:#EFE;" />';
}
                
                

