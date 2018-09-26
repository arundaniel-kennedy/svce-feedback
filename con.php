<?php
   $db_name="svce-feedback"; // database name
   $db_user="root"; // database username
   $db_pass="root"; // database password
   $db_host="localhost"; // domain (example : igowtham.com)
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
   else
   {
   echo
   ('
   <script>
   </script>
   ');
   }
   ?>
