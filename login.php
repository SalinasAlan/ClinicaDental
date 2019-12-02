<?php
    session_start();

    switch (isset($_SESSION['role'])) {
        case 1:
            header('Location: ./agendaDen.php');
            break;            
        case 2:
            header('Location: ./agendaRecep.php');
            break;
        case 3:
            header('Location: ./agendaPas.php');
            break;    
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</head>

<body>

    <nav class="navbar navbar-dark bg-dark navbar-expand-lg">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.php">Clinica Dental "Da BlackTeam"</a>
            </div>
        </div>
    </nav>

    <div class="wrapper fadeInDown" style="margin-top: -80px;">
        <div id="formContent">
            <form  method="post" action="./agenda.php">
                <h1 style="margin-bottom: 20px;">Login</h1>
                <?php
                    if (isset($_SESSION['error'])) {
                        echo('
                        <div class="alert alert-danger" role="alert">
                            '.$_SESSION['error'].'
                        </div>
                        ');
                    }
                ?>
                <input type="text" id="usuario" class="fadeIn second" name="usuario" placeholder="usuario" required focus>
                <input type="password" id="contrasenia" class="fadeIn third" name="contrasenia" placeholder="contraseña"
                    required>
                <input type="submit" class="fadeIn fourth" value="Log In">
            </form>
        </div>
    </div>
</body>

<footer class="bg-dark">
    <p class="texto">Clinica dental</p>
</footer>

</html>