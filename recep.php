<?php

    include_once('./connDB.php');

    $sql = "SELECT * FROM citas";
    $resultado = $conn->query($sql);
    if ($resultado->num_rows > 0) {
        echo('
        <table class="table" style="width: 70%; margin: 30px auto 30px auto;">
        <thead class="thead-dark">
        <tr>
        <th scope="col">#</th>
        <th scope="col">Paciente</th>
        <th scope="col">Horario</th>
        <th scope="col">Telefono</th>
        <th scope="col">Dentista</th>
        <th scope="col"></th>
        </tr>
        </thead>
        <tbody>
        ');
        
        $index = 1;

        while ($row = $resultado->fetch_assoc()) {           
            echo('
            <tr>
            <th scope="row">'.$index.'</th>
            <td>'.$row['paciente'].'</td>
            <td>'.$row['horario'].'</td>
            <td>'.$row['telefono'].'</td>
            <td>'.$row['dentista'].'</td>
            <td>
            <form method="post" action="./recepElim.php">
                <input type="hidden" name="eliminar" value="'.$row["idCita"].'">
                <button type="submit" class="btn btn-danger">Eliminar</button>
            </form>
            </td>
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
