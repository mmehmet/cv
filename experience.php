<?php

const BANXA = 'Banxa';
const TP = 'The Pistol';
const VC = 'VidCorp / Tall Bob';
const LC = 'Loyalty Corp / EonX';
const ZIB = 'Zib Digital / Zibit';
const MEHMETECH = 'Mehmetech Pty Ltd';
const GLOW = 'Glow / Engagement Innovation';

const DT = 'dates';
const RL = 'roles';
const DS = 'desc';
const TC = 'tech';

const SENIOR_PHP = 'Senior PHP Developer';
const SENIOR_FULL = 'Senior Full Stack Developer';
const DEVOPS = 'DevOps';
const SECOPS = 'SecOps';
const BACK_END = 'Back End Systems Engineer';
const INTEGRATIONS = 'Head of Integrations';
const SYSADMIN = 'Systems Administrator';
const APPS = 'iOS & Android App Developer';

const DATES = [
    GLOW => 'Sep 2022 - ',
    BANXA => 'Mar 2022 - Jun 2022',
    TP => 'Nov 2021 - Feb 2022',
    VC => 'Oct 2018 - Nov 2021',
    LC => 'Dec 2016 - Oct 2018',
    ZIB => 'Dec 2014 - Dec 2016',
    MEHMETECH => 'Jan 2013 - Nov 2014',
];

const ROLES = [
    GLOW => [SENIOR_PHP, BACK_END],
    BANXA => [SENIOR_PHP, BACK_END],
    TP => [SENIOR_FULL, DEVOPS],
    VC => [SENIOR_PHP, DEVOPS, SECOPS, INTEGRATIONS],
    LC => [SENIOR_PHP, DEVOPS],
    ZIB => [SENIOR_FULL, APPS, SYSADMIN],
    MEHMETECH => [SENIOR_FULL, DEVOPS, SECOPS, SYSADMIN, APPS]
];

const DESC = [
    GLOW => 'Working as part of the back-end team to provide a variety of API services to a user-facing web application. Creating and managing microservices to enable communication across both internal and external resources as well as complex event-based activities in other services. Implementing a solution for producing data which can be used with industry-standard SPSS software. Pioneering the use of parallel processing across multiple, simultaneous microservices, to produce a robust data analysis tool which can handle large, complex, and ever-changing data sets &mdash; an idea which was actually born out of work with Neural Net architectures. Providing advice, ideas, and input relating to the end-to-end tech stack and potential solutions to problems, as well as best-practices, particularly with regards to documentation and management of both Business and Technical information across the organisation and accessed by various stakeholders.',
    BANXA => 'Working as part of the "core" team, dedicated to back end processing of Crypto Payment Services provided to consumers and foreign currency exchanges worldwide, via API gateway &mdash; specifically looking after the Pricing engine, used across all products and needing to be 100% reliable and accurate at all times &mdash; considering very small margin of error afforded by Crypto transactions which have the potential to lead to very, very expensive mistakes. Supporting all relevant back of house processes, including proper documentation, testing and QA. Maintaining and improving solution designs for the product architecture, including scalability and resilience to high volume and optimisation of processing load. Evaluation of new technologies and ideas that could be leveraged to improve the platform in future.',
    TP => 'Heading up one of the dev teams, including running a team of (overseas) remote devs. Encouraging test-driven development as well as modern Best Practices and coding standards. Creating many projects from scratch, working within a mix of environments including CMS environments provided by clients. Delivering Docker images for containerised deployments or custom-built CMS packages or sometimes entirely self-contained micro-sites, with a complete CI solution from first git commit to fully functioning Production application running on scalable AWS (or Azure) infrastructure. Providing technical consultation on client briefs, including scoping and assessment of available resources.',
    VC => 'Helping to bring a small team with a "startup" mentality up to the modern standards required by a more mature company, now at the next level. Instituting things like daily stand-ups, code reviews, proper documentation (User Stories, Acceptance Criteria, etc) and procedures such as unit and acceptance testing, and automated deployments with CI/CD. Instrumental in eradicating solutions based around quick hacks and replacing them with solutions which are properly tested and scalable, while remaining performant. Introducing microservices and distributed data storage with solutions like ElasticSearch, where they make more sense, as well as mission critical tools such as Papertrail and Jenkins &mdash; ultimately leading to much more robust systems which can easily scale up and down as needed, without falling over or losing data. Rebuilding the API from scratch, including brand new documentation &mdash; which gained positive feedback from many clients. Spearheading API integrations with industry-standard services such as Zapier and Salesforce, as a way for clients to hit the ground running with the new API.',
    LC => 'Developing Laravel-based application as part of the back-end team on the core product, as well as heading up an entirely API-driven "Engagement" product used by clients with Gamification projects. Later moving to head up a separate bespoke Engagement project for a major corporate partner (Optus). Managing AWS resources and assets as well as CI/CD deployments to a number of different environments. Building a web-based management console to allow Engagement clients to build and maintain complex Rules, Rewards, Tiers, etc for their projects with an easy and intuitive user interface &mdash; which grew to include Single-Sign-On solutions, Wordpress plugins, and more...',
    ZIB => 'Working across multiple teams in multiple locations and directly liaising with stakeholders ranging from clients to service providers to external developers, to ensure smooth delivery of projects matching expectations as well as limitations of scope. Managing internal and external servers and databases and other assets. Due to noteworthy eye for good design and creative flair, either consulting on updates or completely redesigning entire websites from the ground up. Creating and managing native mobile FINTECH application for iOS and Android, alongside dedicated mobile app team brought in on my recommendations. Implementing multiple (monolithic) API services, including assets such as databases and caches. Ensuring bank-level security practices literally dictated by major Australian banking partner (ANZ). Introducing collaboration tools like Slack and Basecamp as well as VPN solutions for secure access to sensitive data &mdash; and training required to use these tools effectively.',
    MEHMETECH => 'Working with front end design team to deliver core eLEDGER product. Managing production and development environments, including databases and other resources, as well as secure access and storage. Integrating feature-rich billing and payroll systems into the product, alongside the existing collaboration tools. Handling Sales and Support enquiries and maintaining self-help knowledge-base and video tutorial system. Creating mobile app for both iOS and Android and enabling access via Apple and Google app store, to complement the API integration of the existing web UI. Integrating external APIs such as Google, Outlook, Exchange, and Yahoo.'
];

