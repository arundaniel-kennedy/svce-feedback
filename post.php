<?php
include('con.php');

$q1=$_POST['q1'];
$q2=$_POST['q2'];
$q3=$_POST['q3'];
$q4=$_POST['q4'];
 $q51=$_POST['q5i'];
 $q52=$_POST['q5ii'];
$q6=$_POST['q6'];
 $q71=$_POST['q7i'];
 $q72=$_POST['q7ii'];
 $q73=$_POST['q7iii'];
 $q74=$_POST['q7iv'];
   $q751=$_POST['q7v1'];
   $q752=$_POST['q7v2'];
   $q753=$_POST['q7v3'];
   $q761=$_POST['q7vi1'];
   $q762=$_POST['q7vi2'];
   $q763=$_POST['q7vi3'];
$q8=$_POST['q8'];
$q9=$_POST['q9'];
$q10=$_POST['q10'];

if ($q1==1){
 $sql = "UPDATE response SET a=a+1 WHERE qno=1";
 if (mysqli_query($con, $sql)) {
 //  echo 'successful 1';
 } else {
   echo "Error: " . $sql . "<br>" . mysqli_error($per);
 }
}else if($q1==2){
 $sql = "UPDATE response SET b=b+1 WHERE qno=1";
 if (mysqli_query($con, $sql)) {
 //  echo 'successful 1';
 } else {
   echo "Error: " . $sql . "<br>" . mysqli_error($per);
 }
}else if($q1==3){
 $sql = "UPDATE response SET c=c+1 WHERE qno=1";
 if (mysqli_query($con, $sql)) {
 //  echo 'successful 1';
 } else {
   echo "Error: " . $sql . "<br>" . mysqli_error($per);
 }
}else if($q1==4){
 $sql = "UPDATE response SET d=d+1 WHERE qno=1";
 if (mysqli_query($con, $sql)) {
//    echo 'successful 1';
 } else {
   echo "Error: " . $sql . "<br>" . mysqli_error($per);
 }
}else if($q1==5){
 $sql = "UPDATE response SET e=e+1 WHERE qno=1";
 if (mysqli_query($con, $sql)) {
//    echo 'successful 1';
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
//   echo 'successful 2';
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($per);
}
}else if($q2==2){
$sql = "UPDATE response SET b=b+1 WHERE qno=2";
if (mysqli_query($con, $sql)) {
//   echo 'successful 2';
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($per);
}
}else if($q2==3){
$sql = "UPDATE response SET c=c+1 WHERE qno=2";
if (mysqli_query($con, $sql)) {
//   echo 'successful 2';
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($per);
}
}else if($q2==4){
$sql = "UPDATE response SET d=d+1 WHERE qno=2";
if (mysqli_query($con, $sql)) {
//   echo 'successful 2';
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($per);
}
}else if($q2==5){
$sql = "UPDATE response SET e=e+1 WHERE qno=2";
if (mysqli_query($con, $sql)) {
 // echo 'successful 2';
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($per);
}
}
else{

}

echo "<br />";

if ($q3==1){
$sql = "UPDATE response SET a=a+1 WHERE qno=3";
if (mysqli_query($con, $sql)) {
//  echo 'successful 3';
} else {
 echo "Error: " . $sql . "<br>" . mysqli_error($per);
 }
}else if($q3==2){
 $sql = "UPDATE response SET b=b+1 WHERE qno=3";
 if (mysqli_query($con, $sql)) {
 //  echo 'successful 3';
 } else {
   echo "Error: " . $sql . "<br>" . mysqli_error($per);
 }
}else if($q3==3){
 $sql = "UPDATE response SET c=c+1 WHERE qno=3";
 if (mysqli_query($con, $sql)) {
//    echo 'successful 3';
 } else {
   echo "Error: " . $sql . "<br>" . mysqli_error($per);
 }
}else if($q3==4){
 $sql = "UPDATE response SET d=d+1 WHERE qno=3";
 if (mysqli_query($con, $sql)) {
//    echo 'successful 3';
 } else {
   echo "Error: " . $sql . "<br>" . mysqli_error($per);
 }
}else if($q3==5){
 $sql = "UPDATE response SET e=e+1 WHERE qno=3";
 if (mysqli_query($con, $sql)) {
//    echo 'successful 3';
 } else {
   echo "Error: " . $sql . "<br>" . mysqli_error($per);
 }
}
else{

}

 echo "<br />";

