<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
<link rel="stylesheet" href="assets/css/main.css" />
<link rel="stylesheet" href="assets/css/user.css" />
<link rel="icon" href="images/favicon.png" />
<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->

<link rel="stylesheet" href="frontlib/fancybox/jquery.fancybox.min.css" type="text/css" /> 

<script src='https://www.google.com/recaptcha/api.js?render=explicit&onload=onReCaptchaLoad'></script>

<script>
var onReCaptchaLoad = function() {
	var captchaWidgetId = grecaptcha.render( 'myCaptcha', {
		'sitekey' : '6LeAdEMUAAAAADMEzhVaC0wvWhkdtm5QJaSBziFv',  // required
		'theme' : 'light',  // optional
		'callback': 'verifyCallback'  // optional
	});
};

var verifyCallback = function( response ) {
	console.log( 'g-recaptcha-response: ' + response );
	$('#verify').val(response);
};

</script>