<?php
require './database.php';
$message = '';
if (!empty($_POST['email']) && !empty($_POST['password'])) {
    $sql = "INSERT INTO users (email, password) VALUES (:email, :password)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':email', $_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $stmt->bindParam(':password', $password);
    if ($stmt->execute()) {
        $message = 'Usuario creado satisfactoriamente';
    } else {
        $message = 'Hay un error creando este usuario';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Registro</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    </head>
    <body>

        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.php">Clinica Dental "Da BlackTeam"</a>
                </div>
                <ul class="nav navbar-nav">
                    
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="index.php"><span class="glyphicon glyphicon-open"> Registrar Usuario </a></li>
                    <li><a href="index.php"><span class="glyphicon glyphicon-log-in"> Iniciar Sesion </a></li>
                    <li><a href="index.php"><span class="glyphicon glyphicon-plus"> Agendar Nueva Cita </a></li>
                    <li><a href="index.php"><span class="glyphicon glyphicon-th-list"> Agenda General </a></li>
                    <li><a href="index.php"><span class="glyphicon glyphicon-list-alt"> Citas Agendadas </a></li>
                </ul>
            </div>
        </nav>

        <?php if(!empty($message)): ?>
      <p> <?= $message ?></p>
    <?php endif; ?>

    <h1>Registro</h1>
    <span>o <a href="login.php">Inicio de sesion</a></span>

    <form action="singup.php" method="POST">
      <input name="email" type="text" placeholder="Ingresa tu email">
      <input name="password" type="password" placeholder="Ingresa tu contraseña">
      <input name="confirm_password" type="password" placeholder="Confirma tu contraseña">
      <input type="submit" value="Registrar">
    </form> 
    </body>

    <footer>
        <p class="texto">Cuar es un nickname tan reservado como la pagina y su mismo creador.</p>
    </footer>
</html>
