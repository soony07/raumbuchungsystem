<?php // -*-mode: PHP; coding:utf-8;-*-
namespace MRBS;

/**************************************************************************
 *   MRBS Configuration File
 *   Configure this file for your site.
 *   You shouldn't have to modify anything outside this file.
 *
 *   This file has already been populated with the minimum set of configuration
 *   variables that you will need to change to get your system up and running.
 *   If you want to change any of the other settings in systemdefaults.inc.php
 *   or areadefaults.inc.php, then copy the relevant lines into this file
 *   and edit them here.   This file will override the default settings and
 *   when you upgrade to a new version of MRBS the config file is preserved.
 **************************************************************************/

/**********
 * Timezone
 **********/

// The timezone your meeting rooms run in. It is especially important
// to set this if you're using PHP 5 on Linux. In this configuration
// if you don't, meetings in a different DST than you are currently
// in are offset by the DST offset incorrectly.
//
// Note that timezones can be set on a per-area basis, so strictly speaking this
// setting should be in areadefaults.inc.php, but as it is so important to set
// the right timezone it is included here.
//
// When upgrading an existing installation, this should be set to the
// timezone the web server runs in.  See the INSTALL document for more information.
//
// A list of valid timezones can be found at http://php.net/manual/timezones.php
// The following line must be uncommented by removing the '//' at the beginning


$timezone = "Europe/Vienna";
$weekstarts = 1;
$strftime_format['daymonth']     = "%e. %B";
$mrbs_company_logo = "images/logo.png"; // or wherever your logo file is
$mrbs_company_url = "http://aau.at";  //make a Logo into a Link

// Nur Admin kann Benutzerliste sehen
$auth['only_admin_can_see_other_users'] = true;



/*******************
 * Database settings
 ******************/
// Which database system: "pgsql"=PostgreSQL, "mysql"=MySQL
$dbsys = "mysql";
// Hostname of database server. For pgsql, can use "" instead of localhost
// to use Unix Domain Sockets instead of TCP/IP. For mysql "localhost"
// tells the system to use Unix Domain Sockets, and $db_port will be ignored;
// if you want to force TCP connection you can use "127.0.0.1".
$db_host = "localhost";

// $auth["admin"][] = "skovacev";

// //LDAP Authentication
// $auth["type"] = "ldap";
// $ldap_host = "ldaps://ldaps.aau.at";
// $ldap_port = 636;
// $ldap_v3 = true;
// $ldap_tls = true;
// //$ldap_debug = true;
// //$ldap_base_dn = "ou=organizationalunit,dc=my-domain,dc=com";
// $ldap_base_dn = "OU=users, OU=edu, DC=ldap,DC=aau,DC=at";
// $ldap_dn_search_dn = "CN=ldap_zidsks_ub,OU=users,OU=edu,DC=ldap,DC=aau,DC=at";
// $ldap_dn_search_password = "u!mZd4cP";


//$ldap_group_member_attrib = "memberUid";
// If you need to use a non standard port for the database connection you
// can uncomment the following line and specify the port number
// $db_port = 1234;
// Database name:
//
// $auth["session"] = "remote_user";
// $auth["type"] = "none";

$db_database = "mrbs";
// Schema name.  This only applies to PostgreSQL and is only necessary if you have more
// than one schema in your database and also you are using the same MRBS table names in
// multiple schemas.
//$db_schema = "public";
// Database login user name:
$db_login = "root";
// Database login password:
$db_password = '';
// Prefix for table names.  This will allow multiple installations where only
// one database is available
$db_tbl_prefix = "mrbs_";
// Set $db_persist to TRUE to use PHP persistent (pooled) database connections.  Note
// that persistent connections are not recommended unless your system suffers significant
// performance problems without them.   They can cause problems with transactions and
// locks (see http://php.net/manual/en/features.persistent-connections.php) and although
// MRBS tries to avoid those problems, it is generally better not to use persistent
// connections if you can.
$db_persist = FALSE;

// The company name is mandatory.   It is used in the header and also for email notifications.
// The company logo, additional information and URL are all optional.
$mrbs_company = "UNIVERSITÄTSBIBLIOTHEK KLAGENFURT";   // This line must always be uncommented ($mrbs_company is used in various places)

/*******************
  * Themes
*******************/

