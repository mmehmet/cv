<?php
if (isset($_COOKIE['width'])) {
	$widthCookie = $_COOKIE['width'];
	$sectionWidth = ($widthCookie < 1024) ? "310px" : "980px";
	$brochureWidth = ($widthCookie < 1024) ? "133px" : "458px";
} else {
	header('location:getw.php');
}

