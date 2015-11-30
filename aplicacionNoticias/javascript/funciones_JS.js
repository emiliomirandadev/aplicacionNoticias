/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function inicio() {
    window.location.href = "config.php";
}
function agregar_noticia() {
    window.location.href = "mod_noticia.php";
}
function loadUsuario() {

    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (xhttp.readyState === 4 && xhttp.status === 200) {
            document.getElementById("demo").innerHTML = xhttp.responseText;
        }
    };
    xhttp.open("GET", "listar_usuarios_modificar.php", true);
    xhttp.send();
}
function loadNoticia() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (xhttp.readyState === 4 && xhttp.status === 200) {
            document.getElementById("demo").innerHTML = xhttp.responseText;
        }
    };
    xhttp.open("GET", "listar_noticias_modificar.php", true);
    xhttp.send();
}

function BorrarNoticia(id) {

    var xhttp = new XMLHttpRequest();
    var url = 'borrar_noticia.php?id=' + id;
    xhttp.onreadystatechange = function () {
        if (xhttp.readyState === 4 && xhttp.status === 200) {
            document.getElementById("demo").innerHTML = xhttp.responseText;
        }
    };
    xhttp.open("GET", url, true);
    xhttp.send();
}

function cargarDiv()
{
    $.ajax({// incio petición
        type: "POST", //Cuando se haya enviado un formulario
        url: "listar_noticias.php", //se invoca el archivo infoclientes.php
        //asigno el campo a la variable de peticion sql
    }).done(function (result) {												 //recibo el resulta
        $("#noti").html(result);

    });

}
function ModNoticia(id) {

    var xhttp = new XMLHttpRequest();
    var url = 'mod_noticia.php?id=' + id;
    xhttp.onreadystatechange = function () {
        if (xhttp.readyState === 4 && xhttp.status === 200) {
            document.getElementById("demo").innerHTML = xhttp.responseText;
        }
    };
    xhttp.open("GET", url, true);
    xhttp.send();
}