<?php

$site['url']               = "http://cheetahtest.com/";
$admin_dir                 = "administration";
$iAdminPage				= 0;
$site['url_admin']         = "{$site['url']}$admin_dir/";

$site['mediaImages']       = "{$site['url']}media/images/";
$site['gallery']           = "{$site['url']}media/images/gallery/";
$site['flags']             = "{$site['url']}media/images/flags/";
$site['banners']           = "{$site['url']}media/images/banners/";
$site['tmp']               = "{$site['url']}tmp/";
$site['plugins']           = "{$site['url']}plugins/";
$site['base']              = "{$site['url']}templates/base/";

$site['bugReportMail']     = "calvin.fowler74@gmail.com";
$site['logError']          = true;
$site['fullError']         = false;
$site['emailError']        = true;

$dir['root']               = "/var/www/html/Cheetah/";
$dir['inc']                = "{$dir['root']}inc/";
$dir['profileImage']       = "{$dir['root']}media/images/profile/";

$dir['mediaImages']        = "{$dir['root']}media/images/";
$dir['gallery']            = "{$dir['root']}media/images/gallery/";
$dir['flags']              = "{$dir['root']}media/images/flags/";
$dir['banners']            = "{$dir['root']}media/images/banners/";
$dir['tmp']                = "{$dir['root']}tmp/";
$dir['cache']              = "{$dir['root']}cache/";
$dir['plugins']            = "{$dir['root']}plugins/";
$dir['base']               = "{$dir['root']}templates/base/";
$dir['classes']            = "{$dir['inc']}classes/";

$PHPBIN                    = "/usr/bin/php";

$db['host']                = 'localhost';
$db['sock']                = '';
$db['port']                = '';
$db['user']                = 'root';
$db['passwd']              = 'Vache012';
$db['db']                  = 'cheetahdb';
$db['persistent']          = true;

define('CH_WSB_URL_ROOT', $site['url']);
define('CH_WSB_URL_ADMIN', $site['url_admin']);
define('CH_WSB_URL_PLUGINS', $site['plugins']);
define('CH_WSB_URL_MODULES', $site['url'] . 'modules/' );
define('CH_WSB_URL_CACHE_PUBLIC', $site['url'] . 'cache_public/');

define('CH_WSB_LOG_ERROR', $site['logError']);
define('CH_WSB_FULL_ERROR', $site['fullError']);
define('CH_WSB_EMAIL_ERROR', $site['emailError']);
define('CH_WSB_REPORT_EMAIL', $site['bugReportMail']);

define('CH_DIRECTORY_PATH_INC', $dir['inc']);
define('CH_DIRECTORY_PATH_TMP', $dir['tmp']);
define('CH_DIRECTORY_PATH_ROOT', $dir['root']);
define('CH_DIRECTORY_PATH_BASE', $dir['base']);
define('CH_DIRECTORY_PATH_CACHE', $dir['cache']);
define('CH_DIRECTORY_PATH_CLASSES', $dir['classes']);
define('CH_DIRECTORY_PATH_PLUGINS', $dir['plugins']);
define('CH_DIRECTORY_PATH_DBCACHE', $dir['cache']);
define('CH_DIRECTORY_PATH_MODULES', $dir['root'] . 'modules/' );
define('CH_DIRECTORY_PATH_CACHE_PUBLIC', $dir['root'] . 'cache_public/' );

define('DATABASE_HOST', $db['host']);
define('DATABASE_SOCK', $db['sock']);
define('DATABASE_PORT', $db['port']);
define('DATABASE_USER', $db['user']);
define('DATABASE_PASS', $db['passwd']);
define('DATABASE_NAME', $db['db']);
define('DATABASE_PERSISTENT', $db['persistent']);

define('CH_WSB_SPLASH_VIS_DISABLE', 'disable');
define('CH_WSB_SPLASH_VIS_INDEX', 'index');
define('CH_WSB_SPLASH_VIS_ALL', 'all');

