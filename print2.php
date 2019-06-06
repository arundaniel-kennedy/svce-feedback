<!DOCTYPE html>
<html lang="en" dir="ltr">
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
        <thead>
          <tr>
            <th scope="col">Qno</th>
            <th scope="col">1</th>
            <th scope="col">2</th>
            <th scope="col">3</th>
          </tr>
        </thead>
        <tbody>

        <?php

        include("con.php");
        $sql = mysqli_query($con,"SELECT * FROM response");

        while(($row = mysqli_fetch_array($sql))) {

            echo("<tr>");
            echo("<th scope='row'>".$row["qno"]."</th>");
            echo("<td>".$row["a"]."</td>");
            echo("<td>".$row["b"]."</td>");
            echo("<td>".$row["c"]."</td>");
            echo("<td>".$row["d"]."</td>");
            echo("<td>".$row["e"]."</td>");
            echo("</tr>");

        }

        ?>

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
