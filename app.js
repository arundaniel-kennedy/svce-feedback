window.onload = function() {
  var recaptcha = document.forms["myForm"]["g-recaptcha-response"];
  recaptcha.required = true;
  recaptcha.oninvalid = function(e) {
    document.getElementById('cerr').innerHTML= "captcha not verified";
    document.getElementById('cerr').style= "background-color : #EA4335; color : white; width : 200px; border-radius: 5px;";
    return false;
  }
  recaptcha.onvalid = function(s){
    window.location.href = '/input.php';
    return true;
  }
}

var onloadCallback = function() {
  grecaptcha.render('html_element', {
    'sitekey' : '6LeZEHIUAAAAANT9MBmR78Ojs0W966OBppbh49yQ'
  });
};
