<?php
   ini_set('display_errors', '1');
   ini_set('display_startup_errors', '1');
   error_reporting(E_ALL);

   $host = "localhost";
   $user = "andre69";
   $pass = "1Al0Cs236901234";
   $db = "andre69_chat_app";

   $connect = mysqli_connect($host, $user, $pass, $db);

   // object to support emojis
   $connect->set_charset("utf8mb4");

   if($connect->connect_error){
      die("Connection error: (" . $connect->connect_errno.") ".$connect->connect_error);
   } //else{
   //   echo "Connected successfully!";
   // }
?>