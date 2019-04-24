<?php 
$page = "contatti";
include "controllers/common.inc.php";
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Nafidha Holiday Taste - Contatti</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<?php include('parts/includes.inc.php'); ?>
		<?php include('parts/metatags.inc.php'); ?>
	</head>
	<body>
		<div id="page-wrapper">

			<!-- Header -->
			<?php include('parts/header.inc.php'); ?>
			
			<!-- Main -->
				<div id="main" class="wrapper style1">
					<div class="container">
						<header class="major">
							<h2><?php if($jsonpage) echo($jsonpage->header); ?></h2>
							<p><?php if($jsonpage) echo($jsonpage->intro); ?></p>
						</header>
						
						<!-- Form -->
						<section>
							<h3><?php if($jsonpage) echo($jsonpage->formheader); ?></h3>
							<form method="post" action="#" id="contactform">
								<div class="row uniform 50%">
									<div class="6u 12u$(xsmall)">
										<input type="text" name="contactname" id="contactname" value="" placeholder="<?php echo(LBLFRMNAME); ?>" />
									</div>
									<div class="6u$ 12u$(xsmall)">
										<input type="email" name="contactemail" id="contactemail" value="" placeholder="<?php echo(LBLFRMEMAIL); ?>" />
									</div>
									<div class="12u$">
										<textarea name="contactmsg" id="contactmsg" placeholder="<?php echo(LBLFRMMESSAGE); ?>" rows="6"></textarea>
									</div>
									<div id="myCaptcha"></div>
									<input type="hidden" name="verify" id="verify" />
									<div class="12u$">
										<ul class="actions">
											<li><input type="submit" id="submitbutton" value="<?php echo(LBLFRMSENDMESSAGE); ?>" class="special" /></li>
											<li><input type="reset" value="<?php echo(LBLFRMRESET); ?>" /></li>
										</ul>
									</div>
									
								</div>
							</form>
						</section>
						
						<section>
							<div class="map" style="width: 100%">
								<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2988.909887691242!2d12.609485515085389!3d41.48455327925538!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1325bcc88dc5d515%3A0xf27ff26d67bc607!2sVia+Adda%2C+32%2C+00042+Anzio+RM!5e0!3m2!1sit!2sit!4v1493676080057" style="border:0;width: 100%" allowfullscreen></iframe>
							</div>
						</section>
						
					</div>
				</div>

			<!-- Footer -->
			<?php include('parts/footer.inc.php'); ?>

		</div>

		<!-- Scripts -->
		<?php include('parts/scripts.inc.php')?>
		
		<script type="text/javascript">
		$(function() {
			
			
			
			$('#submitbutton').click(function(e) {
				
				e.preventDefault();

				/* Validation. */
				var validationError = false;
				if(!$('#contactname').val()) {
					$('#contactname').addClass("inputrequired");
					validationError = true;
				}
				if(!$('#contactemail').val()) {
					$('#contactemail').addClass("inputrequired");
					validationError = true;
				}
				if(!$('#contactmsg').val()) {
					$('#contactmsg').addClass("inputrequired");
					validationError = true;
				}

				if(!$('#verify').val()) {
					validationError = true;
				}
	
				if(!validationError) {
					var sendData = {
						'contactname': $('#contactname').val(),
						'contactemail': $('#contactemail').val(),
						'contactmsg': $('#contactmsg').val(),
						'verify': $('#verify').val()
					};
					
					//alert(JSON.stringify(sendData));
					
					$.ajax({
						type: "POST",
						url: "sendmail.php",
						data: sendData,
						dataType: 'json',
						success: function(data){
							$('#contactform').html(data.message);
							if(data.status == "error") $('#contactform').addClass("inputrequired");
						},
						error:function(){
							$('#contactform').html("Sending email has generated errors!");
							$('#contactform').addClass("inputrequired");
						}
					});
				}
			});
		});
		</script>		
	</body>
</html>