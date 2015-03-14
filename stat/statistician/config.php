<?php
    // This file should be updated with your Database Configuration
    // as well as other optional data

    define('DB_SERVER'  , '192.168.1.10');
    define('DB_USER'    , 'MC');
    define('DB_PASSWORD', '19912802');
    define('DB_NAME'    , 'stat');
    define('DB_PORT'    , 3306);

    define('SERVER_NAME', 'MFMC');
    define('CLOCK24', true); // true = 24 hours; false = 12 hours

    define('USE_MEGAMETERS', true);
    define('USE_SKINVIEWER', false);

    // Set your localization (language)
    define('LOCALE', 'ru');

    // Set your timezone.
    // If you leave this empty the systems timezone will be loaded
    // http://www.php.net/manual/en/timezones.php
    // This needs PHP 5.1.0 or higher!
    define('TIMEZONE', '');
?>