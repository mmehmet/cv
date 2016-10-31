<?php

// start building the page
require_once('head.php');

require_once('top.php');

print "<div id='content'>\n";

require_once('cover.php');
include_once('summary.php');
include_once('education.php');
include_once('skills.php');
include_once('experience.php');

print "</div>\n";

require_once('tail.php');