if ($q4==1){
$sql = "UPDATE response SET a=a+1 WHERE qno=4";
if (mysqli_query($con, $sql)) {
//   echo 'successful 4';
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($per);
}
}else if($q4==2){
$sql = "UPDATE response SET b=b+1 WHERE qno=4";
if (mysqli_query($con, $sql)) {
//   echo 'successful 4';
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($per);
}
}else if($q4==3){
$sql = "UPDATE response SET c=c+1 WHERE qno=4";
if (mysqli_query($con, $sql)) {
//   echo 'successful 4';
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($per);
}
}else if($q4==4){
$sql = "UPDATE response SET d=d+1 WHERE qno=4";
if (mysqli_query($con, $sql)) {
//   echo 'successful 4';
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($per);
}
}else if($q4==5){
$sql = "UPDATE response SET e=e+1 WHERE qno=4";
if (mysqli_query($con, $sql)) {
//   echo 'successful 4';
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($per);
}
}
else{

}

echo "<br />";

if ($q51==1){
$sql = "UPDATE response SET a=a+1 WHERE qno=51";
if (mysqli_query($con, $sql)) {
//echo 'successful 51';
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($per);
}
}else if($q51==2){
$sql = "UPDATE response SET b=b+1 WHERE qno=51";
if (mysqli_query($con, $sql)) {
// echo 'successful 51';
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($per);
}
}else if($q51==3){
$sql = "UPDATE response SET c=c+1 WHERE qno=51";
if (mysqli_query($con, $sql)) {
// echo 'successful 51';
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($per);
}
}else if($q51==4){
$sql = "UPDATE response SET d=d+1 WHERE qno=51";
if (mysqli_query($con, $sql)) {
//echo 'successful 51';
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($per);
}
}else if($q51==5){
$sql = "UPDATE response SET e=e+1 WHERE qno=51";
if (mysqli_query($con, $sql)) {
//echo 'successful 51';
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($per);
}
}
else{

}

echo("<br />");

if ($q52==1){
$sql = "UPDATE response SET a=a+1 WHERE qno=52";
if (mysqli_query($con, $sql)) {
//echo 'successful 52';
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($per);
}
}else if($q52==2){
$sql = "UPDATE response SET b=b+1 WHERE qno=52";
if (mysqli_query($con, $sql)) {
//echo 'successful 52';
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($per);
}
}else if($q52==3){
$sql = "UPDATE response SET c=c+1 WHERE qno=52";
if (mysqli_query($con, $sql)) {
//echo 'successful 52';
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($per);
}
}else if($q52==4){
$sql = "UPDATE response SET d=d+1 WHERE qno=52";
if (mysqli_query($con, $sql)) {
//echo 'successful 52';
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($per);
}
}else if($q52==5){
$sql = "UPDATE response SET e=e+1 WHERE qno=52";
if (mysqli_query($con, $sql)) {
//echo 'successful 52';
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($per);
}
}
else{

}

echo "<br />";

if ($q6==1){
$sql = "UPDATE response SET a=a+1 WHERE qno=6";
if (mysqli_query($con, $sql)) {
//   echo 'successful 6';
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($per);
}
}else if($q6==2){
$sql = "UPDATE response SET b=b+1 WHERE qno=6";
if (mysqli_query($con, $sql)) {
//   echo 'successful 6';
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($per);
}
}else if($q6==3){
$sql = "UPDATE response SET c=c+1 WHERE qno=6";
if (mysqli_query($con, $sql)) {
// echo 'successful 6';
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($per);
}
}else if($q6==4){
$sql = "UPDATE response SET d=d+1 WHERE qno=6";
if (mysqli_query($con, $sql)) {
//echo 'successful 6';
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($per);
}
}else if($q6==5){
$sql = "UPDATE response SET e=e+1 WHERE qno=6";
if (mysqli_query($con, $sql)) {
// echo 'successful 6';
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($per);
}
}
else{

}

echo "<br />";

