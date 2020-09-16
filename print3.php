<!DOCTYPE html>
<html lang="en" dir="ltr">
  <?php include("con.php"); ?>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
        crossorigin="anonymous">
    <link rel="stylesheet" href="main.css" />
    <title>Svce-feedback</title>
  </head>
  <body>

    <div class="container mt-5" style="padding-left:100px;padding-right:100px;">
      <a class="btn btn-primary mt-5" href="print.php">click here</a><br><br>
      <table class="table table-bordered table-hover">
        <thead class="thead-dark">
          <tr>
            <th>Question</th>
            <th>Result</th>
          </tr>
        </thead>
        <tbody>

          <tr>
            <td>1) How do teachers manage classes?</td>
            <td>
              <?php
              $sql = "SELECT qno,
                        CASE GREATEST(a, b, c, d, e)
                          WHEN a THEN 'a'
                          WHEN b THEN 'b'
                          WHEN c THEN 'c'
                          WHEN d THEN 'd'
                          ELSE 'e'
                          END AS ans
                      FROM response WHERE qno='1'";
              $res = mysqli_query($con,$sql);
              $row = mysqli_fetch_array($res);
              $ans = $row['ans'];
              if ($ans==='a') {
                echo "worst";
              }else if ($ans==='b') {
                echo "bad";
              }elseif ($ans==='c') {
                echo "fair";
              }elseif ($ans==='d') {
                echo "good";
              }elseif ($ans==='e') {
                echo "Excellent";
              }
              ?>
            </td>
          </tr>

          <tr>
            <td>2) How are practical sessions handled?</td>
            <td>
              <?php
              $sql = "SELECT qno,
                        CASE GREATEST(a, b, c, d, e)
                          WHEN a THEN 'a'
                          WHEN b THEN 'b'
                          WHEN c THEN 'c'
                          WHEN d THEN 'd'
                          ELSE 'e'
                          END AS ans
                      FROM response WHERE qno='2'";
              $res = mysqli_query($con,$sql);
              $row = mysqli_fetch_array($res);
              $ans = $row['ans'];
              if ($ans==='a') {
                echo "Worst";
              }else if ($ans==='b') {
                echo "Bad";
              }elseif ($ans==='c') {
                echo "Fair";
              }elseif ($ans==='d') {
                echo "Good";
              }elseif ($ans==='e') {
                echo "Excellent";
              }
              ?>
            </td>
          </tr>

          <tr>
            <td>3) How far have your faculty encouraged and supported your co-curricular activities?(paper presentation, GDs, etc.,)</td>
            <td>
              <?php
              $sql = "SELECT qno,
                        CASE GREATEST(a, b, c, d, e)
                          WHEN a THEN 'a'
                          WHEN b THEN 'b'
                          WHEN c THEN 'c'
                          WHEN d THEN 'd'
                          ELSE 'e'
                          END AS ans
                      FROM response WHERE qno='3'";
              $res = mysqli_query($con,$sql);
              $row = mysqli_fetch_array($res);
              $ans = $row['ans'];
              if ($ans==='a') {
                echo "Worst";
              }else if ($ans==='b') {
                echo "Bad";
              }elseif ($ans==='c') {
                echo "Fair";
              }elseif ($ans==='d') {
                echo "Good";
              }elseif ($ans==='e') {
                echo "Excellent";
              }
              ?>
            </td>
          </tr>

          <tr>
            <td>4) How are your department computer facilities?</td>
            <td>
              <?php
              $sql = "SELECT qno,
                        CASE GREATEST(a, b, c, d, e)
                          WHEN a THEN 'a'
                          WHEN b THEN 'b'
                          WHEN c THEN 'c'
                          WHEN d THEN 'd'
                          ELSE 'e'
                          END AS ans
                      FROM response WHERE qno='4'";
              $res = mysqli_query($con,$sql);
              $row = mysqli_fetch_array($res);
              $ans = $row['ans'];
              if ($ans==='a') {
                echo "Worst";
              }else if ($ans==='b') {
                echo "Bad";
              }elseif ($ans==='c') {
                echo "Fair";
              }elseif ($ans==='d') {
                echo "Good";
              }elseif ($ans==='e') {
                echo "Excellent";
              }
              ?>
            </td>
          </tr>

          <tr>
            <td>5) How far have the following associations helped in improving your technical competence and organizing skills?</td>
            <td></td>
          </tr>

          <tr>
            <td>&nbsp; &nbsp; &nbsp; &nbsp;(i)Professional(ISTE, IEE etc.,)</td>
            <td>
              <?php
              $sql = "SELECT qno,
                        CASE GREATEST(a, b, c, d, e)
                          WHEN a THEN 'a'
                          WHEN b THEN 'b'
                          WHEN c THEN 'c'
                          WHEN d THEN 'd'
                          ELSE 'e'
                          END AS ans
                      FROM response WHERE qno='51'";
              $res = mysqli_query($con,$sql);
              $row = mysqli_fetch_array($res);
              $ans = $row['ans'];
              if ($ans==='a') {
                echo "Worst";
              }else if ($ans==='b') {
                echo "Bad";
              }elseif ($ans==='c') {
                echo "Fair";
              }elseif ($ans==='d') {
                echo "Good";
              }elseif ($ans==='e') {
                echo "Excellent";
              }
              ?>
            </td>
          </tr>

          <tr>
            <td>&nbsp; &nbsp; &nbsp; &nbsp;(ii)Extra-curricular(NSS, ROTARACT etc.,)</td>
            <td>
              <?php
              $sql = "SELECT qno,
                        CASE GREATEST(a, b, c, d, e)
                          WHEN a THEN 'a'
                          WHEN b THEN 'b'
                          WHEN c THEN 'c'
                          WHEN d THEN 'd'
                          ELSE 'e'
                          END AS ans
                      FROM response WHERE qno='52'";
              $res = mysqli_query($con,$sql);
              $row = mysqli_fetch_array($res);
              $ans = $row['ans'];
              if ($ans==='a') {
                echo "Worst";
              }else if ($ans==='b') {
                echo "Bad";
              }elseif ($ans==='c') {
                echo "Fair";
              }elseif ($ans==='d') {
                echo "Good";
              }elseif ($ans==='e') {
                echo "Excellent";
              }
              ?>
            </td>
          </tr>

          <tr>
            <td>6) How do you find discipline in the college?</td>
            <td>
              <?php
              $sql = "SELECT qno,
                        CASE GREATEST(a, b, c, d, e)
                          WHEN a THEN 'a'
                          WHEN b THEN 'b'
                          WHEN c THEN 'c'
                          WHEN d THEN 'd'
                          ELSE 'e'
                          END AS ans
                      FROM response WHERE qno='6'";
              $res = mysqli_query($con,$sql);
              $row = mysqli_fetch_array($res);
              $ans = $row['ans'];
              if ($ans==='a') {
                echo "Worst";
              }else if ($ans==='b') {
                echo "Bad";
              }elseif ($ans==='c') {
                echo "Fair";
              }elseif ($ans==='d') {
                echo "Good";
              }elseif ($ans==='e') {
                echo "Excellent";
              }
              ?>
            </td>
          </tr>

          <tr>
            <td>7) How are the following student service facilities?</td>
            <td></td>
          </tr>

          <tr>
            <td>&nbsp; &nbsp; &nbsp; &nbsp; (i) Office personnel</td>
            <td>
              <?php
              $sql = "SELECT qno,
                        CASE GREATEST(a, b, c, d, e)
                          WHEN a THEN 'a'
                          WHEN b THEN 'b'
                          WHEN c THEN 'c'
                          WHEN d THEN 'd'
                          ELSE 'e'
                          END AS ans
                      FROM response WHERE qno='71'";
              $res = mysqli_query($con,$sql);
              $row = mysqli_fetch_array($res);
              $ans = $row['ans'];
              if ($ans==='a') {
                echo "Worst";
              }else if ($ans==='b') {
                echo "Bad";
              }elseif ($ans==='c') {
                echo "Fair";
              }elseif ($ans==='d') {
                echo "Good";
              }elseif ($ans==='e') {
                echo "Excellent";
              }
              ?>
            </td>
          </tr>

          <tr>
            <td>&nbsp; &nbsp; &nbsp; &nbsp; (ii) Transport services</td>
            <td>
              <?php
              $sql = "SELECT qno,
                        CASE GREATEST(a, b, c, d, e)
                          WHEN a THEN 'a'
                          WHEN b THEN 'b'
                          WHEN c THEN 'c'
                          WHEN d THEN 'd'
                          ELSE 'e'
                          END AS ans
                      FROM response WHERE qno='72'";
              $res = mysqli_query($con,$sql);
              $row = mysqli_fetch_array($res);
              $ans = $row['ans'];
              if ($ans==='a') {
                echo "Worst";
              }else if ($ans==='b') {
                echo "Bad";
              }elseif ($ans==='c') {
                echo "Fair";
              }elseif ($ans==='d') {
                echo "Good";
              }elseif ($ans==='e') {
                echo "Excellent";
              }
              ?>
            </td>
          </tr>

          <tr>
            <td>&nbsp; &nbsp; &nbsp; &nbsp; (iii) Sport facilities</td>
            <td>
              <?php
              $sql = "SELECT qno,
                        CASE GREATEST(a, b, c, d, e)
                          WHEN a THEN 'a'
                          WHEN b THEN 'b'
                          WHEN c THEN 'c'
                          WHEN d THEN 'd'
                          ELSE 'e'
                          END AS ans
                      FROM response WHERE qno='73'";
              $res = mysqli_query($con,$sql);
              $row = mysqli_fetch_array($res);
              $ans = $row['ans'];
              if ($ans==='a') {
                echo "Worst";
              }else if ($ans==='b') {
                echo "Bad";
              }elseif ($ans==='c') {
                echo "Fair";
              }elseif ($ans==='d') {
                echo "Good";
              }elseif ($ans==='e') {
                echo "Excellent";
              }
              ?>
            </td>
          </tr>

          <tr>
            <td>&nbsp; &nbsp; &nbsp; &nbsp; (iv) Hostel facilities</td>
            <td>
              <?php
              $sql = "SELECT qno,
                        CASE GREATEST(a, b, c, d, e)
                          WHEN a THEN 'a'
                          WHEN b THEN 'b'
                          WHEN c THEN 'c'
                          WHEN d THEN 'd'
                          ELSE 'e'
                          END AS ans
                      FROM response WHERE qno='74'";
              $res = mysqli_query($con,$sql);
              $row = mysqli_fetch_array($res);
              $ans = $row['ans'];
              if ($ans==='a') {
                echo "Worst";
              }else if ($ans==='b') {
                echo "Bad";
              }elseif ($ans==='c') {
                echo "Fair";
              }elseif ($ans==='d') {
                echo "Good";
              }elseif ($ans==='e') {
                echo "Excellent";
              }
              ?>
            </td>
          </tr>

          <tr>
            <td>&nbsp; &nbsp; &nbsp; &nbsp; (v) Canteen</td>
            <td></td>
          </tr>

          <tr>
            <td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; (1) Space</td>
            <td>
              <?php
              $sql = "SELECT qno,
                        CASE GREATEST(a, b, c, d, e)
                          WHEN a THEN 'a'
                          WHEN b THEN 'b'
                          WHEN c THEN 'c'
                          WHEN d THEN 'd'
                          ELSE 'e'
                          END AS ans
                      FROM response WHERE qno='751'";
              $res = mysqli_query($con,$sql);
              $row = mysqli_fetch_array($res);
              $ans = $row['ans'];
              if ($ans==='a') {
                echo "Worst";
              }else if ($ans==='b') {
                echo "Bad";
              }elseif ($ans==='c') {
                echo "Fair";
              }elseif ($ans==='d') {
                echo "Good";
              }elseif ($ans==='e') {
                echo "Excellent";
              }
              ?>
            </td>
          </tr>

          <tr>
            <td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; (2) Food</td>
            <td>
              <?php
              $sql = "SELECT qno,
                        CASE GREATEST(a, b, c, d, e)
                          WHEN a THEN 'a'
                          WHEN b THEN 'b'
                          WHEN c THEN 'c'
                          WHEN d THEN 'd'
                          ELSE 'e'
                          END AS ans
                      FROM response WHERE qno='752'";
              $res = mysqli_query($con,$sql);
              $row = mysqli_fetch_array($res);
              $ans = $row['ans'];
              if ($ans==='a') {
                echo "Worst";
              }else if ($ans==='b') {
                echo "Bad";
              }elseif ($ans==='c') {
                echo "Fair";
              }elseif ($ans==='d') {
                echo "Good";
              }elseif ($ans==='e') {
                echo "Excellent";
              }
              ?>
            </td>
          </tr>

          <tr>
            <td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; (3) Staff behaviour</td>
            <td>
              <?php
              $sql = "SELECT qno,
                        CASE GREATEST(a, b, c, d, e)
                          WHEN a THEN 'a'
                          WHEN b THEN 'b'
                          WHEN c THEN 'c'
                          WHEN d THEN 'd'
                          ELSE 'e'
                          END AS ans
                      FROM response WHERE qno='753'";
              $res = mysqli_query($con,$sql);
              $row = mysqli_fetch_array($res);
              $ans = $row['ans'];
              if ($ans==='a') {
                echo "Worst";
              }else if ($ans==='b') {
                echo "Bad";
              }elseif ($ans==='c') {
                echo "Fair";
              }elseif ($ans==='d') {
                echo "Good";
              }elseif ($ans==='e') {
                echo "Excellent";
              }
              ?>
            </td>
          </tr>

          <tr>
            <td>&nbsp; &nbsp; &nbsp; &nbsp; (vi) Library</td>
            <td></td>
          </tr>

          <tr>
            <td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; (1) Technical books-number and range of titles</td>
            <td>
              <?php
              $sql = "SELECT qno,
                        CASE GREATEST(a, b, c, d, e)
                          WHEN a THEN 'a'
                          WHEN b THEN 'b'
                          WHEN c THEN 'c'
                          WHEN d THEN 'd'
                          ELSE 'e'
                          END AS ans
                      FROM response WHERE qno='761'";
              $res = mysqli_query($con,$sql);
              $row = mysqli_fetch_array($res);
              $ans = $row['ans'];
              if ($ans==='a') {
                echo "Worst";
              }else if ($ans==='b') {
                echo "Bad";
              }elseif ($ans==='c') {
                echo "Fair";
              }elseif ($ans==='d') {
                echo "Good";
              }elseif ($ans==='e') {
                echo "Excellent";
              }
              ?>
            </td>
          </tr>

          <tr>
            <td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; (2) General books-number and range of titles</td>
            <td>
              <?php
              $sql = "SELECT qno,
                        CASE GREATEST(a, b, c, d, e)
                          WHEN a THEN 'a'
                          WHEN b THEN 'b'
                          WHEN c THEN 'c'
                          WHEN d THEN 'd'
                          ELSE 'e'
                          END AS ans
                      FROM response WHERE qno='762'";
              $res = mysqli_query($con,$sql);
              $row = mysqli_fetch_array($res);
              $ans = $row['ans'];
              if ($ans==='a') {
                echo "Worst";
              }else if ($ans==='b') {
                echo "Bad";
              }elseif ($ans==='c') {
                echo "Fair";
              }elseif ($ans==='d') {
                echo "Good";
              }elseif ($ans==='e') {
                echo "Excellent";
              }
              ?>
            </td>
          </tr>

          <tr>
            <td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; (3) Staff behaviour</td>
            <td>
              <?php
              $sql = "SELECT qno,
                        CASE GREATEST(a, b, c, d, e)
                          WHEN a THEN 'a'
                          WHEN b THEN 'b'
                          WHEN c THEN 'c'
                          WHEN d THEN 'd'
                          ELSE 'e'
                          END AS ans
                      FROM response WHERE qno='763'";
              $res = mysqli_query($con,$sql);
              $row = mysqli_fetch_array($res);
              $ans = $row['ans'];
              if ($ans==='a') {
                echo "Worst";
              }else if ($ans==='b') {
                echo "Bad";
              }elseif ($ans==='c') {
                echo "Fair";
              }elseif ($ans==='d') {
                echo "Good";
              }elseif ($ans==='e') {
                echo "Excellent";
              }
              ?>
            </td>
          </tr>

          <tr>
            <td>8) How is the general infrastructure of the college?</td>
            <td>
              <?php
              $sql = "SELECT qno,
                        CASE GREATEST(a, b, c, d, e)
                          WHEN a THEN 'a'
                          WHEN b THEN 'b'
                          WHEN c THEN 'c'
                          WHEN d THEN 'd'
                          ELSE 'e'
                          END AS ans
                      FROM response WHERE qno='8'";
              $res = mysqli_query($con,$sql);
              $row = mysqli_fetch_array($res);
              $ans = $row['ans'];
              if ($ans==='a') {
                echo "Worst";
              }else if ($ans==='b') {
                echo "Bad";
              }elseif ($ans==='c') {
                echo "Fair";
              }elseif ($ans==='d') {
                echo "Good";
              }elseif ($ans==='e') {
                echo "Excellent";
              }
              ?>
            </td>
          </tr>

          <tr>
            <td>9) How good are the placement efforts done by the college?</td>
            <td>
              <?php
              $sql = "SELECT qno,
                        CASE GREATEST(a, b, c, d, e)
                          WHEN a THEN 'a'
                          WHEN b THEN 'b'
                          WHEN c THEN 'c'
                          WHEN d THEN 'd'
                          ELSE 'e'
                          END AS ans
                      FROM response WHERE qno='9'";
              $res = mysqli_query($con,$sql);
              $row = mysqli_fetch_array($res);
              $ans = $row['ans'];
              if ($ans==='a') {
                echo "Worst";
              }else if ($ans==='b') {
                echo "Bad";
              }elseif ($ans==='c') {
                echo "Fair";
              }elseif ($ans==='d') {
                echo "Good";
              }elseif ($ans==='e') {
                echo "Excellent";
              }
              ?>
            </td>
          </tr>

          <tr>
            <td>10) Will you recommend your college to your siblings/friends?</td>
            <td>
              <?php
              $sql = "SELECT qno,
                        CASE GREATEST(a, b, c, d, e)
                          WHEN a THEN 'a'
                          WHEN b THEN 'b'
                          WHEN c THEN 'c'
                          WHEN d THEN 'd'
                          ELSE 'e'
                          END AS ans
                      FROM response WHERE qno='10'";
              $res = mysqli_query($con,$sql);
              $row = mysqli_fetch_array($res);
              $ans = $row['ans'];
              if ($ans==='a') {
                echo "Never";
              }else if ($ans==='b') {
                echo "No";
              }elseif ($ans==='c') {
                echo "Maybe";
              }elseif ($ans==='d') {
                echo "Yes";
              }elseif ($ans==='e') {
                echo "Surely Will!";
              }
              ?>
            </td>
          </tr>

      </tbody>
    </table>

  </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
  </body>
</html>