// Choose a theme for the MRBS.   The theme controls two aspects of the look and feel:
//   (a) the styling:  the most commonly changed colours, dimensions and fonts have been
//       extracted from the main CSS file and put into the styling.inc file in the appropriate
//       directory in the Themes directory.   If you want to change the colour scheme, you should
//       be able to do it by changing the values in the theme file.    More advanced styling changes
//       can be made by changing the rules in the CSS file.
//   (b) the header:  the header.inc file which contains the function used for producing the header.
//       This enables organisations to plug in their own header functions quite easily, in cases where
//       the desired corporate look and feel cannot be changed using the CSS alone and the mark-up
//       itself needs to be changed.
//
//  MRBS will look for the files "styling.inc" and "header.inc" in the directory Themes/$theme and
//  if it can't find them will use the files in Themes/default.    A theme directory can contain
//  a replacement styling.inc file or a replacement header.inc file or both.

// Available options are:

// "default"        Default MRBS theme
// "classic126"     Same colour scheme as MRBS 1.2.6

$theme = "default";

$custom_css_url = 'css/index.css';

// Use the $custom_css_url to override the standard MRBS CSS.
//$custom_css_url = 'css/custom.css';


/* Add lines from systemdefaults.inc.php and areadefaults.inc.php below here
   to change the default configuration. Do _NOT_ modify systemdefaults.inc.php
   or areadefaults.inc.php.  */


   // This setting controls whether to use "clock" or "times" based intervals
   // (FALSE and the default) or user defined periods (TRUE).

   // $enable_periods is settable on a per-area basis.

   $enable_periods = FALSE;
   // Default value for new areas

   // TIMES SETTINGS
   // --------------

   // These settings are all set per area through MRBS. These are the default
   // settings that are used when a new area is created.

   // The "Times" settings are ignored if $enable_periods is TRUE.

   // Note: Be careful to avoid specifying options that display blocks overlapping
   // the next day, since it is not properly handled.

   // Resolution - what blocks can be booked, in seconds.
   // Default is half an hour: 1800 seconds.
   $resolution = (1 * 60); // DEFAULT VALUE FOR NEW AREAS

   // If the following variable is set to TRUE, the resolution of bookings
   // is forced to be the value of $resolution, rather than the resolution set
   // for the area in the database.
   $force_resolution = TRUE;


   // Start and end of day.
   // NOTE: The time between the beginning of the last and first
   // slots of the day must be an integral multiple of the resolution,
   // and obviously >=0.

   // The default settings below (along with the 30 minute resolution above)
   // give you 24 half-hourly slots starting at 07:00, with the last slot
   // being 18:30 -> 19:00

   // The beginning of the first slot of the day (DEFAULT VALUES FOR NEW AREAS)
   $morningstarts = 06; // must be integer in range 0-23
   $morningstarts_minutes = 00; // must be integer in range 0-59

   // The beginning of the last slot of the day (DEFAULT VALUES FOR NEW AREAS)
   $eveningends = 23; // must be integer in range 0-23
   $eveningends_minutes = 00; // must be integer in range 0-59

   // Example 1.
   // If resolution=3600 (1 hour), morningstarts = 8 and morningstarts_minutes = 30
   // then for the last period to start at say 4:30pm you would need to set eveningends = 16
   // and eveningends_minutes = 30

   // Example 2.
   // To get a full 24 hour display with 15-minute steps, set morningstarts=0; eveningends=23;
   // eveningends_minutes=45; and resolution=900.

//  unset($booking_types);    // Include this line when copying to config.inc.php
$vocab_override["de"]["type.I"] = "UB Bedienstete";
$vocab_override["de"]["type.E"] = "AAU Benutzer";




   //
   // $booking_types[] = "E";
   // $booking_types[] = "I";

   // If you don't want to use types then uncomment the following line.  (The booking will
   // still have a type associated with it in the database, which will be the default type.)
   // unset($booking_types);

   // Default type for new bookings
   // (Note that the default type does not apply if the type field is mandatory)
   // $default_type = "I";

   // Default description for new bookings
   // $default_description = "Benutzer der UBK";
   // (Note that the default type does not apply if the type field is mandatory)
   // $default_type = "E";

   // Default description for new bookings
   // $default_description = "Alle anderen Benutzer";
