<?php
   
   $connection = mysqli_connect("localhost","root","","crud_operation");

   if(!$connection){
     die("not connected");  
   }
   else{
    echo "connected";
   }


?>