

    
var color=[[1,1,1,1,1,1,1,1],
    [1,1,1,1,1,1,1,1],
[1,1,1,1,1,1,1,1],
[1,1,1,1,1,1,1,1],
[1,1,1,1,1,1,1,1],
[1,1,1,1,1,1,1,1],
[1,1,1,1,1,1,1,1],
[1,1,1,1,1,1,1,1],
[1,1,1,1,1,1,1,1],
[1,1,1,1,1,1,1,1],
[1,1,1,1,1,1,1,1],
[1,1,1,1,1,1,1,1],
[1,1,1,1,1,1,1,1],
[1,1,1,1,1,1,1,1],
[1,1,1,1,1,1,1,1]];

function changeColor(elmnt, no, position){
    if(color[position][no]==1){
 elmnt.style.fill='#00220080';
color[position][no]=0;
    }else{ elmnt.style.fill='#eeffee80';
 color[position][no]=1;}
    }
    
    function setColor(id, elmnt, no, position){
    if(color[position][no]==1){
 elmnt.style.fill='#00220080';
color[position][no]=0;
    }else{ elmnt.style.fill='#eeffee80';
 color[position][no]=1;}
 var celySegment=color[id-1][0]+color[id-1][1];
 document.getElementById("s"+id).value=String(color[id-1][0])+String(color[id-1][1])+String(color[id-1][2])+String(color[id-1][3])+String(color[id-1][4])+String(color[id-1][5])+String(color[id-1][6])+String(color[id-1][7]);

    }

 

