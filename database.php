<?php
    $dbhost = 'localhost';
    $dbuser = 'mgs_user';
    $dbpass = 'pa55word';
    $dbname = 'CSU_INFO_DB';
    $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

   if(! $conn ){
            die('Could not connect: ' . mysqli_error());
         }
         //echo 'Connected successfully';
         
         
?>