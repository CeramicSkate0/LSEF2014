<?php

require 'internal/slag.php';

$t = new Slag(); // Create new template object
$t->title('Peugeot Center'); // Set the title of the page

?>
<link rel="stylesheet" href="css/slideshow.css">
<style>
	#blurb {
		background-color: #99cc00;
		border-radius: 1.875em;
		box-sizing: border-box;
		color: white;
		float: left;
		height: 19em;
		margin-top: 1em;
		padding: 1.25em;
		text-align: left;
		width: 10em;
	}
	#relief {
		background-color: #99cc00;
		background-image: url('img/logo-light.png');
		background-position: center;
		background-repeat: no-repeat;
		background-size: contain;
		border-radius: 1.5em;
		float: right;
		margin: 1em 0;
		width: 9em;
		height: 8em;
	}

	@media (max-width: 40em) {

	#blurb {
		width: 23.75%;
	}
	#relief {
		width: 22.5%;
	}

	}

	@media (max-width: 30em) {

	#blurb {
		font-size: 1.2em;
		border-radius: 0;
		height: auto;
		width: 100%;
		float: none;
	}
	#relief {
		display: none;
	}

	}
</style>
<script>
	$(document).ready(function() {
		var slides = $('#slideshow a').remove().each(function() {
			$('<div>').addClass('slide').appendTo('#slideshow')
			.css('background-image', 'url("' + $(this).attr('href') + '")');
		});
		setInterval(function() {
			$('#slideshow .slide').first().css('left', '100%').appendTo('#slideshow')
			.animate({'left': '0%'}, 1000, 'swing');
		}, 4000);

		var slides = $('#slideshow2 a').remove().each(function() {
			$('<div>').addClass('slide').appendTo('#slideshow2')
			.css('background-image', 'url("' + $(this).attr('href') + '")');
		});
		setInterval(function() {
			$('#slideshow2 .slide').first().css('right', '100%').appendTo('#slideshow2')
			.animate({'right': '0%'}, 1000, 'swing');
		}, 4000);
	});
</script>
<?php

$t->scrapeMeta();

?>
<p id="blurb">Providing engineering service in developing communities.</p>
<div id="slideshow_container">
<h1>Who are we?</h1>
<p>	The Richard S. and Mary Ann Brown Peugeot Center for Engineering 
Service to Developing Communities, founded in 2014, is a center that 
helps engineering students at Lipscomb University in Nashville, TN serve 
others across the world using the knowledge and skills learned in the 
classroom. Since 2004, the engineering students at Lipscomb have taken 
more than 25 trips to four countries. The center is named after Richard 
Peugeot and his wife, Mary Ann. Richard is an electrical engineer, and 
he and his wife are dedicated to serving others and making a difference 
in the world.</p>
</div>
<hr>
<div id="slideshow_container2">
	<div id="slideshow2" class="slideshow">
<h1>What is our mission?</h1>
<p>	It is our mission at the Peugeot Center to serve those in 
underdeveloped communities. We sponsor the engineering mission 
trips taken by those attending Lipscomb University. Trips have been 
taken to Honduras, the Dominican Republic, Guatemala, and the United 
States to construct clean water systems, develop alternative energy 
solutions, and build a total of four bridges. We hope not only to affect 
those in developing communities but to also affect the students and 
professional workers carrying out the service by developing a desire to 
serve and growing in spirituality.</p>
	</div>
</div>
<div id="relief"></div>
<?php

$t->scrapeContent();
$t->flush(); // Wipe the buffer and output the template with scraped data

?>
