<?php

include("./vista/barraNav.php");
?>

    <div class="container p-6">
        <div class="row">
            <div class="col-md-6">
                <br>
                <form id="mainForm" action="./control/control_persona/listar.php" method="POST">
                    <div class="card">
                        <div class="card-header">
                            Ingresar Persona
                        </div>
                        <div class="card-body">
                            <input type="text" class="form-control" name="Nombre" id="Nombre" placeholder="Ingresar nombre" value="">
                            
                        </div>
                        <div class="card-body">
                        <input type="text" class="form-control" name="Apellido" id="Apellido" placeholder="Ingresar apellido" value="">
                        </div>
                        <div class="card-footer text-muted">

                        </div>
                    </div>
                    <br>
                    <Button name="btnIngresar" id="btnIngresar" class="btn btn-primary" type="submit">Guardar</Button>
                    <Button name="btnListar" id="btnListar" class="btn btn-success" type="submit">Listar</Button>
                    
                </form>

            </div>
        </div>
    </div>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    
    <script src="js/app.js"></script>
</body>

</html>