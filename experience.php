<?php

const BANXA = 'Banxa';
const TP = 'The Pistol';
const VC = 'VidCorp / Tall Bob';
const LC = 'Loyalty Corp / EonX';
const ZIB = 'Zib Digital / Zibit';
const MEHMETECH = 'Mehmetech Pty Ltd';
const MMCS = 'Mic Mehmet Computer Services Pty Ltd';
const GLOW = 'Glow / Engagement Innovation';

const DT = 'dates';
const RL = 'roles';
const DS = 'desc';
const TC = 'tech';

const DATES = [
    GLOW => 'Sep 2022 - ',
    BANXA => 'Mar 2022 - Jun 2022',
    TP => 'Nov 2021 - Feb 2022',
    VC => 'Oct 2018 - Nov 2021',
    LC => 'Dec 2016 - Oct 2018',
    ZIB => 'Dec 2014 - Dec 2016',
    MEHMETECH => 'Jan 2013 - Nov 2014',
    MMCS => 'Feb 2009 - Jan 2014',
];

const ROLES = [
    GLOW => ['Senior PHP and Back End Systems Engineer'],
    BANXA => ['Senior PHP Developer', 'Platform Engineering', 'Backend Lead'],
    TP => ['Senior PHP Developer', 'DevOps', 'BA'],
    VC => ['Senior PHP Developer', 'DevOps', 'SecOps', 'Head of Integrations'],
    LC => ['Senior PHP Developer', 'DevOps'],
    ZIB => ['Senior Web & App Developer', 'IT Administrator'],
    MEHMETECH => ['Senior Developer', 'Webmaster', 'Systems Administrator', 'Database Manager', 'Lead Designer'],
    MMCS => ['PHP Developer', 'Systems Administrator', 'I.T. Consultant'],
];

