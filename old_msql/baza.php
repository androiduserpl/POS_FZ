<?php

    try {
        $pdo = new PDO('mysql:host=localhost;dbname=eutraden_adek', 'eutraden_adek', 'Quick@2017');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch( PODExeption $e) {

        echo 'ERROR: ' . $e->getMessage();

    }






//$tbl = [];
//
//$tbl[] = [
//    'imie' => 'Ania',
//    'nazwisko' => 'Awwwwww',
//    'punkty' => '89'
//];
//
//$tbl[] = [
//    'imie' => 'Rafał',
//    'nazwisko' => 'Krrrrrr',
//    'punkty' => '88'
//]