if ($q71==1){
$sql = "UPDATE response SET a=a+1 WHERE qno=71";
if (mysqli_query($con, $sql)) {
// echo 'successful 71';
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($per);
}
}else if($q71==2){
$sql = "UPDATE response SET b=b+1 WHERE qno=71";
if (mysqli_query($con, $sql)) {
// echo 'successful 71';
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($per);
}
}else if($q71==3){
$sql = "UPDATE response SET c=c+1 WHERE qno=71";
if (mysqli_query($con, $sql)) {
// echo 'successful 71';
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($per);
}
}else if($q71==4){
$sql = "UPDATE response SET d=d+1 WHERE qno=71";
if (mysqli_query($con, $sql)) {
// echo 'successful 71';
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($per);
}
}else if($q71==5){
$sql = "UPDATE response SET e=e+1 WHERE qno=71";
if (mysqli_query($con, $sql)) {
//echo 'successful 71';
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($per);
}
}
else{

}

echo "<br />";

if ($q72==1){
$sql = "UPDATE response SET a=a+1 WHERE qno=72";
if (mysqli_query($con, $sql)) {
//echo 'successful 72';
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($per);
}
}else if($q72==2){
$sql = "UPDATE response SET b=b+1 WHERE qno=72";
if (mysqli_query($con, $sql)) {
//echo 'successful 72';
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($per);
}
}else if($q72==3){
$sql = "UPDATE response SET c=c+1 WHERE qno=72";
if (mysqli_query($con, $sql)) {
//echo 'successful 72';
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($per);
}
}else if($q72==4){
$sql = "UPDATE response SET d=d+1 WHERE qno=72";
if (mysqli_query($con, $sql)) {
//echo 'successful 72';
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($per);
}
}else if($q72==5){
$sql = "UPDATE response SET e=e+1 WHERE qno=72";
if (mysqli_query($con, $sql)) {
//echo 'successful 72';
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($per);
}
}
else{

}

echo "<br />";

if ($q73==1){
$sql = "UPDATE response SET a=a+1 WHERE qno=73";
if (mysqli_query($con, $sql)) {
//echo 'successful 73';
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($per);
}
}else if($q73==2){
$sql = "UPDATE response SET b=b+1 WHERE qno=73";
if (mysqli_query($con, $sql)) {
//echo 'successful 73';
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($per);
}
}else if($q73==3){
$sql = "UPDATE response SET c=c+1 WHERE qno=73";
if (mysqli_query($con, $sql)) {
//echo 'successful 73';
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($per);
}
}else if($q73==4){
$sql = "UPDATE response SET d=d+1 WHERE qno=73";
if (mysqli_query($con, $sql)) {
//echo 'successful 73';
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($per);
}
}else if($q73==5){
$sql = "UPDATE response SET e=e+1 WHERE qno=73";
if (mysqli_query($con, $sql)) {
//echo 'successful 73';
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($per);
}
}
else{

}

echo "<br />";

if ($q74==1){
$sql = "UPDATE response SET a=a+1 WHERE qno=74";
if (mysqli_query($con, $sql)) {
//echo 'successful 74';
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($per);
}
}else if($q74==2){
$sql = "UPDATE response SET b=b+1 WHERE qno=74";
if (mysqli_query($con, $sql)) {
//echo 'successful 74';
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($per);
}
}else if($q74==3){
$sql = "UPDATE response SET c=c+1 WHERE qno=74";
if (mysqli_query($con, $sql)) {
//echo 'successful 74';
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($per);
}
}else if($q74==4){
$sql = "UPDATE response SET d=d+1 WHERE qno=74";
if (mysqli_query($con, $sql)) {
//echo 'successful 74';
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($per);
}
}else if($q74==5){
$sql = "UPDATE response SET e=e+1 WHERE qno=74";
if (mysqli_query($con, $sql)) {
//echo 'successful 74';
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($per);
}
}
else{

}

echo "<br />";

