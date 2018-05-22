# raumbuchungsystem

Fork of: Meeting Room Booking System
http://mrbs.sourceforge.net/
-------------------------------

The Meeting Room Booking System (MRBS) is a PHP-based application for
booking meeting rooms (surprisingly!). I got annoyed with the piles of books
which were being used to book meetings. They were slow, hard to edit and only
at the reception desk. I thought that a nice web-based system would be much
nicer.

Some parts of this are based on WebCalender 0.9.4 by Craig Knudsen 
(http://www.radix.net/~cknudsen/webcalendar/) but there is now very little
which is similar. There are fundamental design goal differences between
WebCalendar and MRBS - WC is for individuals, MRBS is for meeting rooms.

The fork: An attempt at sprucing up the layout.
Here are some screenshots(click for full size).

<a href="https://github.com/tompi/mrbs/raw/master/bs1.png">
	<img src="https://github.com/tompi/mrbs/raw/master/bs1-small.png">
</a>
<a href="https://github.com/tompi/mrbs/raw/master/bs2.png">
	<img src="https://github.com/tompi/mrbs/raw/master/bs2-small.png">
</a>

------
To Use
------
See the INSTALL file for installation instructions.

Once it's installed try going to http://yourhost/mrbs/ - if you loaded the
sample data, this should give you a view of the first area meeting rooms
for today. The (+) symbol means you can add new meetings by clicking
there. Try it - it should all be pretty obvious. If you haven't loaded the
sample data, start by clicking on Admin to add your Areas and Rooms.

By default, anyone can connect and only demo users "alice" and "bob" can add 
new meetings (passwords "a" and "b"), and only connections
from user "administrator"/"secret" are administrators. Only administrators 
can add rooms and areas, and modify any other users' meetings.  See 
AUTHENTICATION for a more complete description of the authentication.

If you copy testdata.php into your web site, you can view
http://yourhost/mrbs/testdata.php - it will generate a whole load of random
appointments to fill up the calendar and let you play around. (Don't leave
testdata.php in your web site, though.)

The latest version was tested with PHP 4.3.2, Apache 1.3.28, and either
MySQL 4.0.14 or PostgreSQL 7.2. It should work on just about anything
that's got PHP4 with MySQL or PostgreSQL support but PostgreSQL 7.3 and above.
MRBS has also been somewhat tested on PHP 5.1.2, MySQL 5.0.18 and Apache
2.2.0, using both the mysql and mysqli database access methods.

It should be pretty easy to adjust it to your corporate colours - the file
mrbs.css is used on every page, as is style.inc. Just fiddle with these until
you get the result you like. 

See COPYING for licensing info.

See NEWS for a history of changes.

See AUTHENTICATION for information about user authentication/passwords.

-------------
Requirements:
-------------
- PHP4/5 with MySQL and/or PostgreSQL support
- MySQL or PostgreSQL
- Any web server that is supported by PHP

Recommended:
- JavaScript-enabled browser
- CSS-enabled browser
- PHP module connection to the server (also called SAPI) if you want to use any
  of the basic http authentication schemes provided.

(If you are considering porting MRBS to another database, see README.sqlapi)

Warning:
- Some users reported errors using some accelerators (APC, PHP Accelerator).
  If you get messages like this : "Internal Zend error - Missing class
  information for ...", your accelerator is the cause.

------
Usage:
------
The current project maintainer reports using it at work with about 150 clients.
Many other reports of successful use have been seen on the MRBS mailing list,
and your report would be welcome there too. Let us know who is using MRBS!
