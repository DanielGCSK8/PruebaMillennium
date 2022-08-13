<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);

include("../../modelo/Conexion.php");
include("../../modelo/dao/dao_personas.php");
include("../../modelo/entidades/persona.php");

$id = $_POST["btnConsultar"];
$objDatos = new Persona($id, "","");
$objControlDatos = new DAOPersonas($objDatos);
$datos = $objControlDatos->consultar();

$id = $datos->getId();
$nombre = $datos->getNombre();
$apellido = $datos->getApellido();


?>
<html lang="en">

<head>
            <title>Editar</title>
            <!-- Required meta tags -->
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

            <!-- Bootstrap CSS v5.2.0-beta1 -->
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
            <link href="../../js/bootstrap.min.css" rel="stylesheet">

        </head>

        <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a href="../../index.php" class="navbar-brand">Crud Personas</a>
        <ul class="navbar-nav ml-auto">
            
        </ul>
    </nav>
    <br>
    <h4>Editar Personas</h4>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <br>
                <form id="mainForm" action="editar.php" method="POST">
                    <div class="card">
                        <div class="card-header">
                            Editar Persona
                        </div>
                        <div class="card-body">
                        <input type="hidden" class="form-control" name="Id" id="Id" placeholder="Ingresar nombre" value="<?php echo $id; ?>">
                            <input type="text" class="form-control" name="Nombre" id="Nombre" placeholder="Ingresar nombre" value="<?php echo $nombre; ?>" require>
                            
                        </div>
                        <div class="card-body">
                        <input type="text" class="form-control" name="Apellido" id="Apellido" placeholder="Ingresar apellido" value="<?php echo $apellido; ?>" require>
                        </div>
                        <div class="card-footer text-muted">

                        </div>
                    </div>
                    <br>
                    <Button name="btnEditar" id="btnEditar" class="btn btn-success" type="submit">Modificar</Button>
                    <a href="listar.php" class="btn btn-danger">Volver</a>
                    
                </form>

            </div>
        </div>
    </div>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    
    <script src="../../js/edit.js"></script>
</body>

</html>