const DESC = [
    GLOW => 'Utilising a variety of languages, frameworks, and databases but mainly working with PHP, Symfony, and
    MongoDB to produce and maintain various back-end services to several front-end resources. Creating and managing
    Lamda-based microservices which enable communication with both internal and external resources as well as
    complex event-based activities using those external services. Providing advice, ideas, and input relating to the
    end-to-end tech stack and potential solutions to problems, as well as best-practices, particularly with regards to
    documentation and management of both Business and Technical information across the organisation and accessed by
    various stakeholders.',
    BANXA => 'Primarily using the Laravel framework, working with small team dedicated to "core" back end processing of
    Crypto Payment Services to consumers and leading Exchanges worldwide as well as supporting all relevant back of
    house processes, specifically looking after the Pricing engine. Maintaining and improving solution designs for the
    product architecture, including scalability and resilience to high volume and optimisation of processing load.
    Evaluation of new technologies and ideas that can be leveraged to improve the platform.',
    TP => 'Heading up the “Bespoke Projects” dev team, running a team of (overseas) remote devs and also doing dev work
    as needed. Introduced unit testing and encouraged test-driven development as well as Best Practices and modern
    coding standards. Created many projects from scratch, working in a mix of environments including working within CMS
    environments provided by clients. Delivering products either as Docker images for containerised deployments or as
    packages within the CMS or sometimes entirely self-contained microsites – involving a complete CI solution from git
    commit to fully functioning Production website running on scalable AWS infrastructure. Also technical consultation
    and quoting on client briefs, including scoping and assessment of available resources.',
    VC => 'Brought the team up to modern standards: daily stand-ups, code reviews, proper documentation and procedures -
    including User Stories, Acceptance Criteria, testing, and deployments. Spearheaded integrations with the likes of
    Klaviyo, Zapier, and Salesforce. Instrumental in eradicating solutions based around quick hacks and raw SQL -
    focussing instead on more modular solutions which are properly tested and scalable, using microservices and external
    services such as ElasticSearch, where possible. Also introduced mission critical tools such as Papertrail for
    logging and Jenkins for deployments, creating a much more robust system which can easily scale up and down as needed
    and without falling over or losing data.',
    LC => 'Primarily using the Laravel framework, working on both the flagship eWallet product as a back-end developer,
    as well as heading and maintaining the Engagement platform, which is utilised by eWallet as well as directly by
    Loyalty Corp clients, as a full stack senior developer and operations manager. Both products involved managing AWS
    resources and assets as well as code reviews and deployments to testing, UAT, and Production resources. The latter
    also required building a front-end for management of the Gamification projects used by Engagement clients – allowing
    self-service solutions for building and maintaining Rules, Rewards, Tiers, etc – as well as a Single-Sign-On
    solution, a Wordpress plugin, and even an iFrame solution for delivering in-app content using JS and Amazon S3.',
    ZIB => 'Full Stack Senior Developer, working across teams in both Melbourne and Adelaide. Directly liaised with
    stakeholders ranging from clients to external developers to service providers, ensuring smooth delivery which
    matches expectations as well as limitations of scope. Managed servers and databases and also internal IT systems.
    Due to noteworthy eye for design and creative flair, consulted on projects in need of a new look or "jazzing up" -
    occasionally, completely rebuilt website from the ground up. Managed and developed both web and native mobile
    applications, managed dev team and external developer assets, as well as private git repositories. Implemented REST
    API services, managed and deployed AWS assets, administered linux-based servers, including MySQL-based databases.
    Developed and implemented bank-level security practices for a FINTECH application with major Australian banking
    partner. Introduced new collaboration tools, such as Slack and Basecamp. Delivered VPN solution to allow secure
    access to sensitive data, outside of the office and trained staff how to set up and use it.',
    MEHMETECH => 'Lead front and back end developer, working with front end design team on eLEDGER product. Managed both
    production and development servers, including database design, security and administration of internal/external
    access. Managed customer data, feature-rich billing and payments system, as well as cloud-based collaboration tools.
    Oversaw management of Sales and Support enquiries, including maintenance of customer self-help knowledge-base and
    associated tutorial system. Developed mobile app on both iOS and Android platforms to bring fully integrated
    products into both iTunes and Google Play app stores, complementing the existing mobile device integration of the
    web UI. Delivered oauth implementation of Google, Outlook, Exchange, and Yahoo APIs.',
    MMCS => 'Systems design and troubleshooting for SME customers, with particular emphasis on (front end) 
    multi-platform compatibility and accessibility, as well as (back end) process work flow. Worked both as part of dev
    team and sometimes solo, including patching of legacy code.',
];

const TECH = [
    GLOW => [
        'Symfony',
        'MongoDB',
        'Docker',
        'REST',
        'PHP7',
        'PHP8',
        'phpunit',
        'yarn',
        'jasmine/karma',
        'Angular',
        'Slack',
        'JIRA',
        'Confluence',
        'Trello',
        'S3',
        'SQS',
        'CloudWatch',
        'CodePipeline',
        'CodeBuild',
        'Lambda',
        'HubSpot private APIs',
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
        'Slack',
        'Postman',
        'AWS',
        'JIRA',
        'Confluence',
        'VPN',
        'PHPStorm',
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
        'PHP 7.4',
        'PHP 8.1',
        'phpunit',
        'jest',
        'Slack',
        'Postman',
        'AWS',
        'JIRA',
        'Asana',
        'Facebook Graph API/Javascript SDK',
        'GCP/Google Cloud APIs',
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
        'S3',
        'SQS',
        'EC2',
        'IAM',
        'CodeDeploy',
        'Lambda',
        'VPN',
    ],
    LC => [
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
        'PHPStorm',
        'xCode',
        'Android Studio',
        'VPN',
        'Google/Apple app stores',
        'AWS',
    ],
    MEHMETECH => [
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
    ],
    MMCS => [
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
    MMCS => [
        DT => DATES[MMCS],
        RL => ROLES[MMCS],
        DS => DESC[MMCS],
        TC =>  TECH[MMCS],
    ],
];

const INFO = [DT => DATES, RL => ROLES, DS => DESC, TC => TECH];

$out = <<<HTML
<div class="section fp-auto-height" data-anchor="experience">
	<h3>Experience</h3>
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