if ($q751==1){
$sql = "UPDATE response SET a=a+1 WHERE qno=751";
if (mysqli_query($con, $sql)) {
//echo 'successful 751';
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($per);
}
}else if($q751==2){
$sql = "UPDATE response SET b=b+1 WHERE qno=751";
if (mysqli_query($con, $sql)) {
//echo 'successful 751';
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($per);
}
}else if($q751==3){
$sql = "UPDATE response SET c=c+1 WHERE qno=751";
if (mysqli_query($con, $sql)) {
//echo 'successful 751';
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($per);
}
}else if($q751==4){
$sql = "UPDATE response SET d=d+1 WHERE qno=751";
if (mysqli_query($con, $sql)) {
//echo 'successful 751';
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($per);
}
}else if($q751==5){
$sql = "UPDATE response SET e=e+1 WHERE qno=751";
if (mysqli_query($con, $sql)) {
//echo 'successful 751';
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($per);
}
}
else{

}

echo "<br />";

if ($q752==1){
$sql = "UPDATE response SET a=a+1 WHERE qno=752";
if (mysqli_query($con, $sql)) {
//echo 'successful 752';
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($per);
}
}else if($q752==2){
$sql = "UPDATE response SET b=b+1 WHERE qno=752";
if (mysqli_query($con, $sql)) {
//echo 'successful 752';
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($per);
}
}else if($q752==3){
$sql = "UPDATE response SET c=c+1 WHERE qno=752";
if (mysqli_query($con, $sql)) {
//echo 'successful 752';
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($per);
}
}else if($q752==4){
$sql = "UPDATE response SET d=d+1 WHERE qno=752";
if (mysqli_query($con, $sql)) {
//echo 'successful 752';
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($per);
}
}else if($q752==5){
$sql = "UPDATE response SET e=e+1 WHERE qno=752";
if (mysqli_query($con, $sql)) {
//echo 'successful 752';
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($per);
}
}
else{

}

echo "<br />";

if ($q753==1){
$sql = "UPDATE response SET a=a+1 WHERE qno=753";
if (mysqli_query($con, $sql)) {
//echo 'successful 753';
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($per);
}
}else if($q753==2){
$sql = "UPDATE response SET b=b+1 WHERE qno=753";
if (mysqli_query($con, $sql)) {
//echo 'successful 753';
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($per);
}
}else if($q753==3){
$sql = "UPDATE response SET c=c+1 WHERE qno=753";
if (mysqli_query($con, $sql)) {
//echo 'successful 753';
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($per);
}
}else if($q753==4){
$sql = "UPDATE response SET d=d+1 WHERE qno=753";
if (mysqli_query($con, $sql)) {
//echo 'successful 753';
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($per);
}
}else if($q753==5){
$sql = "UPDATE response SET e=e+1 WHERE qno=753";
if (mysqli_query($con, $sql)) {
//echo 'successful 753';
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($per);
}
}
else{

}

echo "<br />";

if ($q761==1){
$sql = "UPDATE response SET a=a+1 WHERE qno=761";
if (mysqli_query($con, $sql)) {
//echo 'successful 761';
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($per);
}
}else if($q761==2){
$sql = "UPDATE response SET b=b+1 WHERE qno=761";
if (mysqli_query($con, $sql)) {
//echo 'successful 761';
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($per);
}
}else if($q761==3){
$sql = "UPDATE response SET c=c+1 WHERE qno=761";
if (mysqli_query($con, $sql)) {
//echo 'successful 761';
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($per);
}
}else if($q761==4){
$sql = "UPDATE response SET d=d+1 WHERE qno=761";
if (mysqli_query($con, $sql)) {
//echo 'successful 761';
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($per);
}
}else if($q761==5){
$sql = "UPDATE response SET e=e+1 WHERE qno=761";
if (mysqli_query($con, $sql)) {
//echo 'successful 761';
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($per);
}
}
else{

}

echo "<br />";

if ($q762==1){
$sql = "UPDATE response SET a=a+1 WHERE qno=762";
if (mysqli_query($con, $sql)) {
//echo 'successful 762';
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($per);
}
}else if($q762==2){
$sql = "UPDATE response SET b=b+1 WHERE qno=762";
if (mysqli_query($con, $sql)) {
//echo 'successful 762';
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($per);
}
}else if($q762==3){
$sql = "UPDATE response SET c=c+1 WHERE qno=762";
if (mysqli_query($con, $sql)) {
//echo 'successful 762';
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($per);
}
}else if($q762==4){
$sql = "UPDATE response SET d=d+1 WHERE qno=762";
if (mysqli_query($con, $sql)) {
//echo 'successful 762';
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($per);
}
}else if($q762==5){
$sql = "UPDATE response SET e=e+1 WHERE qno=762";
if (mysqli_query($con, $sql)) {
//echo 'successful 762';
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($per);
}
}
else{

}

