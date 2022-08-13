$(document).ready(function(){
    $('#btnIngresar').click(function(){
        if($('#Nombre').val() != "" && $('#Apellido').val() != ""){
        var datos=$('#mainForm').serialize();
        
        $.ajax({
            type:"POST",
            url:"control/control_persona/guardar.php",
            data:datos,
            success:function(r){
                alert("Guardado exitoso");
                setTimeout(function() {

                    window.location="./control/control_persona/listar.php";

               },500);
            }
            
        });
    } else {
        alert('Debes llenar todos los campos');
    }

        return false;
    });
});