$(document).ready(ini);

function ini(){
    $("#btnregistrar").click(enviarDatos);

    // formulario login validación
        var form = $(".form-login");
        form.bind("submit",function(){
         
        $.ajax({
           type:  form.attr('method'),
           url:  form.attr('action'),
           data:  form.serialize(),

           beforeSend: function(){
               $("#enviar").text("enviando...");
               $('#enviar').attr("disabled", true);
           },
           complete:function(data){
                $("#enviar").text("ingresar");
               $('#enviar').attr("disabled", false);
            },
           success: function(data){

               if(data =="true"){
                   document.location.href="admin.php";    
                }else{
                    $("#resultado").html("<div class='alert alert-danger' role='alert'><b>acceso denegado, </b>no se pudo comprobar el usuario</div>" + data);
                }

           },
           error: function(data){
               // que hacer si se cumplio la petición
           }

        });

        return false; // para que el formulario no se envié.

        });

}

function enviarDatos(){
    var usuario = $("#usuario").val();
    var pass = $("#pass").val();
    
    
    $.ajax({
        url:"insertar.php",
        success:function(result){
            if(result =="true"){
                $("#resultado").html("se ha registrado el usuario correctamente");   
            }else{
                $("#resultado").html("no se ha podido registrar el usuario correctamente");
            }
        },
        data:{
            usuario:usuario,
            pass:pass
        },
        type:"POST"
    });

}
