<?php
    include( 'baza.php');
    echo 'Lista kandydatów:<br>';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Łączenie się z bazą</title>
    <link rel="stylesheet" href="main.css">
</head>

<body>

   <!-- próba uploadu pliku -->
    <form action="upload.php" method="post" enctype="multipart/form-data">
        Select image to upload:
        <input type="file" name="fileToUpload" id="fileToUpload">
        <input type="submit" value="Upload Image" name="submit">
    </form>
</body>

</html>

<?php

    $tbl = $pdo->query( 'SELECT * FROM `regal`' );

        echo '<br><a href="add.php">Dodaj książkę</a><br>';
        echo '<table>';
            echo '<tr>';

                echo '<th>Tytul</th>';
                echo '<th>Autor</th>';
                echo '<th>Recenzja</th>';
                echo '<th>Opcje</th>';
                echo '<th>Ostatnia zmiana</th>';

            echo '</tr>';

        foreach( $tbl->fetchAll() as $value ) {

            echo '<tr title="Ostatnia zmiana ' . $value['last_change'] . '">';

                echo '<td>' . $value['tytul'] . '</td>';
                echo '<td>' . $value['autor'] . '</td>';
                echo '<td>' . $value['recenzja'] . '</td>';
                echo '<td><a href="usun.php?id=' . $value['id'] . '">Usuń</a> | <a href="add.php?id=' . $value['id'] . '">Edytuj</a></td>';
                echo '<td>' . $value['last_change'] . '</td>';

            echo '</tr>';
        }
        echo '</table>';


//foreach( $tbl  as $value) {
//    echo 'Imie: ';
//    echo $value['imie'];
//    echo ', Nazwisko: ';
//    echo $value['nazwisko'];
//    echo ', Punkty: ';
//    echo $value['punkty'];
//    echo ' dostał się na kierunek informatyka<br>';
//}
?>
