window.onload = function() {
  var recaptcha = document.forms["myForm"]["g-recaptcha-response"];
  recaptcha.required = true;
  recaptcha.oninvalid = function(e) {
    document.getElementById('cerr').innerHTML= "recaptcha not verified";
    document.getElementById('cerr').style= " background-color : red; border-radius";
    return false;
  }
}
var onloadCallback = function() {
  grecaptcha.render('html_element', {
    'sitekey' : '6LeZEHIUAAAAANT9MBmR78Ojs0W966OBppbh49yQ'
  });
};
