<?PHP
require_once("./include/membersite_config.php");

if(!$fgmembersite->CheckLogin())
{
    $fgmembersite->RedirectToURL("login.php");
    exit;
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Week 3 Picks</title>
</head>
<body>



<?php
//variable for database connection
$host = localhost;
$username = "skyho_web";
$password = "pedro123";
$database = "skyhook59_supercontest";

$week = 3;

//open DB connection
$con = mysql_connect($host,$username,$password);
if (!$con)
{
	die('Could not connect: ' . mysql_error());
}
mysql_select_db("$database", $con);

//summary of picks for week 1
$query = "SELECT p.username, p.pick, l.gameStatus, p.winner, l.favTeam, l.`line`, l.dogTeam FROM `picksview` p JOIN `linesview` l ON p.gameID = l.gameID WHERE p.week=$week";
$result = mysql_query($query);
echo '<pre>';
echo '<br>Week '.$week.' Picks<br><br>';
echo '<table>';
echo "<tr><td>"."User"."</td><td>"."Pick"."</td><td>"."Game Status"."</td><td>"."Winner"."</tr>";
while ($row = mysql_fetch_array($result))
{
	echo "<tr><td>";
	echo $row['username'];
	echo "</td><td>";
	echo $row['pick'];
	echo "</td><td>";
	echo "[";
	echo $row['favTeam'];
	echo " ";
	echo $row['line'];
	echo " ";
	echo $row['dogTeam'];
	echo "]";
	echo "</td><td>";
	echo $row['gameStatus'];
	echo "</td><td>";
	echo $row['winner'];
	echo "</tr>";

}
echo '</table>';
echo '</pre>';

// close DB connection
mysql_close($con);

?>
</body>
</html>