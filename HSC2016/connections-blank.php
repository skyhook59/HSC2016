<?php
// DB Connection Details
// Fill in your details and rename to connections.php
$host = "";
$dbusername = "";
$password = "";
$database = "";
$emailpassword = ""; //password for smtp


// Set the $week variable based on the date
$week = 1;
date_default_timezone_set('America/Toronto');
$thedate = date('Y-m-d H:i:s');
//$thedate = new DateTime('2014-10-23 05:00:00');
//$thedate ->setTimeZone(new DateTimeZone('America/Toronto'));


//$thedate = '2012-12-01 00:00:00'; // for testing

// Server External IP

$externalContent = file_get_contents('http://checkip.dyndns.com/');
preg_match('/Current IP Address: ([\[\]:.[0-9a-fA-F]+)</', $externalContent, $m);
$externalip = $m[1];

 //$externalip = "xxx.xxx.xxx.xxx";


 
if (($thedate > '2016-09-08 00:00:00' )  && ($thedate < '2016-09-13 00:00:00' ))
{
$week = 1;

}
elseif (($thedate > '2016-09-15 00:00:01' )  && ($thedate < '2016-09-20 00:00:00' ))
{
$week = 2;
}
elseif (($thedate > '2016-09-22 00:00:01' )  && ($thedate < '2016-09-27 00:00:00' ))
{
$week = 3;
}
elseif (($thedate > '2016-09-29 00:00:01' )  && ($thedate < '2016-10-04 00:00:00' ))
{
$week = 4;
}
elseif (($thedate > '2016-10-06 00:00:01' )  && ($thedate < '2016-10-11 00:00:00' ))
{
$week = 5;
}
elseif (($thedate > '2016-10-13 00:00:01' )  && ($thedate < '2016-10-18 00:00:00' ))
{
$week = 6;
}
elseif (($thedate > '2016-10-20 00:00:01' )  && ($thedate < '2016-10-25 00:00:00' ))
{
$week = 7;
}
elseif (($thedate > '2016-10-27 00:00:01' )  && ($thedate < '2016-11-01 00:00:00' ))
{
$week = 8;
}
elseif (($thedate > '2016-11-03 00:00:01' )  && ($thedate < '2016-11-08 00:00:00' ))
{
$week = 9;
}
elseif (($thedate > '2016-11-10 00:00:01' )  && ($thedate < '2016-11-15 00:00:00' ))
{
$week = 10;
}
elseif (($thedate > '2016-11-17 00:00:01' )  && ($thedate < '2016-11-21 00:00:00' ))
{
$week = 11;
}
elseif (($thedate > '2016-11-24 00:00:01' )  && ($thedate < '2016-11-29 00:00:00' ))
{
$week = 12;
}
elseif (($thedate > '2016-12-01 00:00:01' )  && ($thedate < '2016-12-06 00:00:00' ))
{
$week = 13;
}
elseif (($thedate > '2016-12-08 00:00:01' )  && ($thedate < '2016-12-13 00:00:00' ))
{
$week = 14;
}
elseif (($thedate > '2016-12-15 00:00:01' )  && ($thedate < '2016-12-20 00:00:00' ))
{
$week = 15;
}
elseif (($thedate > '2016-12-22 00:00:01' )  && ($thedate < '2016-12-27 00:00:00' ))
{
$week = 16;
}
elseif (($thedate > '2016-12-30 00:00:01' )  && ($thedate < '2016-01-03 23:59:58' ))
{
$week = 17;
}

elseif (($thedate > '2017-01-04 23:59:59') )
{
$week = 99;
}

?>
