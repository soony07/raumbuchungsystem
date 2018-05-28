<?php
namespace MRBS;

require "defaultincludes.inc";
require_once "version.inc";

// Check the user is authorised for this page
checkAuthorised(true);

$user = getUserName();
$is_admin = (authGetUserLevel($user) >= $max_level);

print_header($day, $month, $year, $area, isset($room) ? $room : null);

echo "<h3> Nutzungsbedingungen </h3>\n";
echo "<h3> ...</h3>";
