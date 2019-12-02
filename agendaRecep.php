<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Agenda</title>
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

            <ul class="nav navbar-nav navbar-right">
                <li><a href="./login.php"><span class="glyphicon glyphicon-log-in"> Cerrar Sesion </a></li>
            </ul>
        </div>
    </nav>

    <h1 style="max-width: 100vw; margin-top: 30px; text-align: center;">Agenda de citas</h1>
    <h3 style="max-width: 100vw; margin: 10px; text-align: center;">Bienvenida</h3>

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
            <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>72223654567</td>
                <td>Angela</td>
                <td>
                    <button type="button" class="btn btn-danger">Eliminar</button>
                </td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td></td>
                <td></td>
                <td>
                    <button type="button" class="btn btn-danger">Eliminar</button>
                </td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>Larry</td>
                <td>the Bird</td>
                <td></td>
                <td></td>
                <td>
                    <button type="button" class="btn btn-danger">Eliminar</button>
                </td>
            </tr>
        </tbody>
    </table>

    <footer class="bg-dark">
        <p class="texto">Cuar es un nickname tan reservado como la pagina y su mismo creador.</p>
    </footer>
</body>

</html>