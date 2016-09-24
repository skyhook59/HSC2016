<?php


//variable for database connection

include "../connections.php";

$tablename = "Lines";

//open DB connection
$con = mysql_connect($host,$dbusername,$password);
if (!$con)
{
	die('Could not connect: ' . mysql_error());
}
mysql_select_db("$database", $con);
$week = 3;
//TODO rewrite as a CASE statement
echo $week;
if ($week = 1){
$query="UPDATE `Lines` SET homeTeam ='DEN' WHERE week = 1 AND 'DEN' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='BAL' WHERE week = 1 AND 'BAL' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='HOU' WHERE week = 1 AND 'HOU' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='NYJ' WHERE week = 1 AND 'NYJ' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='PHI' WHERE week = 1 AND 'PHI' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='JAX' WHERE week = 1 AND 'JAX' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='TEN' WHERE week = 1 AND 'TEN' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='NO' WHERE week = 1 AND 'NO' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='KC' WHERE week = 1 AND 'KC' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='ATL' WHERE week = 1 AND 'ATL' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='SEA' WHERE week = 1 AND 'SEA' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='IND' WHERE week = 1 AND 'IND' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='DAL' WHERE week = 1 AND 'DAL' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='ARI' WHERE week = 1 AND 'ARI' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='WAS' WHERE week = 1 AND 'WAS' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='SF' WHERE week = 1 AND 'SF' in (favTeam, dogTeam)";      mysql_query($query);
}

if ($week = 2){
$query="UPDATE `Lines` SET homeTeam ='BUF' WHERE week = 2 AND 'BUF' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='CLE' WHERE week = 2 AND 'CLE' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='PIT' WHERE week = 2 AND 'PIT' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='WAS' WHERE week = 2 AND 'WAS' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='HOU' WHERE week = 2 AND 'HOU' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='NE' WHERE week = 2 AND 'NE' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='NYG' WHERE week = 2 AND 'NYG' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='CAR' WHERE week = 2 AND 'CAR' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='DET' WHERE week = 2 AND 'DET' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='LA' WHERE week = 2 AND 'LA' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='ARI' WHERE week = 2 AND 'ARI' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='OAK' WHERE week = 2 AND 'OAK' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='DEN' WHERE week = 2 AND 'DEN' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='SD' WHERE week = 2 AND 'SD' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='MIN' WHERE week = 2 AND 'MIN' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='CHI' WHERE week = 2 AND 'CHI' in (favTeam, dogTeam)";      mysql_query($query);}

if ($week = 3){
$query="UPDATE `Lines` SET homeTeam ='NE' WHERE week = 3 AND 'NE' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='BUF' WHERE week = 3 AND 'BUF' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='JAX' WHERE week = 3 AND 'JAX' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='MIA' WHERE week = 3 AND 'MIA' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='CIN' WHERE week = 3 AND 'CIN' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='GB' WHERE week = 3 AND 'GB' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='CAR' WHERE week = 3 AND 'CAR' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='TEN' WHERE week = 3 AND 'TEN' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='NYG' WHERE week = 3 AND 'NYG' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='TB' WHERE week = 3 AND 'TB' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='SEA' WHERE week = 3 AND 'SEA' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='KC' WHERE week = 3 AND 'KC' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='PHI' WHERE week = 3 AND 'PHI' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='IND' WHERE week = 3 AND 'IND' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='DAL' WHERE week = 3 AND 'DAL' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='NO' WHERE week = 3 AND 'NO' in (favTeam, dogTeam)";      mysql_query($query);
}

if ($week = 4){
$query="UPDATE `Lines` SET homeTeam ='CIN' WHERE week = 4 AND 'CIN' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='JAX ¹' WHERE week = 4 AND 'JAX ¹' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='NE' WHERE week = 4 AND 'NE' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='ATL' WHERE week = 4 AND 'ATL' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='WAS' WHERE week = 4 AND 'WAS' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='CHI' WHERE week = 4 AND 'CHI' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='BAL' WHERE week = 4 AND 'BAL' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='NYJ' WHERE week = 4 AND 'NYJ' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='HOU' WHERE week = 4 AND 'HOU' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='TB' WHERE week = 4 AND 'TB' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='SF' WHERE week = 4 AND 'SF' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='ARI' WHERE week = 4 AND 'ARI' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='SD' WHERE week = 4 AND 'SD' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='PIT' WHERE week = 4 AND 'PIT' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='MIN' WHERE week = 4 AND 'MIN' in (favTeam, dogTeam)";      mysql_query($query);}

