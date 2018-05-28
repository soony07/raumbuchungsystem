<?php
namespace MRBS;

// mrbs/week.php - Week-at-a-time view

require "defaultincludes.inc";
require_once "mincals.inc";
require_once "functions_table.inc";
require_once "style.inc";
echo "<meta http-equiv=\"refresh\" content=\"60\">\n";
echo "<html lang='de' xml:lang='de' xmlns='http://www.w3.org/1999/xhtml' debug='true'>";

// HEADER import
include_once("header.php");

// If you want only administrators to be able to make and delete bookings,
// set this variable to TRUE
$auth['only_admin_can_book'] = true;

//Week start with acctually date
$weekstarts = date('w');

// We have a valid room
$num_of_days=0; // days in a week


// $page = $_SERVER['PHP_SELF'];
// $sec = "10";
// header("Refresh: $sec; url=$page");

// Get non-standard form variables
$timetohighlight = get_form_var('timetohighlight', 'int');
$ajax = get_form_var('ajax', 'int');


//print_header($day, $month, $year, $area, isset($room) ? $room : null);
// print_header(false);


//kiosk_table_innerhtml funktion befindet sich in functions_table.inc
$inner_html = kiosk_table_innerhtml($day, $month, $year, $room, $area, $timetohighlight);

echo "<table class=\"dwm_main\" id=\"week_main\" data-resolution=\"$resolution\">";
echo $inner_html;

echo "</table>\n";


// FOOTER import
// include_once("footer.php");
