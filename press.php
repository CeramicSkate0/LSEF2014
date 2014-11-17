<?php

require 'internal/slag.php';

$t = new Slag();
$t->title("Files - Peugeot Center");

?>
<style>
	main>h1 {
		border-bottom: 2px solid black;
		font-size: 1.5em;
		font-weight: bold;
		margin: 0.5em;
		margin-bottom: 0;
	}
	main>ul {
		margin: 0.7em;
		margin-top: 0;
	}
</style>
<?php

$t->scrapeMeta();

?>
<h1>Press Releases</h1>
<?php

// Scan the files directory and generate a list of links to the files
$file = scandir('files');
echo '<ul>';
foreach ($file as $f) {
	if ($f == '.' or $f == '..') continue;
	echo "<li><a href=\"files/{$f}\">{$f}</a> &mdash; " . date("Y-m-d", filemtime('files/'.$f)) . "</li>";
}
echo '</ul>';

$t->scrapeContent();
$t->flush();

?>