if ($week = 5){
$query="UPDATE `Lines` SET homeTeam ='SF' WHERE week = 5 AND 'SF' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='IND' WHERE week = 5 AND 'IND' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='MIN' WHERE week = 5 AND 'MIN' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='CLE' WHERE week = 5 AND 'CLE' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='PIT' WHERE week = 5 AND 'PIT' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='DET' WHERE week = 5 AND 'DET' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='MIA' WHERE week = 5 AND 'MIA' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='BAL' WHERE week = 5 AND 'BAL' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='DEN' WHERE week = 5 AND 'DEN' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='LA' WHERE week = 5 AND 'LA' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='DAL' WHERE week = 5 AND 'DAL' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='OAK' WHERE week = 5 AND 'OAK' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='GB' WHERE week = 5 AND 'GB' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='CAR' WHERE week = 5 AND 'CAR' in (favTeam, dogTeam)";      mysql_query($query);}

if ($week = 6){
$query="UPDATE `Lines` SET homeTeam ='SD' WHERE week = 6 AND 'SD' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='NYG' WHERE week = 6 AND 'NYG' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='NO' WHERE week = 6 AND 'NO' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='NE' WHERE week = 6 AND 'NE' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='TEN' WHERE week = 6 AND 'TEN' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='CHI' WHERE week = 6 AND 'CHI' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='DET' WHERE week = 6 AND 'DET' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='WAS' WHERE week = 6 AND 'WAS' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='MIA' WHERE week = 6 AND 'MIA' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='BUF' WHERE week = 6 AND 'BUF' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='OAK' WHERE week = 6 AND 'OAK' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='SEA' WHERE week = 6 AND 'SEA' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='GB' WHERE week = 6 AND 'GB' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='HOU' WHERE week = 6 AND 'HOU' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='ARI' WHERE week = 6 AND 'ARI' in (favTeam, dogTeam)";      mysql_query($query);
}

if ($week = 7){
$query="UPDATE `Lines` SET homeTeam ='GB' WHERE week = 7 AND 'GB' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='LA ¹' WHERE week = 7 AND 'LA ¹' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='NYJ' WHERE week = 7 AND 'NYJ' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='MIA' WHERE week = 7 AND 'MIA' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='CIN' WHERE week = 7 AND 'CIN' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='TEN' WHERE week = 7 AND 'TEN' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='PHI' WHERE week = 7 AND 'PHI' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='KC' WHERE week = 7 AND 'KC' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='JAX' WHERE week = 7 AND 'JAX' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='DET' WHERE week = 7 AND 'DET' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='ATL' WHERE week = 7 AND 'ATL' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='SF' WHERE week = 7 AND 'SF' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='PIT' WHERE week = 7 AND 'PIT' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='ARI' WHERE week = 7 AND 'ARI' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='DEN' WHERE week = 7 AND 'DEN' in (favTeam, dogTeam)";      mysql_query($query);
}

if ($week = 8){
$query="UPDATE `Lines` SET homeTeam ='TEN' WHERE week = 8 AND 'TEN' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='CIN ¹' WHERE week = 8 AND 'CIN ¹' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='HOU' WHERE week = 8 AND 'HOU' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='ATL' WHERE week = 8 AND 'ATL' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='IND' WHERE week = 8 AND 'IND' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='BUF' WHERE week = 8 AND 'BUF' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='CLE' WHERE week = 8 AND 'CLE' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='TB' WHERE week = 8 AND 'TB' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='NO' WHERE week = 8 AND 'NO' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='DEN' WHERE week = 8 AND 'DEN' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='CAR' WHERE week = 8 AND 'CAR' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='DAL' WHERE week = 8 AND 'DAL' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='CHI' WHERE week = 8 AND 'CHI' in (favTeam, dogTeam)";      mysql_query($query);
}

