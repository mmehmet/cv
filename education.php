<?php
require_once('width.php');

print "\t<div class='section' style='width:$sectionWidth'>\n";

// education
print "\t\t<a name='education' onclick=\"togbut(this,'education')\">+</a><h3>Education</h3>\n";

print "\t\t<div id='education' style='display:none' class='brochure";
if ($widthCookie < 800) {
	print "-sm";
}
print "'>\n";

print "\t\t\t<div class='attr'><span class='year'>2014</span>Startup Leadership Program</div>\n";
print "\t\t\t<div class='val'>Fellowship</div>\n";

print "\t\t\t<div class='attr'><span class='year'>2000</span>Macarthur Business Enterprise Centre</div>\n";
print "\t\t\t<div class='val'>Cert. IV - Business Management</div>\n";

print "\t\t\t<div class='attr'><span class='year'>1998</span>University of New South Wales</div>\n";
print "\t\t\t<div class='val'>MA - Cognitive Science</div>\n";

print "\t\t\t<div class='attr'><span class='year'>1996</span>University of New South Wales</div>\n";
print "\t\t\t<div class='val'>BSc - Science and Mathematics (CS major)</div>\n";

print "\t\t</div>\n";			// brochure

print "\t</div>\n";				// education