define('CHECK_CHEETAH_REQUIREMENTS', 1);
if (defined('CHECK_CHEETAH_REQUIREMENTS')) {
    $aErrors = array();
    $aErrors[] = ((int)ini_get('register_globals') == 0) ? '' : '<font color="red">register_globals is On (warning, you should have this param in the Off state, or your site will be unsafe)</font>';
    $aErrors[] = ((int)ini_get('safe_mode') == 0) ? '' : '<font color="red">safe_mode is On, disable it</font>';
    $aErrors[] = (version_compare(PHP_VERSION, '5.4.0', '<')) ? '<font color="red">PHP version too old, please update to PHP 5.4.0 at least</font>' : '';
    $aErrors[] = (!extension_loaded( 'mbstring')) ? '<font color="red">mbstring extension not installed. <b>Warning!</b> Cheetah cannot work without <b>mbstring</b> extension.</font>' : '';
    $aErrors[] = ((int)ini_get('short_open_tag') == 0 && version_compare(phpversion(), "5.4", "<") == 1) ? '<font color="red">short_open_tag is Off (must be On!)<b>Warning!</b> Cheetah cannot work without <b>short_open_tag</b>.</font>' : '';
    $aErrors[] = ((int)ini_get('allow_url_include') == 0) ? '' : '<font color="red">allow_url_include is On (warning, you should have this param in the Off state, or your site will be unsafe)</font>';

    $aErrors = array_diff($aErrors, array('')); //delete empty
    if (count($aErrors)) {
        $sErrors = implode(" <br /> ", $aErrors);
        echo <<<EOF
{$sErrors} <br />
Please go to the <br />
<a href="https://wiki.cheetahwsb.com/index.php?title=Cheetah_Troubleshooter">Cheetah Troubleshooter</a> <br />
and solve the problem.
EOF;
        exit;
    }
}


//check correct hostname
$aUrl = parse_url( $site['url'] );
$iPortDefault = 'https' == $aUrl['scheme'] ? '443' : '80';
if ( isset($_SERVER['HTTP_HOST']) and 0 != strcasecmp($_SERVER['HTTP_HOST'], $aUrl['host']) and 0 != strcasecmp($_SERVER['HTTP_HOST'], $aUrl['host'] . ':' . (!empty($aUrl['port']) ? $aUrl['port'] : $iPortDefault)) ) {
    $sPort = empty($aUrl['port']) || 80 == $aUrl['port'] || 443 == $aUrl['port'] ? '' : ':' . $aUrl['port'];
    header( "Location:{$aUrl['scheme']}://{$aUrl['host']}{$sPort}{$_SERVER['REQUEST_URI']}", true, 301 );
    exit;
}


// This option is for developers who are reinstalling at regular intervals and need to keep the install folder on the server.
// For normal production sites this option is to be set to FALSE because keeping the install folder on the server poses a slight security risk.
define('CH_WSB_LEAVE_INSTALL_FOLDER', FALSE);

// check if install folder exists
if ( !defined ('CH_SKIP_INSTALL_CHECK') && file_exists( $dir['root'] . 'install' ) && ( CH_WSB_LEAVE_INSTALL_FOLDER === FALSE || !defined ('CH_WSB_LEAVE_INSTALL_FOLDER')) ) {
    $ret = <<<EOJ
<!DOCTYPE html>
<html>
<head>
    <title>Cheetah Installed</title>
    <link href="{$site['url']}install/general.css" rel="stylesheet" type="text/css" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
</head>
<body class="ch-def-font">
    <div class="adm-header">
        <div class="adm-header-content">
            <div class="adm-header-title ch-def-margin-sec-left">
                <div class="adm-header-logo"><img src="{$site['url']}install/images/cheetah-white.svg" /></div>
                <div class="adm-header-text ch-def-font-h1">CHEETAH</div>
                <div class="clear_both">&nbsp;</div>
            </div>
            <div class="clear_both">&nbsp;</div>
        </div>
    </div>
    <div id="ch-install-main" class="ch-def-border ch-def-round-corners ch-def-margin-top ch-def-margin-bottom">
        <div id="ch-install-content" class="ch-def-padding">
            <div class="ch-install-header-caption ch-def-font-h1 ch-def-margin-bottom">
                The installation was successful. Cheetah is now installed.
            </div>
            <div class="ch-install-header-text ch-def-font-large ch-def-font-grayed">
                Remove directory called <b>"install"</b> from your server and <a href="{$site['url']}administration/modules.php">proceed to Admin Panel to install modules</a>.
            </div>
        </div>
    </div>
</body>
</html>
EOJ;
    echo $ret;
    exit();
}

// set error reporting level
// only show errors, hide notices, deprecated and strict warnings
error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED & ~E_STRICT & ~E_WARNING);

// set default encoding for multibyte functions
mb_internal_encoding('UTF-8');
mb_regex_encoding('UTF-8');

require_once(CH_DIRECTORY_PATH_INC . "version.inc.php");
require_once(CH_DIRECTORY_PATH_ROOT . "flash/modules/global/inc/header.inc.php");
require_once(CH_DIRECTORY_PATH_ROOT . "flash/modules/global/inc/content.inc.php");
require_once(CH_DIRECTORY_PATH_CLASSES . "ChWsbService.php");
require_once(CH_DIRECTORY_PATH_CLASSES . 'ChWsbAlerts.php');
require_once(CH_DIRECTORY_PATH_CLASSES . 'ChWsbExceptionHandler.php');

set_exception_handler([new ChWsbExceptionHandler(), 'handle']);

$oZ = new ChWsbAlerts('system', 'begin', 0);
$oZ->alert();