const TECH = [
    GLOW => [
        'Symfony',
        'Laravel',
        'MongoDB',
        'Docker',
        'REST',
        'PHP7',
        'PHP8',
        'phpunit',
        'jasmine/karma',
        'Slack API',
        'Jira',
        'Confluence',
        'Trello',
        'S3',
        'SQS',
        'CloudWatch',
        'CodePipeline',
        'CodeBuild',
        'IBM SPSS',
        'Lambda',
        'Atlas',
        'DynamoDB',
        'HubSpot API',
    ],
    BANXA => [
        'Laravel',
        'Docker',
        'Yarn',
        'REST',
        'GitLab',
        'PHP7',
        'PHP8',
        'phpunit',
        'MySQL',
        'GCP/Google API',
        'Postman collections',
        'AWS',
        'Jira',
        'Confluence',
        'VPN',
    ],
    TP => [
        'Laravel',
        'Typescript',
        'React',
        'Node.js',
        'REST',
        'Docker',
        'Vagrant',
        'GitHub',
        'PHP7',
        'PHP8',
        'phpunit',
        'jest',
        'Slack API',
        'Postman collections',
        'AWS',
        'Jira',
        'Asana',
        'Facebook Graph API/Javascript SDK',
        'GCP/Google Cloud API',
        'Azure/API Apps',
    ],
    VC => [
        'Laravel',
        'CodeIgniter',
        'React',
        'Node.js',
        'REST',
        'oAuth',
        'Docker',
        'Vagrant',
        'NginX',
        'Apache',
        'MySQL',
        'ElasticSearch',
        'Solr',
        'PHP7',
        'SMPP',
        'RabbitMQ/SQS/AMQP',
        'phpunit',
        'jest',
        'Jenkins',
        'Papertrail',
        'Slack API',
        'Postman API documentation',
        'Atlassian suite',
        'S3',
        'SQS',
        'EC2',
        'IAM',
        'CodeDeploy',
        'Lambda',
        'VPN',
        'Zapier',
    ],
    LC => [
        'Laravel',
        'Lumen',
        'jQuery',
        'Angular',
        'Bootstrap',
        'REST',
        'SOAP',
        'GraphQL',
        'CORS',
        'oAuth',
        'JWT',
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
        'Postman collections',
        'Wordpress plugin development',
        'Jira/Confluence/Bitbucket/etc',
        'AWS',
        'VPN',
    ],
    ZIB => [
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
        'xCode',
        'Android Studio',
        'VPN',
        'Google Play Console',
        'Apple Developer Program',
        'AWS',
    ],
    MEHMETECH => [
        'Java',
        'Javascript',
        'HTML5',
        'CSS3',
        'AJAX',
        'git',
        'oauth',
        'Apache',
        'MySQL',
        'PHP5',
        'Google API',
        'Live Connect API',
        'xCode',
        'Android Studio',
        'Wordpress',
        'GIMP',
    ],
];

const EXPERIENCE = [
    GLOW => [
        DT => DATES[GLOW],
        RL => ROLES[GLOW],
        DS => DESC[GLOW],
        TC =>  TECH[GLOW],
    ],
    BANXA => [
        DT => DATES[BANXA],
        RL => ROLES[BANXA],
        DS => DESC[BANXA],
        TC =>  TECH[BANXA],
    ],
    TP => [
        DT => DATES[TP],
        RL => ROLES[TP],
        DS => DESC[TP],
        TC =>  TECH[TP],
    ],
    VC => [
        DT => DATES[VC],
        RL => ROLES[VC],
        DS => DESC[VC],
        TC =>  TECH[VC],
    ],
    LC => [
        DT => DATES[LC],
        RL => ROLES[LC],
        DS => DESC[LC],
        TC =>  TECH[LC],
    ],
    ZIB => [
        DT => DATES[ZIB],
        RL => ROLES[ZIB],
        DS => DESC[ZIB],
        TC =>  TECH[ZIB],
    ],
    MEHMETECH => [
        DT => DATES[MEHMETECH],
        RL => ROLES[MEHMETECH],
        DS => DESC[MEHMETECH],
        TC =>  TECH[MEHMETECH],
    ],
];

const INFO = [DT => DATES, RL => ROLES, DS => DESC, TC => TECH];

$out = <<<HTML
<div class="section fp-auto-height" data-anchor="experience">
	<h3 class="experience">Experience</h3>
HTML;

foreach (EXPERIENCE as $name => $arr) {
    $inner = '';
    foreach (INFO as $class => $key) {
        $value = is_array($key[$name]) ? implode(', ', $key[$name]) : $key[$name];
        $div = "<div class='{$class}'>{$value}</div>";
        if ($class === DT) {
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

$out .= <<<HTML
</div>
HTML;


echo $out;
