<?php
    define('PERCH_LICENSE_KEY', 'P21701-MWA080-ENE299-TSM479-NDL003');

    /* Comment out lines as necessary to switch between localhost and live host */

    /*define("PERCH_DB_USERNAME", 'root');
    define("PERCH_DB_PASSWORD", 'root');
    define("PERCH_DB_SERVER", "localhost:8889");
    define("PERCH_DB_DATABASE", "perch2");*/
    define("PERCH_DB_USERNAME", 'LCN410728_admin');
    define("PERCH_DB_PASSWORD", '2M0ntess0ri().');
    define("PERCH_DB_SERVER", "database3.lcn.com");
    define("PERCH_DB_DATABASE", "thenewmontessoripreschool_org_uk_perch");
    define("PERCH_DB_PREFIX", "perch2_");

    define('PERCH_TZ', 'UTC');

    define('PERCH_EMAIL_FROM', 'info@thenewmontessoripreschool.org.uk');
    define('PERCH_EMAIL_FROM_NAME', 'Rebecca Shanahan');

    /*define('PERCH_LOGINPATH', '/tnmp/perch');*/
    define('PERCH_LOGINPATH', '/perch');
    define('PERCH_PATH', str_replace(DIRECTORY_SEPARATOR.'config', '', __DIR__));
    define('PERCH_CORE', PERCH_PATH.DIRECTORY_SEPARATOR.'core');

    define('PERCH_RESFILEPATH', PERCH_PATH . DIRECTORY_SEPARATOR . 'resources');
    define('PERCH_RESPATH', PERCH_LOGINPATH . '/resources');

    define('PERCH_HTML5', true);
