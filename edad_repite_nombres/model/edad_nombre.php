<?php 

    $edad = $_POST['edad'];
    $nombre = $_POST['nombre'];

    // echo $edad;
    // echo "<br>";
    // echo $nombre;

    for($i=0; $i < $edad; $i++){
        echo $nombre;
        echo "<br>";
    }
    

?>