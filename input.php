<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
        crossorigin="anonymous">
    <link rel="stylesheet" href="main.css" />
    <title>Svce-feedback</title>
    <script>
    var v = 0;
    function update(v) {
      document.getElementById('progress-bar').style.width = v + "%";
      document.getElementById('progress-bar').innerHTML   = v + "%";
    }

    </script>
  </head>
  <body>
    <?php include('con.php') ?>

    <div class="container">
      <form>
        <div class="form-group">

          <div class="jumbotron mx-auto" style="margin-top:10%;">

            <div class="jumbotron" id="1">
              1) How do teachers manage classes?<br /><br /><br />

              <center>

                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="q1" id="p1" value="1" onclick="update(10);">
                  <label class="form-check-label" for="p1">
                    1
                  </label>
                </div>

                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="q1" id="b1" value="2" onclick="update(10);">
                  <label class="form-check-label" for="b1">
                    2
                  </label>
                </div>

                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="q1" id="f1" value="3" onclick="update(10);">
                  <label class="form-check-label" for="f1">
                    3
                  </label>
                </div>

                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="q1" id="g1" value="4" onclick="update(10);">
                  <label class="form-check-label" for="g1">
                    4
                  </label>
                </div>

                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="q1" id="vg1" value="5" onclick="update(10);">
                  <label class="form-check-label" for="vg1">
                    5
                  </label>
                </div>

              </center>

            </div>

            <div class="jumbotron" id="1">
              2) How do teachers manage classes?<br /><br /><br />

              <center>

                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="q2" id="p2" value="1" onclick="update(20);">
                  <label class="form-check-label" for="p2">
                    1
                  </label>
                </div>

                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="q2" id="b2" value="2" onclick="update(20);">
                  <label class="form-check-label" for="b2">
                    2
                  </label>
                </div>

                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="q2" id="f2" value="3" onclick="update(20);">
                  <label class="form-check-label" for="f2">
                    3
                  </label>
                </div>

                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="q2" id="g2" value="4" onclick="update(20);">
                  <label class="form-check-label" for="g2">
                    4
                  </label>
                </div>

                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="q2" id="vg2" value="5" onclick="update(20);">
                  <label class="form-check-label" for="vg2">
                    5
                  </label>
                </div>

              </center>

            </div>

          </div>
        </div>
      </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
  </body>
</html>
