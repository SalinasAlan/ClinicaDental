<?php
    include_once('./connDB.php');

    $usuario = $_POST['usuario'];
    $contrasenia = $_POST['contrasenia'];

    // echo ('<h1>'.$usuario.'</h1>');
    // echo ('<h1>'.$contrasenia.'</h1>');

    $sql = "SELECT * FROM USUARIOS WHERE nombre='$usuario' AND contrasenia ='$contrasenia'";
    $resultado = $conn->query($sql);
    $row = $resultado->fetch_assoc();

    if ($resultado->num_rows > 0) {
        session_start();
        $nombre = $row['nombre'];
        $role = $row['idRole'];
        $telefono = $row['telefono'];
        $correo = $row['correo'];
        $_SESSION['nombre'] = $nombre;
        $_SESSION['role'] = $role;
        $_SESSION['telefono'] = $telefono;
        $_SESSION['correo'] = $correo;
        
        switch ($_SESSION['role']) {
            case 1:
                header('Location: ./agendaDen.php');
                break;            
            case 2:
                header('Location: ./agendaRecep.php');
                break;
            case 3:
                header('Location: ./agendaPas.php');
                break;    
            // default:
            //     header('Location: ./index.php');   
        }

    }else{
        session_start();
        $_SESSION['error'] = "Usuario y/o contraseña incorrectos";
        header('Location: ./login.php');
    }
?>