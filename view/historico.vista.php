<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Colombian Game | Acerca de ...</title>
    <link rel="icon" type="image/x-icon" href="resources/assets/img/favicon.ico" />
    <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <link href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet"
        type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet" type="text/css" />
    <link href="resources/css/styles.css" rel="stylesheet" />
</head>

<body id="page-top">
    <!-- Menú-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="sideNav">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">
            <span class="d-block d-lg-none">Clarence Taylor</span>
            <span class="d-none d-lg-block"><img draggable="false" class="img-fluid img-profile rounded-circle mx-auto mb-2" src="resources/assets/img/profile.jpg" alt="..." /></span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
            aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span
                class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="index.php">Iniciar</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="historico.php">Historico</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="acerca_de.php">Acerca de ...</a></li>
            </ul>
        </div>
    </nav>
    <div class="container-fluid p-0">

    <!-- Inicio Contenido -->

    <div style="padding-top: 20px;padding-right: 20px;padding-left: 20px;" class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 style="color: #bd5d38;" class="display-4">Historico Jugadores</h1>
            <p class="lead">¿Realmente crees conocer de Colombia?, a continuación, tienes el histórico de todos los resultados que han obtenido los diferentes jugadores, fíltrate por Cedula, Los rersultados estan ordenados del mas actual al mas antiguo.</p>
        </div>
    </div>
    <hr>
    <section style="padding-top: 10px;padding-right: 20px;padding-left: 20px;">
        <div class="resume-section-content">
            <div class="table table-responsive">
                <table id="historico" class="display" style="width:100%">
                    <thead>
                        <tr style="text-align: center;">
                            <th>Cedula</th>
                            <th>Nombre</th>
                            <th>Puntaje</th>
                            <th>Fecha y Hora</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($statement as $dato) : ?>
                        <tr style="text-align: center;">
                            <td><?php echo $dato['cedula']; ?></td>
                            <td><?php echo $dato['nombre']; ?></td>
                            <td><?php echo $dato['puntaje']; ?></td>
                            <td><?php echo $dato['fecha']; ?></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <script>
        $(document).ready(function () {
            var table = $('#historico').DataTable({
                language: {
                    url: "https://cdn.datatables.net/plug-ins/1.10.19/i18n/Spanish.json"
                },
            });
        });
    </script>

    <!-- Fin Contenido -->

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="resources/js/scripts.js"></script>
</body>
</html>