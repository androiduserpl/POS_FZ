<?php

function dodaj( $plik, $plik_tmp){
    // polaczenie z mysql
    $lacz=lacz_bd();

// sprawdzenie czy plik zostal wgrany
    if(is_uploaded_file($plik_tmp)){
        move_uploaded_file($plik_tmp, "bin/$plik");
    }
        else{
            ?><div id="rejestr"><p>niemozna dodac pliku</p></div><?php
            exit;
        }
// TUTAJ SCIAZKA DO PLIKU, w Twoim przypadku byłby to upload/
$nazwa = 'bin/'.$plik;

//wstawianie
    $wynik= $lacz->query("insert into pliki (pliki) values
                        ('".$nazwa."')");
    // sprawdzenie
    if($wynik){
            ?><div id="rejestr"><p>plik dodany<p></div><?php
    } else {
        ?><div id="rejestr"><p>Niemozna dodac pliku</p></div><?php
        }

    }

?>
