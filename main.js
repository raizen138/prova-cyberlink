$(document).ready(function() {

    $("#loginBtn").on("click", logIn);
    $("#registerRedirect").on("click", changeToRegister);

});

function logIn(){

    var username = $("input[name=uname]").val();
    var pswd = $("input[name=psw]").val();

    var dataSend = {
        uname: username,
        psw: pswd
    };

    $.ajax({
        data: dataSend,
        url: "wsLogin.php",
        success: function(respuesta) { 
            if(respuesta.user != -1){
                $("#loginDiv").addClass("hidden");
                $("#initialPage").removeClass("hidden");
            }else{
                $("error").append("<span>El usuario i/o contraseña es erroneo.</span>");
            }
        },
        error: function() {
          console.log("No se ha podido obtener la información");
        }
    });

}

function changeToRegister(){
    $("#loginDiv").addClass("hidden");
    $("#registerDiv").removeClass("hidden");

}

function getStores(){

    $.ajax({
        url: "wsStores.php",
        success: function(respuesta) { 
    
          var listaTiendas = $("#initialPage");
          $.each(respuesta.data, function(index, elemento) {
            listaTiendas.append(
                '<div>'
              +     '<p>' + elemento.store_name + '</p>'
              +     '<img src=' + elemento.store_img + '></img>'
              + '</div>'
            );    
          });
        },
        error: function() {
          console.log("No se ha podido obtener la información");
        }
    });

}