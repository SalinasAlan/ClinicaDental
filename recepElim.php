<?php

    include_once('./connDB.php');

    $idCita = $_POST['eliminar'];

    $sql = "DELETE FROM citas WHERE idCita = $idCita";
    $resultado = $conn->query($sql);

    header('Location: ./agendaRecep.php');