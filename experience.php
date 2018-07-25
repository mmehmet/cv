	<div class="section fp-auto-height" data-anchor="experience">
		<h3>Experience</h3>
<?php

$lc = $zib = $mehmetech = $cwiz = $staging = $freelance = $intentia = array();

$lc['name'] = "Loyalty Corp";
$lc['dates'] = "Dec 2016 - ";
$lc['roles'] = "Senior PHP Developer, DevOps";
$lc['desc'] = "Primarily using the Laravel framework, working on both the flagship eWallet product as a back-end developer, as well as heading and maintaining the Engagement platform, which is utilised by eWallet as well as directly by Loyalty Corp clients, as a full stack senior developer and operations manager. Both products involved managing AWS resources and assets as well as code reviews and deployments to testing, UAT, and Production resources. The latter also required building a front-end for management of the Gamification projects used by Engagement clients – allowing self-service solutions for building and maintaining Rules, Rewards, Tiers, etc – as well as a Single-Sign-On solution, a Wordpress plugin, and even an iFrame solution for delivering in-app content using JS and Amazon S3.";
$lc['tech'] = "PHP, Laravel, MySQL, jQuery, Angular, CSS, Bootstrap, git, Bitbucket, Docker, Vagrant, ssh, Slack, Wordpress,  NodeJS, Bower, Gulp, NginX, CORS, JIRA, AWS, REST, SOAP, Composer, oAuth, JWT";

$zib['name'] = "Zib Media / Zibit";
$zib['dates'] = "Dec 2014 - Dec 2016";
$zib['roles'] = "Senior Web & App Developer, IT Administrator";
$zib['desc'] = "Full Stack Senior Developer, working across teams in both Melbourne and Adelaide. Directly liaised with stakeholders ranging from clients to external developers to service providers, ensuring smooth delivery which matches expectations as well as limitations of scope. Managed servers and databases and also the company's internal IT systems. Due to noteworthy eye for design and creative flair, consulted on projects in need of a new look or 'jazzing up' - occasionally,  completely rebuilt website from the ground up. Managed and developed both web and native mobile applications, managed dev team and external developer assets, as well as private git repositories. Implemented REST API services, managed and deployed AWS assets, administered linux-based servers, including MySQL-based databases. Developed and implemented <b>bank-level</b> security practices for a FINTECH application with major Australian banking partner. Introduced new collaboration tools, such as Slack and Basecamp. Delivered VPN solution to allow secure access to sensitive data, outside of the office and trained staff how to set up and use it.";
$zib['tech'] = "HTML5, CSS3, JSON, Java, Objective C, Javascript, jQuery, AWS, git, Wordpress, GIMP, MySQL, ssh/bash, oauth, Slack, Basecamp, Google Apps, PHPStorm, Composer, VPN";

$mehmetech['name'] = "Mehmetech Pty Ltd";
$mehmetech['dates'] = "Jan 2013 - Nov 2014";
$mehmetech['roles'] = "Senior Developer, Webmaster, Systems Administrator, Database Manager, Lead Designer";
$mehmetech['desc'] = "Lead front and back end developer, working with front end design team on eLEDGER product. Managed both production and development servers, including database design, security and administration of internal/external access. Managed customer data, feature-rich billing and payments system, as well as cloud-based collaboration tools. Oversaw management of Sales and Support enquiries, including maintenance of customer self-help knowledgebase and associated tutorial system. Developed mobile app on both iOS and Android platforms to bring fully integrated products into both iTunes and Google Play app stores, complementing the existing mobile device integration of the web UI. Delivered oauth implementation of Google, Outlook, Exchange, and Yahoo APIs.";
$mehmetech['tech'] = "HTML5, CSS3, AJAX, JSON, Java, Javascript, LAMP stack, SSL, bash, ssh, cron, mailer daemon, PEAR/Imagemagick/fPDF, oauth, xCode, Android Studio, git, Wordpress, GIMP, Libre Office";

$cwiz['name'] = "Mic Mehmet Computer Services Pty Ltd";
$cwiz['dates'] = "Feb 2009 - Jan 2014";
$cwiz['roles'] = "PHP Developer, Systems Administrator, I.T. Consultant";
$cwiz['desc'] = "Systems design and troubleshooting for SME customers, with particular emphasis on (front end) multi-platform compatibility and accessibility, as well as (back end) process work flow. Worked both as part of dev team and sometimes solo, including patching of legacy code.";
$cwiz['tech'] = "HTML4, CSS3, AJAX, XML, SOAP, JSON, Javascript, LAMP stack, IIS, SSL, bash, ssh, Photoshop/GIMP, MS Office, Exchange, Zend, Codeigniter, git, cpanel";

$staging['name'] = "Staging Connections Pty Ltd";
$staging['dates'] = "Aug 2004 - Nov 2008";
$staging['roles'] = "Project Manager, Systems Administrator, Tech Support";
$staging['desc'] = "Lead both dev and systems administration on cloud-based back end inventory management tool - introducing the technology into operations management. Trained staff and oversaw change management to the new system. (Note: this project was 2008 only)";
$staging['tech'] = "HTML, AJAX, XML, Perl, Javascript, Linux server administration, Apache, some weird DOS based legacy database system";

$freelance['name'] = "freelance/contract";
$freelance['dates'] = "Feb 2000 - Aug 2004";
$freelance['roles'] = "Lead Developer, Web Developer, Web Designer, Developer";
$freelance['desc'] = "Completed various short and long term contracts for customers including the London Borough of Haringey, Medibank Private, and Showeb. Produced work ranging from front end design and implementation to back end database migration and even developed (bespoke) in-house solutions for back end systems integration.";
$freelance['tech'] = "HTML, CSS, XML, PHP, Javascript, Linux, Exchange, MySQL, MSSQL, Apache, cpanel, MS Office, Photoshop, OSX";

$intentia['name'] = "Intentia";
$intentia['dates'] = "Jan 1998 - Feb 2000";
$intentia['roles'] = "Software Engineer, Operator";
$intentia['desc'] = "Worked across Operations and Application Engineering (programming) on various projects for mostly large corporate clients like Pizza Hut, Avon, EDS and CBA. primarily worked with proprietary ERP technology for the IBM AS-400 mainframe platform but also other platforms like Windows NT and Solaris.";
$intentia['tech'] = "RPG, SQL, Java, AS-400, NT, Solaris";

$xp = array(
	$lc,
	$zib,
	$mehmetech,
	$cwiz,
	$staging,
	$freelance,
	$intentia
);




for ($i = 0; $i < count($xp); $i++) {
	print "\t\t<div class='company'>\n";
	print "\t\t\t<div class='dets'>".$xp[$i]['name']."\n";
	print "\t\t\t<div class='dates'>".$xp[$i]['dates']."</div></div>\n";
	print "\t\t\t<div class='roles'>".$xp[$i]['roles']."</div>\n";
	print "\t\t\t<div class='desc'>".$xp[$i]['desc']."</div>\n";
	print "\t\t\t<div class='tech'>".$xp[$i]['tech']."</div>\n";
	print "\t\t</div>\n";		// company
}
?>
	</div>
