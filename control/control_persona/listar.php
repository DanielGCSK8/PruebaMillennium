<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);

include("../../modelo/Conexion.php");
include("../../modelo/dao/dao_personas.php");
include("../../modelo/entidades/persona.php");
$objPersona = new Persona(null,"", "");
        $objControlPersona = new DAOPersonas($objPersona);
        $array = $objControlPersona->listar();
?>
        <html lang="en">
  
        <head>
            <title> Lista de personas</title>
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
            <a class="btn btn-success" href="../../index.php"> Volver </a>
            <br>
            <br>
            
            <table class="table table-bordered table-sm">
                <tr>
                    <h4>Lista De Personas</h4>
                </tr>
                <tr>
                    <td>Id</td>
                    <td>Nombre</td>
                    <td>Apellido</td>
                    <td>Acciones</td>


                </tr>
                <?php
                while ($row = mysqli_fetch_array($array)) {
                ?>
                    <tr>
                        <td><?php echo $row['id'] ?></td>
                        <td><?php echo $row['nombre'] ?></td>
                        <td><?php echo $row['apellido'] ?></td>
                        <td>
                            <form action="consultar.php" method="POST">
                            <Button name="btnConsultar" id="btnConsultar" value="<?php echo $row['id'] ?>" class="btn btn-success" type="submit">Seleccionar</Button>
                            <a href="eliminar.php?id=<?php echo $row['id'] ?>" class="btn btn-danger">Eliminar</a>
                            
                            </form>
                            
                        </td>

                    </tr>
                <?php
                }
                ?>

            </table>
            
        </body>
