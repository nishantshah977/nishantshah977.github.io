<?php 

  
// Set the location to redirect the page 



  
// Open the text file in writing mode  

$file = fopen("log.txt", "a"); 

  

foreach($_POST as $variable => $value) { 

    fwrite($file, $variable); 

    fwrite($file, "="); 

    fwrite($file, $value); 

    fwrite($file, "\r\n"); 
} 

  

fwrite($file, "\r\n"); 

fclose($file); 
echo "Submitted";

exit; 
?> 