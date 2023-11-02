<?php

    $sql = "SELECT * FROM productos ORDER BY id DESC;";

    $query = mysqli_query($conn, $sql);

    if(!$query){
        die('Hubo un error en la consulta: ' . mysqli_error($conn));
    }

    $productos = mysqli_fetch_all($query, MYSQLI_ASSOC);

?>