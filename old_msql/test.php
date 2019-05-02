<?php
//    $sqlcon=mysql_connect('https://serwer1847991.home.pl/sql;dbname=29545564_adrian', '29545564_adrian', 'Host@2017');
//    mysql_select_db('29545564_adrian');
//$db = mysql_connect ("https://serwer1847991.home.pl/sql", "29545564_adrian", "Host@2017");

$pdo = new PDO('mysql:host=localhost;dbname=eutraden_adek', 'eutraden_adek', 'Quick@2017');
$statement = $pdo->query("SELECT 'Hello, dear MySQL user!' AS _message FROM DUAL");
$row = $statement->fetch(PDO::FETCH_ASSOC);
echo htmlentities($row['_message']);
?>


<h1>Czy działa?</h1>
<img src="miod_f.png">
