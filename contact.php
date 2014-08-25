<?
require_once "top.php";
require_once('libs/recaptchalib.php');
	$privatekey = "6LeFJfkSAAAAAIeQOktLXBSqyM_0Kddby_M1i2Ut";
?>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.0/jquery.validate.min.js"></script>
<div class="the-names">
	<h2 class="soon">Contact Us</h2>
</div>
<?php
if (isset($_POST['submit'])) {
		$resp = recaptcha_check_answer ($privatekey,
									$_SERVER["REMOTE_ADDR"],
									$_POST["recaptcha_challenge_field"],
									$_POST["recaptcha_response_field"]);

		if (!$resp->is_valid) {
		// What happens when the CAPTCHA was entered incorrectly
		die ("<p class='valid error'>The reCAPTCHA wasn't entered correctly. Go back and try it again.</p>" .
			 "<p class='valid error'>(reCAPTCHA said: " . $resp->error . ")</p>");
		} else {
		// Your code here to handle a successful verification
		echo "<p class='valid'>Email Sent</p>";
		}
	}
?>
<div class="form-wrapp">
	<div class="form-inner-wrapp">
		<form id="contact-form" action="contact" method="post">
			<label>Your Name</label><br/><input type="text" id="yourname" name="yourname" minlength="5" required/><br/><br/>
			<label>Your Email</label><br/><input type="email" id="email" name="email" required /><br/><br/>
			<label>Your Subject</label><br/><input type="text" id="subject" name="subject" minlength="5" required/><br/><br/>
			<label>Your Message</label><br/><textarea rows="10" cols="40" id="message" name="message" required></textarea><br/><br/>
			<?php          
				  $publickey = "6LeFJfkSAAAAAOyH_4KhuPDJbpK5YJE9wSuYk693"; // you got this from the signup page
				  echo recaptcha_get_html($publickey);
			?>
			<br/><input type="submit" name="submit" value="Submit"/>
		</form>
	</div>
</div>

<script> $("#contact-form").validate(); </script>
<?
require_once "bottom.php";
?>