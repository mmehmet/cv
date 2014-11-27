<?php
require_once('width.php');

// cover photo and heading - "above the fold"
print "\t<a name='top'></a><div id='cover'>\n";
print "\t\t<img id='cover' src='img/cover.jpg' alt='cover photo' width='1920' height='1080' />\n";

// title
print "\t\t<div id='title";
if ($widthCookie < 800) {
	print "-sm";
}
print "'>\n";
print "\t\t<h1>Michael Mehmet</h1>\n";
print "\t\t<h2>Senior Developer</h2>\n";
print "\t\t</div>\n";			// title


print "\t</div>\n";				// cover
