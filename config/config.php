<?php
// BF4 Stats Page by Ty_ger07
// https://myrcon.net/topic/162-chat-guid-stats-and-mapstats-logger-1003/

// THE FOLLOWING INFORMATION NEEDS TO BE FILLED IN
// Read readme.txt for help.

function env_or_default($key, $default)
{
    $value = getenv($key);
    if ($value === false || $value === '') {
        return $default;
    }

    return $value;
}

// DATABASE INFORMATION
DEFINE('HOST', env_or_default('BF4_DB_HOST', ''));                           // database host address
DEFINE('PORT', env_or_default('BF4_DB_PORT', '3306'));                       // database port - default is 3306
DEFINE('NAME', env_or_default('BF4_DB_NAME', ''));                           // database name
DEFINE('USER', env_or_default('BF4_DB_USER', ''));                           // database user name - sometimes the same as the database name
DEFINE('PASS', env_or_default('BF4_DB_PASS', ''));                           // database password

// CLAN NAME
$clan_name      = env_or_default('BF4_CLAN_NAME', 'clan');                   // your gaming clan or organization name

// PAGE BANNER
$banner_image   = env_or_default('BF4_BANNER_IMAGE', './common/images/bf4-logo.png'); // your desired page banner image

// BANNER LINK
$banner_url     = env_or_default('BF4_BANNER_URL', 'http://tyger07.github.io/BF4-Server-Stats/'); // where clicking on page banner will take you
?>
