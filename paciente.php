<?php

    include_once('./connDB.php');

    $nombre = $_SESSION['nombre'];
    $sql = "SELECT * FROM citas WHERE paciente = '$nombre'";
    $resultado = $conn->query($sql);
    if ($resultado->num_rows > 0) {
        echo('
        <table class="table" style="width: 70%; margin: 30px auto 30px auto;">
        <thead class="thead-dark">
        <tr>
        <th scope="col">#</th>
        <th scope="col">Dentista</th>
        <th scope="col">Horario</th>
        </tr>
        </thead>
        <tbody>
        ');
        
        $index = 1;

        while ($row = $resultado->fetch_assoc()) {           
            echo('
            <tr>
            <th scope="row">'.$index.'</th>
            <td>'.$row['dentista'].'</td>
            <td>'.$row['horario'].'</td>
            </tr>
            ');    
            $index++;
        }
        echo('
        </tbody>
        </table>
        ');
    }else{
        echo('
        <div class="table" style="width: 70%; margin: 30px auto 30px auto;">
        <h1>No hay citas</h1>
        </div>
        ');
    }