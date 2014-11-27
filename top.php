<?php
require_once('width.php');

// add a menu bar at the top
print "\t<a id='masthead' href='./#top'><span id='menubut' title='open menu' onclick=\"togviz('menu')\">&#8801;</span></a>\n";

// the actual menu
print "\t<div id='menu' style='display:none' onclick=\"togviz('menu')\">\n";
print "\t\t<a href='#education' onclick=\"openme('education')\">Education</a>\n";
print "\t\t<a href='#skills' onclick=\"openme('skills')\">Skills Matrix</a>\n";
print "\t\t<a href='#experience' onclick=\"openme('experience')\">Experience</a>\n";
print "\t\t<a href='dl/MMCV.pdf'>Download</a>\n";
print "\t\t<a href='https://www.linkedin.com/profile/view?id=76695643'>LinkedIn</a>\n";
print "\t</div>\n";				// menu


// add the cover photo
require_once('cover.php');

