<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
        crossorigin="anonymous">
    <link rel="stylesheet" href="main.css" />
    <title>Svce-feedback</title>
    <script>

    function update(v) {
      document.getElementById('progress-bar').style.width = v+"%";
      document.getElementById('progress-bar').innerHTML  = v+"%";
    }

    </script>
  </head>
  <body>
    <?php include('con.php') ?>

    <div class="container">
      <form>
        <div class="form-group">
          <div style="margin-top:10%;">
            <div class="progress fixed-top"  style="height:50px;">
              <div class="progress-bar  bg-success" id="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                0
              </div>
            </div>
          </div>

          <div class="jumbotron mx-auto" style="margin-top:5%;">

            <div class="jumbotron" id="1">
              1) How do teachers manage classes?<br /><br /><br />

              <center>

                <div class="custom-control custom-radio custom-control-inline mb-3">
                  <input type="radio" id="poor1" name="answer1" class="custom-control-input" value="1" onclick="update('10')">
                  <label class="custom-control-label" for="poor">1</label>
                </div>

                <div class="custom-control custom-radio custom-control-inline mb-3">
                  <input type="radio" id="bad1" name="answer1" class="custom-control-input" value="2" onclick="update('10');">
                  <label class="custom-control-label" for="bad">2</label>
                </div>

                <div class="custom-control custom-radio custom-control-inline mb-3">
                  <input type="radio" id="fair1" name="answer1" class="custom-control-input" value="3" onclick="update('10');">
                  <label class="custom-control-label" for="fair">3</label>
                </div>

                <div class="custom-control custom-radio custom-control-inline mb-3">
                  <input type="radio" id="good1" name="answer1" class="custom-control-input" value="4" onclick="update('10');">
                  <label class="custom-control-label" for="good">4</label>
                </div>

                <div class="custom-control custom-radio custom-control-inline mb-3">
                  <input type="radio" id="verygood1" name="answer1" class="custom-control-input" value="5" onclick="update('10');">
                  <label class="custom-control-label" for="verygood">5</label>
                </div>

              </center>

            </div>

            <div class="jumbotron" id="2">
              2) How are practical sessions handled?<br /><br /><br />

              <center>

                <div class="custom-control custom-radio custom-control-inline mb-3">
                  <input type="radio" id="poor2" name="answer2" class="custom-control-input" value="1" onclick="update('20')">
                  <label class="custom-control-label" for="poor">1</label>
                </div>

                <div class="custom-control custom-radio custom-control-inline mb-3">
                  <input type="radio" id="bad2" name="answer2" class="custom-control-input" value="2" onclick="update('20');">
                  <label class="custom-control-label" for="bad">2</label>
                </div>

                <div class="custom-control custom-radio custom-control-inline mb-3">
                  <input type="radio" id="fair2" name="answer2" class="custom-control-input" value="3" onclick="update('20');">
                  <label class="custom-control-label" for="fair">3</label>
                </div>

                <div class="custom-control custom-radio custom-control-inline mb-3">
                  <input type="radio"  id="good2" name="answer2" class="custom-control-input" value="4" onclick="update('20');">
                  <label class="custom-control-label" for="good">4</label>
                </div>

                <div class="custom-control custom-radio custom-control-inline mb-3">
                  <input type="radio" id="verygood2" name="answer2" class="custom-control-input" value="5" onclick="update('20');">
                  <label class="custom-control-label" for="verygood">5</label>
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
