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
   else
   {
     echo
     ('
     <script>
     console.log("connection successfull");
     </script>
     ');
   }

   $q1=$_POST['q1'];
   $q2=$_POST['q2'];
   $q3=$_POST['q3'];
   $q4=$_POST['q4'];
    $q5i=$_POST['q5i'];
    $q5ii=$_POST['q5ii'];
   $q6=$_POST['q6'];
    $q7i=$_POST['q7i'];
    $q7ii=$_POST['q7ii'];
    $q7iii=$_POST['q7iii'];
    $q7iv=$_POST['q7iv'];
      $q7v1=$_POST['q7v1'];
      $q7v2=$_POST['q7v2'];
      $q7v3=$_POST['q7v3'];
      $q7vi1=$_POST['q7vi1'];
      $q7vi2=$_POST['q7vi2'];
      $q7vi3=$_POST['q7vi3'];
   $q8=$_POST['q8'];
   $q9=$_POST['q9'];
   $q10=$_POST['q10'];

  /* echo $q1."<br />";
   echo $q2."<br />";
   echo $q3."<br />";
   echo $q4."<br />";
   echo $q5i."<br />";
   echo $q5ii."<br />";
   echo $q6."<br />";
   echo $q7i."<br />";
   echo $q7ii."<br />";
   echo $q7iii."<br />";
   echo $q7iv."<br />";
   echo $q7v1."<br />";
   echo $q7v2."<br />";
   echo $q7v3."<br />";
   echo $q7vi1."<br />";
   echo $q7vi2."<br />";
   echo $q7vi3."<br />";
   echo $q8."<br />";
   echo $q9."<br />";
   echo $q10."<br />";*/

   $sql = "INSERT INTO  () VALUES ()";

   if (mysqli_query($per, $sql)) {
     echo 'successfull';
 } else {
     echo "Error: " . $sql . "<br>" . mysqli_error($per);
 }
?>
