
<?php
  session_start();
  if (isset($_SESSION['user_id'])) {
    header('Location: /Tarea/indexEmploy.php');
  }
  require 'database.php';
  if (!empty($_POST['email']) && !empty($_POST['password'])) {
    $records = $conn->prepare('SELECT id, email, password FROM users WHERE email = :email');
    $records->bindParam(':email', $_POST['email']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);
    $message = '';
    if (count($results) > 0 && password_verify($_POST['password'], $results['password'])) {
      $_SESSION['user_id'] = $results['id'];
      header("Location: /Tarea/indexEmploy.php");
    } else {
      $message = 'Sorry, those credentials do not match';
    }
  }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Login</title>
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
                    <li><a href="index.php"><span class="glyphicon glyphicon-plus"> Agendar Nueva Cita </a></li>
                    <li><a href="index.php"><span class="glyphicon glyphicon-th-list"> Agenda General </a></li>
                    <li><a href="index.php"><span class="glyphicon glyphicon-list-alt"> Citas Agendadas </a></li>
                </ul>
            </div>
        </nav>

        <div>
        <?php if(!empty($message)): ?>
      <p> <?= $message ?></p>
    <?php endif; ?>

    <h1>Iniciar sesion</h1>
    <span>o <a href="singup.php">Registrarme</a></span>

    <form action="login.php" method="POST">
      <input name="email" type="text" placeholder="Ingresa tu email">
      <input name="password" type="password" placeholder="Ingresa tu contraseña">
      <input type="submit" value="Iniciar sesion">
    </form>
        </div>
    </body>

    <footer>
        <p class="texto">Cuar es un nickname tan reservado como la pagina y su mismo creador.</p>
    </footer>
</html>
