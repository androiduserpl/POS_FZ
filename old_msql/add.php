<?php

    include( 'baza.php');

    $last_change = date("G:i:s d.m.y"); // aktualna data (zmiany)

    if( isSet( $_POST['autor'] ) ) {

        $id = isSet( $_POST['id'] ) ? intval( $_POST['id'] ) : 0;


        if($id > 0) {

            $sth = $pdo->prepare( 'UPDATE `regal` SET `autor`=:autor,`tytul`=:tytul,`recenzja`=:recenzja , `last_change`=:last_change WHERE id = :id' );
            $sth->bindParam( ':id', $id );
        } else {
            $sth = $pdo->prepare( 'INSERT INTO `regal`(`autor`, `tytul`, `recenzja`, `last_change` ) VALUES ( :autor , :tytul , :recenzja , :last_change)' );
        }

        $sth->bindParam( ':autor', $_POST['autor'] );
        $sth->bindParam( ':tytul', $_POST['tytul'] );
        $sth->bindParam( ':recenzja', $_POST['recenzja'] );
        $sth->bindParam( ':last_change', $_POST['last_change'] );
        $sth->execute();

        header( 'location: loop.php' );

    }

    $idGet = isSet( $_GET['id'] ) ? intval( $_GET['id'] ) : 0;

    if( $idGet > 0 ) {

        $sth = $pdo->prepare( 'SELECT * FROM regal WHERE id = :id' );
        $sth->bindParam( ':id', $idGet );
        $sth->execute();

        $result = $sth->fetch();
    }

?>

<form method="post" action="add.php">

    <?php


        if( $idGet > 0 ) {
            echo '<input type="hidden" name="id" value="' . $idGet . '">';
        }

    ?>

    Author: <input type="text" name="autor" <?php if( isSet( $result['autor'] ) ) { echo 'value="' . $result['autor'] . '"' ; } ?>><br><br>
    Tytul: <input type="text" name="tytul" <?php if( isSet( $result['tytul'] ) ) { echo 'value="' . $result['tytul'] . '"' ; } ?>><br><br>
    Recenzja: <textarea name="recenzja"> <?php if( isSet( $result['recenzja'] ) ) { echo $result['recenzja'] ; } ?></textarea><br><br>



    Dzisiejsza data: <input type="text" name="last_change" <?php echo 'value="' . $last_change . '"' ?>><br><br>





    <input type="submit" value="Zapisz">
</form>


<button><a href="loop.php">Lista książek</a></button>