if ($week = 9){
$query="UPDATE `Lines` SET homeTeam ='TB' WHERE week = 9 AND 'TB' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='CLE' WHERE week = 9 AND 'CLE' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='MIN' WHERE week = 9 AND 'MIN' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='KC' WHERE week = 9 AND 'KC' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='MIA' WHERE week = 9 AND 'MIA' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='NYG' WHERE week = 9 AND 'NYG' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='BAL' WHERE week = 9 AND 'BAL' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='LA' WHERE week = 9 AND 'LA' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='SF' WHERE week = 9 AND 'SF' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='GB' WHERE week = 9 AND 'GB' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='SD' WHERE week = 9 AND 'SD' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='OAK' WHERE week = 9 AND 'OAK' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='SEA' WHERE week = 9 AND 'SEA' in (favTeam, dogTeam)";      mysql_query($query);
}

if ($week = 10){
$query="UPDATE `Lines` SET homeTeam ='BAL' WHERE week = 10 AND 'BAL' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='PHI' WHERE week = 10 AND 'PHI' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='TB' WHERE week = 10 AND 'TB' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='NO' WHERE week = 10 AND 'NO' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='TEN' WHERE week = 10 AND 'TEN' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='JAX' WHERE week = 10 AND 'JAX' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='CAR' WHERE week = 10 AND 'CAR' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='NYJ' WHERE week = 10 AND 'NYJ' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='WAS' WHERE week = 10 AND 'WAS' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='SD' WHERE week = 10 AND 'SD' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='PIT' WHERE week = 10 AND 'PIT' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='ARI' WHERE week = 10 AND 'ARI' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='NE' WHERE week = 10 AND 'NE' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='NYG' WHERE week = 10 AND 'NYG' in (favTeam, dogTeam)";      mysql_query($query);
}

if ($week = 11){
$query="UPDATE `Lines` SET homeTeam ='CAR' WHERE week = 11 AND 'CAR' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='MIN' WHERE week = 11 AND 'MIN' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='DAL' WHERE week = 11 AND 'DAL' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='CIN' WHERE week = 11 AND 'CIN' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='NYG' WHERE week = 11 AND 'NYG' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='DET' WHERE week = 11 AND 'DET' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='CLE' WHERE week = 11 AND 'CLE' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='KC' WHERE week = 11 AND 'KC' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='IND' WHERE week = 11 AND 'IND' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='LA' WHERE week = 11 AND 'LA' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='SF' WHERE week = 11 AND 'SF' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='SEA' WHERE week = 11 AND 'SEA' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='WAS' WHERE week = 11 AND 'WAS' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='OAK' WHERE week = 11 AND 'OAK' in (favTeam, dogTeam)";      mysql_query($query);
}

if ($week = 12){
$query="UPDATE `Lines` SET homeTeam ='DET' WHERE week = 12 AND 'DET' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='DAL' WHERE week = 12 AND 'DAL' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='IND' WHERE week = 12 AND 'IND' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='ATL' WHERE week = 12 AND 'ATL' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='BAL' WHERE week = 12 AND 'BAL' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='BUF' WHERE week = 12 AND 'BUF' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='NO' WHERE week = 12 AND 'NO' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='CLE' WHERE week = 12 AND 'CLE' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='HOU' WHERE week = 12 AND 'HOU' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='MIA' WHERE week = 12 AND 'MIA' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='CHI' WHERE week = 12 AND 'CHI' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='TB' WHERE week = 12 AND 'TB' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='OAK' WHERE week = 12 AND 'OAK' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='DEN' WHERE week = 12 AND 'DEN' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='NYJ' WHERE week = 12 AND 'NYJ' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='PHI' WHERE week = 12 AND 'PHI' in (favTeam, dogTeam)";      mysql_query($query);
}

if ($week = 13){
$query="UPDATE `Lines` SET homeTeam ='MIN' WHERE week = 13 AND 'MIN' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='JAX' WHERE week = 13 AND 'JAX' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='NO' WHERE week = 13 AND 'NO' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='GB' WHERE week = 13 AND 'GB' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='ATL' WHERE week = 13 AND 'ATL' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='NE' WHERE week = 13 AND 'NE' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='BAL' WHERE week = 13 AND 'BAL' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='CIN' WHERE week = 13 AND 'CIN' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='CHI' WHERE week = 13 AND 'CHI' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='OAK' WHERE week = 13 AND 'OAK' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='PIT' WHERE week = 13 AND 'PIT' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='SD' WHERE week = 13 AND 'SD' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='ARI' WHERE week = 13 AND 'ARI' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='SEA' WHERE week = 13 AND 'SEA' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='NYJ' WHERE week = 13 AND 'NYJ' in (favTeam, dogTeam)";      mysql_query($query);
}

