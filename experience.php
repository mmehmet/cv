<?php

const TP = 'The Pistol';
const VC = 'VidCorp';
const LC = 'Loyalty Corp / EonX';
const ZIB = 'Zib Digital / Zibit';
const MEHMETECH = 'Mehmetech Pty Ltd';
const MMCS = 'Mic Mehmet Computer Services Pty Ltd';

const DATES = [
    TP => 'Nov 2021 -',
    VC => 'Oct 2018 - Nov 2021',
    LC => 'Dec 2016 - Oct 2018',
    ZIB => 'Dec 2014 - Dec 2016',
    MEHMETECH => 'Jan 2013 - Nov 2014',
    MMCS => 'Feb 2009 - Jan 2014',
];

const ROLES = [
    TP => ['Senior PHP Developer', 'DevOps', 'BA'],
    VC => ['Senior PHP Developer', 'DevOps', 'SecOps', 'Head of Integrations'],
    LC => ['Senior PHP Developer', 'DevOps'],
    ZIB => ['Senior Web & App Developer', 'IT Administrator'],
    MEHMETECH => ['Senior Developer', 'Webmaster', 'Systems Administrator', 'Database Manager', 'Lead Designer'],
    MMCS => ['PHP Developer', 'Systems Administrator', 'I.T. Consultant'],
];

const DESC = [
    TP => 'Heading up the “Bespoke Projects” dev team, running a team of (overseas) remote devs and also doing dev work as needed. Introduced unit testing and encouraged test-driven development as well as Best Practices and modern coding standards. Created many projects from scratch, working in a mix of environments including working within CMS environments provided by clients. Delivering products either as Docker images for containerised deployments or as packages within the CMS or sometimes entirely self-contained microsites – involving a complete CI solution from git commit to fully functioning Production website running on scalable AWS infrastructure. Also technical consultation and quoting on client briefs, including scoping and assessment of available resources.',
    VC => 'Brought the team up to modern standards: daily stand-ups, code reviews, proper documentation and procedures - including User Stories, Acceptance Criteria, testing, and deployments. Spearheaded integrations with the likes of Klaviyo, Zapier, and Salesforce. Instrumental in eradicating solutions based around quick hacks and raw SQL - focussing instead on more modular solutions which are properly tested and scalable, using microservices and external services such as ElasticSearch, where possible. Also introduced mission critical tools such as Papertrail for logging and Jenkins for deployments, creating a much more robust system which can easily scale up and down as needed and without falling over or losing data.',
    LC => 'Primarily using the Laravel framework, working on both the flagship eWallet product as a back-end developer, as well as heading and maintaining the Engagement platform, which is utilised by eWallet as well as directly by Loyalty Corp clients, as a full stack senior developer and operations manager. Both products involved managing AWS resources and assets as well as code reviews and deployments to testing, UAT, and Production resources. The latter also required building a front-end for management of the Gamification projects used by Engagement clients – allowing self-service solutions for building and maintaining Rules, Rewards, Tiers, etc – as well as a Single-Sign-On solution, a Wordpress plugin, and even an iFrame solution for delivering in-app content using JS and Amazon S3.',
    ZIB => 'Full Stack Senior Developer, working across teams in both Melbourne and Adelaide. Directly liaised with stakeholders ranging from clients to external developers to service providers, ensuring smooth delivery which matches expectations as well as limitations of scope. Managed servers and databases and also internal IT systems. Due to noteworthy eye for design and creative flair, consulted on projects in need of a new look or "jazzing up" - occasionally, completely rebuilt website from the ground up. Managed and developed both web and native mobile applications, managed dev team and external developer assets, as well as private git repositories. Implemented REST API services, managed and deployed AWS assets, administered linux-based servers, including MySQL-based databases. Developed and implemented bank-level security practices for a FINTECH application with major Australian banking partner. Introduced new collaboration tools, such as Slack and Basecamp. Delivered VPN solution to allow secure access to sensitive data, outside of the office and trained staff how to set up and use it.',
    MEHMETECH => 'Lead front and back end developer, working with front end design team on eLEDGER product. Managed both production and development servers, including database design, security and administration of internal/external access. Managed customer data, feature-rich billing and payments system, as well as cloud-based collaboration tools. Oversaw management of Sales and Support enquiries, including maintenance of customer self-help knowledgebase and associated tutorial system. Developed mobile app on both iOS and Android platforms to bring fully integrated products into both iTunes and Google Play app stores, complementing the existing mobile device integration of the web UI. Delivered oauth implementation of Google, Outlook, Exchange, and Yahoo APIs.',
    MMCS => 'Systems design and troubleshooting for SME customers, with particular emphasis on (front end) multi-platform compatibility and accessibility, as well as (back end) process work flow. Worked both as part of dev team and sometimes solo, including patching of legacy code.',
];

const TECH_TP = ['Laravel', 'Typescript', 'React', 'Node.js', 'REST', 'Docker', 'Vagrant', 'Azure', 'GitHub', 'PHP 7.4', 'PHP 8.1', 'phpunit', 'jest', 'Slack', 'Postman', 'AWS', 'JIRA', 'Asana', 'Facebook Graph API/Javascript SDK'];

