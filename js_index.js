$(document).ready(function () {
    var evento = new Array();
    var member = null;
    var fecha = null;
    var idEvento = null;
    var precio = null;
    var correo = null;
    var nombreSeleccionado = null;
    $('#reserva').hide();
    $('#cont').hide();
//    $('#selectNombre').css("display","none");

    $('#aceptar1').click(function () {
        fecha = $("#fechaEventos").val();
        fechaEvento();
        $('#selectNombre').show();
    });
    function fechaEvento() {
        $.ajax({
            data: {"fecha": fecha}, //datos json recogidos del formulario formu
            type: "POST", // método de envío de datos
            url: "servidor1.php", //código a ejecutar en el servidor
            success: function (respuesta) {
//                alert(respuesta);
                if (respuesta !== null) {
                    evento = JSON.parse(respuesta); //conversión a json de los datos de respuesta
                    if (evento !== null) {
//                        for (var i = 0; i < evento.length; i++) {
//                            alert(evento[i].idEvento + ", " + evento[i].titulo + ", " + evento[i].lugar + ", " + evento[i].hora + ", " + evento[i].fecha + ", " + evento[i].aforo + ", " + evento[i].contenido + ", " + evento[i].precio);
//                        }
                        crearSelectNombre();
                    } else {
                        alert('Error en ajax');
                    }
                }
            }
        });
    }
    function crearSelectNombre() {
        var $e = $('#nombreEventos');
        $e.empty();
        $e.append($("<option></option>")
                .attr("value", 0)
                .text("Seleccione un evento"));
        $.each(evento, function (i, member) {
            $e.append($("<option></option>")
                    .attr("value", member['idEvento'])
                    .text(member['titulo']));
        });
    }
    $('#aceptar2').click(function () {
        nombreSeleccionado = $("select#nombreEventos option:checked").val();
        if (nombreSeleccionado !== "0") {
            $('#cont').show();
            mostrarDatosEvento();
//            alert(nombreSeleccionado);
        } else {
            alert("Tienes que seleccionar un evento");
        }
    });
    $('#reservar').click(function () {
        idEvento = $('#idEvento').val();
        precio = $('#precio').val();
        correo = $('#correo').val();
        $('#reserva').show();
//        alert(idEvento);
//        alert(precio);
    });
    function mostrarDatosEvento() {
        $('#d1').empty();
        $('#d2').empty();
        $('#d3').empty();
        $('#d4').empty();
        $('#d5').empty();
        $('#d5').empty();
        for (var i = 0; i < evento.length; i++) {
            if (evento[i].idEvento === nombreSeleccionado) {
                $('#d1').append('<input type="hidden" id="idEvento" value="' + evento[i].idEvento + '" readonly/>');
                $('#d1').append("<p>" + evento[i].titulo + "</p>");
                $('#d2').append("<p>" + evento[i].lugar + "</p>");
                $('#d3').append("<p>" + evento[i].fecha + "</p>");
                $('#d4').append("<p>" + evento[i].aforo + " personas</p>");
                $('#d5').append("<p>" + evento[i].contenido + "</p>");
                $('#d6').append("<input type='text' id='precio' class='text-center' value='" + evento[i].precio + "' readonly/>");
            }
        }
    }
    $('#aceptar3').click(function () {
        reservaEvento();
    });
    function reservaEvento() {
        $.ajax({
            data: {"idEvento": idEvento, "precio": precio, "correo" : correo}, //datos json recogidos del formulario formu
            type: "POST", // método de envío de datos
            url: "servidor2.php", //código a ejecutar en el servidor
            success: function (respuesta) {
                alert(respuesta);
                if (respuesta !== null) {
//                    var variable = JSON.parse(respuesta); //conversión a json de los datos de respuesta
                    if (varible === true) {
                        alert('Se ha realizado la reserva');
                    } else {
                        alert('Error en ajax');
                    }
                }
            }
        });
    }
});