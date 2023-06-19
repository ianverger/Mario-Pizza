<?php
   // connect to db
   $conn = mysqli_connect('localhost', 'ian', 'skipro242', 'ninja_pizza');

   // check connection
   if (!$conn) {
       echo 'connection error: ' . mysqli_connect_error();
   }
?>