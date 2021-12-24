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
    <div>
        <p>Datos del Jugador:</p>
        <table class="table table-responsive table-striped">
            <tbody>
            <tr style="text-align: center;">
                <td style="width: 20%; padding: 2px; background: #014568; color: #FFFFFF; text-align: center; border-top-left-radius: 8px;">Identificador:</td>
                <td style="width: 30%; padding: 2px; background: #014568; color: #FFFFFF; text-align: center;">Cedula:</td>
                <td style="width: 50%; padding: 2px; background: #014568; color: #FFFFFF; text-align: center; border-top-right-radius: 8px;">Nombre:</td>
            </tr>
            <tr style="text-align: center;">
                <td style="width: 20%; padding: 2px;"><?php echo $id ?></td>
                <td style="width: 30%; padding: 2px;"><?php echo $cedula ?></td>
                <td style="width: 50%; padding: 2px;"><?php echo $nombre ?></td>
            </tr>
            </tbody>
        </table>
    </div>
</div>
<hr>
<section style="padding-top: 10px;padding-right: 40px;padding-left: 40px;">
    <div>
        <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
            <div class="flex-grow-1">
                <h3 class="mb-0"><?php echo $categorias_view[1] ?></h3>
                <div class="subheading mb-3"><?php echo $consecutivo ?>/25</div>
                <p><?php echo $preguntas_view[0][2] ?></p>
            </div>
            <div class="flex-shrink-0"><span class="text-primary">Puntos = <?php echo $puntos ?>/25</span></div>
        </div>
    
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">

            <div class="form-check">
                <input class="form-check-input" type="radio" name="respuesta" id="respuesta1" value="<?php echo $respuestas_view[0][3] ?>">
                <label class="form-check-label" for="respuesta1">
                    <?php echo $respuestas_view[0][2] ?>
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="respuesta" id="respuesta2" value="<?php echo $respuestas_view[1][3] ?>">
                <label class="form-check-label" for="respuesta2">
                    <?php echo $respuestas_view[1][2] ?>
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="respuesta" id="respuesta3" value="<?php echo $respuestas_view[2][3] ?>">
                <label class="form-check-label" for="respuesta3">
                    <?php echo $respuestas_view[2][2] ?>
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="respuesta" id="respuesta4" value="<?php echo $respuestas_view[3][3] ?>">
                <label class="form-check-label" for="respuesta4">
                    <?php echo $respuestas_view[3][2] ?>
                </label>
            </div>

            
            <div style="display: flex; align-items: right; justify-content: right;">
                <button name="send" type="submit" class="btn btn-danger">Enviar Respuesta</button>
            </div>
            
        </form>
    </div>
</section>

<!-- Fin Contenido -->

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="resources/js/scripts.js"></script>
</body>
</html>