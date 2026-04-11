<?php
// BF4 Stats Page by Ty_ger07
// https://myrcon.net/topic/162-chat-guid-stats-and-mapstats-logger-1003/

// THE FOLLOWING INFORMATION NEEDS TO BE FILLED IN
// Read readme.txt for help.

// DATABASE INFORMATION
DEFINE('HOST', getenv('BF4_DB_HOST') !== false ? getenv('BF4_DB_HOST') : '');									// database host address
DEFINE('PORT', getenv('BF4_DB_PORT') !== false ? getenv('BF4_DB_PORT') : '3306');							// database port - default is 3306
DEFINE('NAME', getenv('BF4_DB_NAME') !== false ? getenv('BF4_DB_NAME') : '');									// database name
DEFINE('USER', getenv('BF4_DB_USER') !== false ? getenv('BF4_DB_USER') : '');									// database user name - sometimes the same as the database name
DEFINE('PASS', getenv('BF4_DB_PASS') !== false ? getenv('BF4_DB_PASS') : '');									// database password

// CLAN NAME
$clan_name		= getenv('BF4_CLAN_NAME') !== false ? getenv('BF4_CLAN_NAME') : 'clan';					// your gaming clan or organization name

// PAGE BANNER
$banner_image	= getenv('BF4_BANNER_IMAGE') !== false ? getenv('BF4_BANNER_IMAGE') : './common/images/bf4-logo.png';		// your desired page banner image

// BANNER LINK
$banner_url		= getenv('BF4_BANNER_URL') !== false ? getenv('BF4_BANNER_URL') : 'http://tyger07.github.io/BF4-Server-Stats/';	// where clicking on page banner will take you
?>