const TECH_VC = [
    'Laravel',
    'CodeIgniter',
    'React',
    'Node.js',
    'REST',
    'Lambda-based microservices',
    'oAuth',
    'Docker',
    'Vagrant',
    'ssl/bash',
    'NginX',
    'Apache',
    'MySQL',
    'ElasticSearch',
    'Solr',
    'PHP5',
    'PHP7',
    'SMPP',
    'RabbitMQ/SQS/AMQP',
    'phpunit',
    'jest',
    'Jenkins',
    'Papertrail',
    'Slack',
    'Postman - including API documentation',
    'Atlassian suite',
    'AWS',
    'VPN',
    'PHPStorm',
];

const TECH_LC = [
    'Laravel',
    'Lumen',
    'jQuery',
    'Angular',
    'Bootstrap3',
    'Bower',
    'Gulp',
    'REST',
    'SOAP',
    'GraphQL',
    'CORS',
    'oAuth',
    'JWT',
    'ssl/bash',
    'NginX',
    'MySQL',
    'DynamoDB',
    'PHP7',
    'Node.js',
    'SQS',
    'phpunit',
    'Vagrant',
    'Docker',
    'Papertrail',
    'Slack',
    'Postman',
    'Wordpress plugin development',
    'JIRA/Confluence/Bitbucket/etc',
    'AWS',
    'VPN',
    'PHPStorm',
];

const TECH_ZIB = [
    'HTML5',
    'CSS3',
    'Java',
    'Objective C',
    'Javascript',
    'jQuery',
    'oauth',
    'ssl/bash',
    'Apache',
    'MySQL',
    'PHP5',
    'git',
    'cpanel',
    'composer',
    'Wordpress plugin development',
    'Google API',
    'GIMP',
    'Slack',
    'Basecamp',
    'PHPStorm',
    'xCode',
    'Android Studio',
    'VPN',
    'Google/Apple app stores',
    'AWS',
];

const TECH_MEHMETECH = [
    'Java',
    'Javascript',
    'HTML5',
    'CSS3',
    'AJAX',
    'cron',
    'mailer daemon',
    'git',
    'oauth',
    'ssl/bash',
    'Apache',
    'MySQL',
    'PHP5',
    'PEAR/Imagemagick/fPDF',
    'xCode',
    'Android Studio',
    'Wordpress',
    'GIMP',
    'Libre Office',
];

const TECH_MMCS = [
    'CodeIgniter',
    'HTML4',
    'CSS3',
    'AJAX',
    'XML',
    'SOAP',
    'JSON',
    'Javascript',
    'IIS',
    'ssl/bash',
    'Apache',
    'MySQL',
    'PHP5',
    'Photoshop/GIMP',
    'Microsoft Office',
    'Microsoft Exchange',
    'git',
    'cpanel',
];

const EXP_TP = [
    TP => [
        'dates' => DATES[TP],
        'roles' => ROLES[TP],
        'desc' => DESC[TP],
        'tech' =>  TECH_TP,
    ],
];

const EXP_VC = [
    VC => [
        'dates' => DATES[VC],
        'roles' => ROLES[VC],
        'desc' => DESC[VC],
        'tech' => TECH_VC,
    ],
];

const EXP_LC = [
    LC => [
        'dates' => DATES[LC],
        'roles' => ROLES[LC],
        'desc' => DESC[LC],
        'tech' => TECH_LC,
    ],
];

const EXP_ZIB = [
    ZIB => [
        'dates' => DATES[ZIB],
        'roles' => ROLES[ZIB],
        'desc' => DESC[ZIB],
        'tech' => TECH_ZIB,
    ],
];

const EXP_MEHMETECH = [
    MEHMETECH => [
        'dates' => DATES[MEHMETECH],
        'roles' => ROLES[MEHMETECH],
        'desc' => DESC[MEHMETECH],
        'tech' => TECH_MEHMETECH,
    ],
];

const EXP_MMCS = [
    MMCS => [
        'dates' => DATES[MMCS],
        'roles' => ROLES[MMCS],
        'desc' => DESC[MMCS],
        'tech' => TECH_MMCS,
    ],
];

$experience = [EXP_TP, EXP_VC, EXP_LC, EXP_ZIB, EXP_MEHMETECH, EXP_MMCS];

$out = <<<HTML
<div class="section fp-auto-height" data-anchor="experience">
	<h3>Experience</h3>
HTML;

foreach ($experience as $company) {
    foreach ($company as $name => $arr) {
        $dates = $inner = '';
        foreach ($arr as $key => $value) {
            $value = is_array($value) ? implode(', ', $value) : $value;
            $div = "<div class='{$key}'>{$value}</div>";
            if ($key === 'dates') {
                $dates = $div;
            } else {
                $inner .= $div;
            }
        }

        $out .= <<<HTML
    <div class="company">
        <div class="head">{$name}{$dates}</div>
        {$inner}    
    </div>
HTML;
    }
}

$out .= <<<HTML
</div>
HTML;


echo $out;
