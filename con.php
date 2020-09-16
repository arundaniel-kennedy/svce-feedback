<?php
   $db_name="svce-feedback";
   $db_user="root";
   $db_pass="root";
   $db_host="localhost";

   $con=mysqli_connect("$db_host","$db_user","$db_pass","$db_name");
  if (!$con)
   {
   echo
   ('
   <script>
   console.log("connection error");
   </script>
   ');
   }
?>
