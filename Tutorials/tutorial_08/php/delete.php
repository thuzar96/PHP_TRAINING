<?php
require_once "../index.php";
//include "index.php";
 if (isset($_GET['id'])) {
   $user_id = $_GET['id'];
   $sql= "DELETE FROM 'user_info' WHERE 'id'='$user_id'";

   $result = $conn->query($sql);

   if ($result== TRUE) {
     echo "Record is deleted";
   }
   else {
     echo "Error".$sql."<br>". $conn-> error;
   }
 }
?>