<?php
// make sure cookie for width value is set
require_once('width.php');

// maybe this should be hard-coded
$titletag = $meta = "Michael Mehmet";


// start building the page
require_once('head.php');
print"<body onload='widthCookie()' onresize='widthCookie()'>\n";

require_once('top.php');

include_once('summary.php');
include_once('education.php');
include_once('skills.php');
include_once('experience.php');

require_once('tail.php');

