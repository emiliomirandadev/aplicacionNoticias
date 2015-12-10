/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


function LoadComprobar() {
    var usuario = $('#usuario').val();
    var contrasenya = $('#contrasenya').val();
    $.ajax({// incio petición
        type: "POST", //Cuando se haya enviado un formulario
        url: "comprobar_login.php", //se invoca el archivo infoclientes.php
        data: {nomusu: usuario, nomcon: contrasenya}													    //asigno el campo a la variable de peticion sql
    }).done(function (result) {		 //recibo el resulta
        $("#demo").html(result);

    });
}

function BorrarUsuario(id) {
    var id_us = id;
    $.ajax({
        type: "POST",
        url: "borrar_user.php",
        data: {
            id_usuario: id_us
        }
    }).done(function (result) {
        $("#demo").html(result);
    });
}

function CerrarSess() {
    var cerrar = 'cerrar';
    $.ajax({
        type: "POST",
        url: "funciones.php",
        data: {
            cerr: cerrar
        }
    });
}
function cargarDiv()
{
    $.ajax({// incio petición
        type: "POST", //Cuando se haya enviado un formulario
        url: "listar_noticias.php", //se invoca el archivo infoclientes.php
        //asigno el campo a la variable de peticion sql
    }).done(function (result) {		 //recibo el resulta
        $("#noti").html(result);

    });

}