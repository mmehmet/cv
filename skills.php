<?php
require_once('width.php');

$high = array("HTML", "CSS", "AJAX", "JSON", "XML/XSLT", "Linux System Administration", "Apache", "MySQL", "PHP", "git", "bash", "ssh", "cron");
$mid = array("mail/Dovecot/Postfix/EXIM/IMAP/POP3", "PEAR/PECL", "Imagemagick", "fPDF", "SOAP/REST", "oauth/API integration", "Java", "Javascript", "Photoshop/GIMP", "Office/Libre Office", "SSL");
$low = array("Xcode/IOS app development", "Android Studio/Android app development", "various MVC frameworks and IDEs", "Python", "Perl", "Joomla", "jQuery", "Wordpress", "IIS", "Exchange");

print "\t<div class='section' style='width:$sectionWidth'>\n";

// skills matrix
print "\t\t<a name='skills' onclick=\"togbut(this,'skills')\">+</a><h3>Skills Matrix</h3>\n";

print "\t\t<div id='skills' style='display:none' class='brochure";
if ($widthCookie < 800) {
	print "-sm";
}
print "'>\n";

print "\t\t\t<div class='attr'><span>Highly Proficient</span></div>\n";
print "\t\t\t<div class='val'>";
for ($i = 0; $i < count($high); $i++) {
	print $high[$i];
	if ($i < (count($high)-1)) {
		print ", ";
	}
}
print "</div>\n";

print "\t\t\t<div class='attr'><span>Competent</span></div>\n";
print "\t\t\t<div class='val'>";
for ($i = 0; $i < count($mid); $i++) {
	print $mid[$i];
	if ($i < (count($mid)-1)) {
		print ", ";
	}
}
print "</div>\n";

print "\t\t\t<div class='attr'><span>Have Used</span></div>\n";
print "\t\t\t<div class='val'>";
for ($i = 0; $i < count($low); $i++) {
	print $low[$i];
	if ($i < (count($low)-1)) {
		print ", ";
	}
}
print "</div>\n";

print "\t\t</div>\n";			// brochure

print "\t</div>\n";				// skills matrix

