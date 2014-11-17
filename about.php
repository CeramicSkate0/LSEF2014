<?php
require 'internal/slag.php';
$t = new Slag(); // Create new template object
$t->title('Peugeot Center'); // Set the title of the page
?>
<style>
	#blurb {
		background-color: #99cc00;
		border-radius: 1.875em;
		box-sizing: border-box;
		color: white;
		float: left;
		font-size: 0.8em;
		margin-top: 1.25em;
		padding: 1.25em;
		text-align: left;
		width: 100%;
	}
    #blurb h1 
    {
    font-size: 1.5em;	
    }
	@media (max-width: 40em) {
	#blurb {
		width: 100%;
		font-size: 1.5em;
	}
    #blurb h1 
    {
    font-size: 1.5em;	
    }
	@media (max-width: 30em) {
	#blurb {
		border-radius: 0;
		height: auto;
		width: 100%;
		float: none;
		font-size: 1.5em;
	}
    #blurb h1 
    {
    font-size: 2.5em;	
    }
	}
</style>
<?php
$t->scrapeMeta();
?>
<div id="blurb">
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
<div id="blurb" style="background-color:white">
<img src="img/14.png" height="50%" width="100%"><img>
</div>
<div id="blurb">
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
<div id="blurb" style="background-color:white">
<img src="img/11.png" height="50%" width="100%"><img>
</div>
<?php
$t->scrapeContent();
$t->flush(); // Wipe the buffer and output the template with scraped data
?>