if ($week = 14){
$query="UPDATE `Lines` SET homeTeam ='KC' WHERE week = 14 AND 'KC' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='MIA' WHERE week = 14 AND 'MIA' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='DET' WHERE week = 14 AND 'DET' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='CLE' WHERE week = 14 AND 'CLE' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='TEN' WHERE week = 14 AND 'TEN' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='IND' WHERE week = 14 AND 'IND' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='JAX' WHERE week = 14 AND 'JAX' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='TB' WHERE week = 14 AND 'TB' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='BUF' WHERE week = 14 AND 'BUF' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='CAR' WHERE week = 14 AND 'CAR' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='PHI' WHERE week = 14 AND 'PHI' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='SF' WHERE week = 14 AND 'SF' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='LA' WHERE week = 14 AND 'LA' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='GB' WHERE week = 14 AND 'GB' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='NYG' WHERE week = 14 AND 'NYG' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='NE' WHERE week = 14 AND 'NE' in (favTeam, dogTeam)";      mysql_query($query);
}

if ($week = 15){
$query="UPDATE `Lines` SET homeTeam ='SEA' WHERE week = 15 AND 'SEA' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='NYJ' WHERE week = 15 AND 'NYJ' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='BUF' WHERE week = 15 AND 'BUF' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='NYG' WHERE week = 15 AND 'NYG' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='CHI' WHERE week = 15 AND 'CHI' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='MIN' WHERE week = 15 AND 'MIN' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='HOU' WHERE week = 15 AND 'HOU' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='BAL' WHERE week = 15 AND 'BAL' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='DAL' WHERE week = 15 AND 'DAL' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='KC' WHERE week = 15 AND 'KC' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='ARI' WHERE week = 15 AND 'ARI' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='ATL' WHERE week = 15 AND 'ATL' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='DEN' WHERE week = 15 AND 'DEN' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='SD' WHERE week = 15 AND 'SD' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='CIN' WHERE week = 15 AND 'CIN' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='WAS' WHERE week = 15 AND 'WAS' in (favTeam, dogTeam)";      mysql_query($query);
}

if ($week = 16){
$query="UPDATE `Lines` SET homeTeam ='PHI' WHERE week = 16 AND 'PHI' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='CAR' WHERE week = 16 AND 'CAR' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='BUF' WHERE week = 16 AND 'BUF' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='GB' WHERE week = 16 AND 'GB' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='NE' WHERE week = 16 AND 'NE' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='CLE' WHERE week = 16 AND 'CLE' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='NO' WHERE week = 16 AND 'NO' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='JAX' WHERE week = 16 AND 'JAX' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='CHI' WHERE week = 16 AND 'CHI' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='OAK' WHERE week = 16 AND 'OAK' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='SEA' WHERE week = 16 AND 'SEA' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='LA' WHERE week = 16 AND 'LA' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='HOU' WHERE week = 16 AND 'HOU' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='PIT' WHERE week = 16 AND 'PIT' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='KC' WHERE week = 16 AND 'KC' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='DAL' WHERE week = 16 AND 'DAL' in (favTeam, dogTeam)";      mysql_query($query);
}

if ($week = 17){
$query="UPDATE `Lines` SET homeTeam ='CIN' WHERE week = 17 AND 'CIN' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='NYJ' WHERE week = 17 AND 'NYJ' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='TB' WHERE week = 17 AND 'TB' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='MIN' WHERE week = 17 AND 'MIN' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='PIT' WHERE week = 17 AND 'PIT' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='PHI' WHERE week = 17 AND 'PHI' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='DET' WHERE week = 17 AND 'DET' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='TEN' WHERE week = 17 AND 'TEN' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='IND' WHERE week = 17 AND 'IND' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='MIA' WHERE week = 17 AND 'MIA' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='ATL' WHERE week = 17 AND 'ATL' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='WAS' WHERE week = 17 AND 'WAS' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='LA' WHERE week = 17 AND 'LA' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='SD' WHERE week = 17 AND 'SD' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='DEN' WHERE week = 17 AND 'DEN' in (favTeam, dogTeam)";      mysql_query($query);
$query="UPDATE `Lines` SET homeTeam ='SF' WHERE week = 17 AND 'SF' in (favTeam, dogTeam)";      mysql_query($query);
}


// close DB connection
mysql_close($con);

?>



	
	
<!-- page loaded -->
	