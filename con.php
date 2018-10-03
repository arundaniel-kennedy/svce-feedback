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

   /*echo $q1."<br />";
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

   if ($q1==1){
    $sql = "UPDATE response SET a=a+1 WHERE qno=1";
    if (mysqli_query($con, $sql)) {
      echo 'successful 1';
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($per);
    }
  }else if($q1==2){
    $sql = "UPDATE response SET b=b+1 WHERE qno=1";
    if (mysqli_query($con, $sql)) {
      echo 'successful 1';
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($per);
    }
  }else if($q1==3){
    $sql = "UPDATE response SET c=c+1 WHERE qno=1";
    if (mysqli_query($con, $sql)) {
      echo 'successful 1';
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($per);
    }
  }else if($q1==4){
    $sql = "UPDATE response SET d=d+1 WHERE qno=1";
    if (mysqli_query($con, $sql)) {
      echo 'successful 1';
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($per);
    }
  }else if($q1==5){
    $sql = "UPDATE response SET e=e+1 WHERE qno=1";
    if (mysqli_query($con, $sql)) {
      echo 'successful 1';
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($per);
    }
  }
  else{

  }

  echo "<br />";

  if ($q2==1){
   $sql = "UPDATE response SET a=a+1 WHERE qno=2";
   if (mysqli_query($con, $sql)) {
     echo 'successful 2';
   } else {
     echo "Error: " . $sql . "<br>" . mysqli_error($per);
   }
 }else if($q2==2){
   $sql = "UPDATE response SET b=b+1 WHERE qno=2";
   if (mysqli_query($con, $sql)) {
     echo 'successful 2';
   } else {
     echo "Error: " . $sql . "<br>" . mysqli_error($per);
   }
 }else if($q2==3){
   $sql = "UPDATE response SET c=c+1 WHERE qno=2";
   if (mysqli_query($con, $sql)) {
     echo 'successful 2';
   } else {
     echo "Error: " . $sql . "<br>" . mysqli_error($per);
   }
 }else if($q2==4){
   $sql = "UPDATE response SET d=d+1 WHERE qno=2";
   if (mysqli_query($con, $sql)) {
     echo 'successful 2';
   } else {
     echo "Error: " . $sql . "<br>" . mysqli_error($per);
   }
 }else if($q2==5){
   $sql = "UPDATE response SET e=e+1 WHERE qno=2";
   if (mysqli_query($con, $sql)) {
     echo 'successful 2';
   } else {
     echo "Error: " . $sql . "<br>" . mysqli_error($per);
   }
 }
 else{

 }




?>
