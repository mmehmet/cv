<?php
require_once('width.php');

$zib = $mehmetech = $cwiz = $staging = $freelance = $intentia = array();

$zib['name'] = "Zib Media / Zibit";
$zib['dates'] = "Dec 2014 - Present";
$zib['roles'] = "Senior Web & App Developer, IT Administrator";
$zib['tech'] = "HTML5, CSS3, JSON, Java, Objective C, Javascript, jQuery, AWS, git, Wordpress, GIMP, VPS, ssh/bash";
$zib['desc'] = "Full Stack Senior Developer, working across teams in both Melbourne and Adelaide. Direct liaison with stakeholders ranging from clients to developers to service providers, to ensure smooth delivery which matches expectations as well as limitations of scope. Management of servers and databases and also the company's internal IT systems. A noteworthy eye for design and creative flair has also led to consultation on a number of projects in need of a new look or 'jazzing up' - or even a complete rebuild from the ground up. Management and development of both web and native mobile applications, including management of dev team and implementation of both internal and external REST services.";

$mehmetech['name'] = "Mehmetech Pty Ltd";
$mehmetech['dates'] = "Jan 2013 - Nov 2014";
$mehmetech['roles'] = "Senior Developer, Webmaster, Systems Administrator, Database Manager, Lead Designer";
$mehmetech['tech'] = "HTML5, CSS3, AJAX, JSON, Java, Javascript, LAMP stack, SSL, bash, ssh, cron, mailer daemon, PEAR/Imagemagick/fPDF, oauth implementation of Google|Outlook/Exchange|Yahoo APIs, Xcode, Android Studio, git, Wordpress, GIMP, Libre Office";
$mehmetech['desc'] = "Lead front and back end developer, working with front end design team on eLEDGER product. Manager of both production and development servers, including database design, security and administration of internal/external access - including management of customer data, the billing and payments system, as well as email and cloud-based collaboration tools. Management of Sales and Support enquiries, including maintenance of customer self-help knowledgebase and associated tutorial system. Most recently expanded into mobile app development using both Apple and Android IDEs to bring fully integrated products into both iTunes and Google Play app stores, complementing the existing mobile device integration of the web UI.";

$cwiz['name'] = "Mic Mehmet Computer Services Pty Ltd";
$cwiz['dates'] = "Feb 2009 - Jan 2014";
$cwiz['roles'] = "PHP Developer, Systems Administrator, I.T. Consultant";
$cwiz['tech'] = "HTML4, CSS3, AJAX, XML, SOAP, JSON, Javascript, LAMP stack, IIS, SSL, bash, ssh, Photoshop/GIMP, MS Office, Exchange, Zend, Codeigniter, git, cpanel";
$cwiz['desc'] = "Systems design and troubleshooting for SME customers, with particular emphasis on (front end) multi-platform compatibility and accessibility, as well as (back end) process work flow. Working at times as part of dev team and sometimes solo.";

$staging['name'] = "Staging Connections Pty Ltd";
$staging['dates'] = "Aug 2004 - Nov 2008";
$staging['roles'] = "Project Manager, Systems Administrator, Tech Support";
$staging['tech'] = "HTML, AJAX, XML, Perl, Javascript, Linux server administration, Apache, some weird DOS based legacy database system";
$staging['desc'] = "Lead dev and sysadmin on back end inventory management tool, introducing what we would now call 'cloud services' into the IT end of operations management. Staff training and change management to new system, including ongoing support and development. (NB this project was 2008 only)";

$freelance['name'] = "freelance/contract";
$freelance['dates'] = "Feb 2000 - Aug 2004";
$freelance['roles'] = "Lead Developer, Web Developer, Web Designer, Developer";
$freelance['tech'] = "HTML, CSS, XML, PHP, Javascript, Linux, Exchange, MySQL, MSSQL, Apache, cpanel, MS Office, Photoshop, OSX";
$freelance['desc'] = "Various short and long term contracts for customers including the London Borough of Haringey, Medibank Private, and Showeb - producing work ranging from front end design and implementation to back end database migration and even developing bespoke in-house solutions for back end systems integration.";

$intentia['name'] = "Intentia";
$intentia['dates'] = "Jan 1998 - Feb 2000";
$intentia['roles'] = "Software Engineer, Operator";
$intentia['tech'] = "RPG, SQL, Java, AS-400, NT, Solaris";
$intentia['desc'] = "Working across Operations and Application Engineering (programming) on various projects for mostly large corporate clients like Pizza Hut, Avon, EDS and CBA, primarily working with proprietary ERP technology for the IBM AS-400 mainframe platform but also other platforms like Windows NT and Solaris.";

$xp = array($zib, $mehmetech, $cwiz, $staging, $freelance, $intentia);




// experience
print "\t<div class='section' style='width:$sectionWidth'>\n";
print "\t\t<a name='experience' onclick=\"togbut(this,'experience')\">+</a><h3>Experience</h3>\n";
print "\t\t<div id='experience' style='display:none;'>\n";




for ($i = 0; $i < count($xp); $i++) {
	print "\t\t\t<div ";
	if ($widthCookie < 800) {
		print "class='small '";
	}
	print "id='comp$i'";
	if ($i >0) {
		print " style='display:none'";
	}
	print ">\n";
	print "\t\t\t\t<div class='dets'>".$xp[$i]['name']."\n";
	print "\t\t\t\t<span class='dates'>".$xp[$i]['dates']."</span></div>\n";
	print "\t\t\t\t<div class='roles'>".$xp[$i]['roles']."</div>\n";
	print "\t\t\t\t<div class='desc'>".$xp[$i]['desc']."</div>\n";
	print "\t\t\t\t<div class='tech'>".$xp[$i]['tech']."</div>\n";
	if ($i < (count($xp)-1)) {
		$j = $i+1;
		print "\t\t\t\t<div class='more' onclick=\"togbut(this,'comp$j')\">more</div>\n";
	}
	print "\t\t\t</div>\n";		// company
}



print "\t\t</div>\n";			// experience
print "\t</div>\n";				// subsection

