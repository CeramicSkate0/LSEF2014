<?php

require 'internal/slag.php';

$t = new Slag(); // Create new template object
$t->title('Peugeot Center'); // Set the title of the page

?>
<script>
	var email = 'csimmons@liscomb.edu';
	$(document).ready(function() {
		$('#send').click(function() {
			window.open('mailto:' + email + '?subject=' + encodeURI($('#subject').val()) + '&body=' + encodeURI($('#body').val()));
		});
	});
</script>
<?php

$t->scrapeMeta();

?>
<h1>Emails to Us</h1>
<form>
	<input type="text" id="subject" placeholder="Enter a Subject"><br>
	<textarea id="body" placeholder="Enter a Message"></textarea><br>
	<input type="button" id="send" value="Send">
</form>
<h1>Newsletters to You</h1>
<form action="contact.php" method="POST">
	<input type="email" name="email" placeholder="Enter Your Email">
	<input type="submit" value="Sign Up">
</form>
<?php

$t->scrapeContent();
$t->flush(); // Wipe the buffer and output the template with scraped data

?>
