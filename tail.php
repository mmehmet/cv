<?php
require_once('width.php');

print "\t<div id='tail'";

// thank you text
if ($widthCookie < 1000) {
	print " style='height:300px'>\n\t\t<div id='thx'>Thanks for your interest!</div>\n";
} else {
	print ">\n\t\t<span id='thx'>Thanks for your interest!</span>\n";
}

// pdf link
print "\t\t<a href='dl/MMCV.pdf'>";
if ($widthCookie < 1000) {
	print "<div id='pdf'><img src='img/pdf.png' alt='pdf' width='80' height='80' /> Download the PDF</div>";
} else {
	print "<span id='pdf'><img src='img/pdf.png' alt='pdf' width='80' height='80' /> Download the PDF</span>";
}
print "</a>\n";

// linkedin
print "\t\t<a href='https://www.linkedin.com/profile/view?id=76695643'><div id='linked'><img src='img/linked.png' alt='in' width='80' height='80' /> Connect with me on <div id='lin'>LinkedIn</div></div></a>\n";

print "\t</div>\n";				// tail
print "</body>\n";
print "</html>\n";
