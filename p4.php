<?php 
$rows=5;  
for($i=1;$i<=$rows; $i++){
   for($j=1; $j<=($rows-$i); $j++){//print space
    echo "&nbsp;&nbsp;";
   } 
   //print star
   for($k=1; $k<=$i; $k++){
    echo "*";
   }
    
   echo "<br>"; 
}
?>