echo "<br />";

if ($q763==1){
$sql = "UPDATE response SET a=a+1 WHERE qno=763";
if (mysqli_query($con, $sql)) {
//echo 'successful 763';
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($per);
}
}else if($q763==2){
$sql = "UPDATE response SET b=b+1 WHERE qno=763";
if (mysqli_query($con, $sql)) {
//echo 'successful 763';
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($per);
}
}else if($q763==3){
$sql = "UPDATE response SET c=c+1 WHERE qno=763";
if (mysqli_query($con, $sql)) {
//echo 'successful 763';
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($per);
}
}else if($q763==4){
$sql = "UPDATE response SET d=d+1 WHERE qno=763";
if (mysqli_query($con, $sql)) {
//echo 'successful 763';
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($per);
}
}else if($q763==5){
$sql = "UPDATE response SET e=e+1 WHERE qno=763";
if (mysqli_query($con, $sql)) {
//echo 'successful 763';
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($per);
}
}
else{

}

echo "<br />";

if ($q8==1){
$sql = "UPDATE response SET a=a+1 WHERE qno=8";
if (mysqli_query($con, $sql)) {
//echo 'successful 8';
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($per);
}
}else if($q8==2){
$sql = "UPDATE response SET b=b+1 WHERE qno=8";
if (mysqli_query($con, $sql)) {
//echo 'successful 8';
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($per);
}
}else if($q8==3){
$sql = "UPDATE response SET c=c+1 WHERE qno=8";
if (mysqli_query($con, $sql)) {
//echo 'successful 8';
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($per);
}
}else if($q8==4){
$sql = "UPDATE response SET d=d+1 WHERE qno=8";
if (mysqli_query($con, $sql)) {
//echo 'successful 8';
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($per);
}
}else if($q8==5){
$sql = "UPDATE response SET e=e+1 WHERE qno=8";
if (mysqli_query($con, $sql)) {
//echo 'successful 8';
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($per);
}
}
else{

}

echo "<br />";

if ($q9==1){
$sql = "UPDATE response SET a=a+1 WHERE qno=9";
if (mysqli_query($con, $sql)) {
//echo 'successful 9';
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($per);
}
}else if($q9==2){
$sql = "UPDATE response SET b=b+1 WHERE qno=9";
if (mysqli_query($con, $sql)) {
//echo 'successful 9';
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($per);
}
}else if($q9==3){
$sql = "UPDATE response SET c=c+1 WHERE qno=9";
if (mysqli_query($con, $sql)) {
//echo 'successful 9';
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($per);
}
}else if($q9==4){
$sql = "UPDATE response SET d=d+1 WHERE qno=9";
if (mysqli_query($con, $sql)) {
//echo 'successful 9';
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($per);
}
}else if($q9==5){
$sql = "UPDATE response SET e=e+1 WHERE qno=9";
if (mysqli_query($con, $sql)) {
//echo 'successful 9';
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($per);
}
}
else{

}

echo "<br />";

if ($q10==1){
$sql = "UPDATE response SET a=a+1 WHERE qno=10";
if (mysqli_query($con, $sql)) {
//echo 'successful 10';
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($per);
}
}else if($q10==2){
$sql = "UPDATE response SET b=b+1 WHERE qno=10";
if (mysqli_query($con, $sql)) {
//echo 'successful 10';
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($per);
}
}else if($q10==3){
$sql = "UPDATE response SET c=c+1 WHERE qno=10";
if (mysqli_query($con, $sql)) {
//echo 'successful 10';
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($per);
}
}else if($q10==4){
$sql = "UPDATE response SET d=d+1 WHERE qno=10";
if (mysqli_query($con, $sql)) {
//echo 'successful 10';
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($per);
}
}else if($q10==5){
$sql = "UPDATE response SET e=e+1 WHERE qno=10";
if (mysqli_query($con, $sql)) {
//echo 'successful 10';
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($per);
}
}
else{

}

header("refresh:0 ; url=print.php");
 ?>
