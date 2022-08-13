$(document).ready(function(){
    $('#btnEditar').click(function(){
        if($('#Nombre').val() != "" && $('#Apellido').val() != ""){
        var datos=$('#mainForm').serialize();
        $.ajax({
            type:"POST",
            url:"editar.php",
            data:datos,
            success:function(r){
                alert("Actualización exitosa");
                setTimeout(function() {

                    window.location="listar.php";

               },500);
            }
        });
    } else {
        alert('Debes llenar todos los campos');
    }

        return false;
    });
});