<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Home</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <!-- Course CSS -->
        <!--<link rel="stylesheet" type="text/css" href="../css/css_importarFuente.css" media="screen" />-->
        <script src="jquery-3.4.1.min.js"></script>
        <script src="js_index.js"></script>
        <style>
            body{
                background-image: url('img/fondos/bosque.jpg');
                color: white;
            }
        </style>
    </head>
    <body>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <!--<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <div class="container border border-primary">
            <div class="row justify-content-center c1"> 
                <div class="col-md-4 mt-3 mb-3">
                    <h1>Eventos </h1>
                    <form class="form-inline" method="POST">
                        <label for="text">Fechas de eventos:</label><br>
                        <input type="date" id="fechaEventos"/>
                        <input type="button" class="btn btn-primary" id="aceptar1" name="aceptar1" value="Aceptar"/>
                    </form>
                </div>
            </div>
            <div id="selectNombre" class="row justify-content-center c1"> 
                <div class="col-md-4 mt-3 mb-3">
                    <form class="form-inline" method="POST">
                        <label for="text">Nombres de eventos:</label><br>
                        <select id="nombreEventos" class="form-control">                            
                        </select>
                        <input type="button" class="btn btn-primary" id="aceptar2" value="Aceptar"/>
                    </form>
                </div>
            </div>
        </div>
        <div id="cont" class="container">
            <div class="row justify-content-center"> 
                <div class="col-md-4 mt-3 mb-3 border border-primary">
                    <form class="form-inline text-center" method="POST">
                        <h4 class="text-center">Titulo del evento:</h4>
                        <div class="w-100"></div>
                        <div id="d1" class="text-center">
                        </div>
                        <div class="w-100"></div>
                        <h4 class="text-center">Lugar del evento:</h4>
                        <div class="w-100"></div>
                        <div id="d2" class="text-center">
                        </div>
                        <div class="w-100"></div>
                        <h4 class="text-center">Fecha del evento:</h4>
                        <div class="w-100"></div>
                        <div id="d3" class="text-center">
                        </div>
                        <div class="w-100"></div>
                        <h4 class="text-center">Aforo del evento:</h4>
                        <div class="w-100"></div>
                        <div id="d4" class="text-center">
                        </div>
                        <div class="w-100"></div>
                        <h4 class="text-center">Descripción del evento:</h4>
                        <div class="w-100"></div>
                        <div id="d5" class="text-center">
                        </div>
                        <div class="w-100"></div>
                        <h4 class="text-center">Precio del evento:</h4>
                        <div class="w-100"></div>
                        <div id="d6" class="text-center">
                        </div>
                        <div class="w-100"></div>
                        <input type='button' id="reservar" class="btn btn-primary" value='Reservar'/>
                    </form>
                </div>
                <div class="col-md-4 mt-3 mb-3 border border-primary">
                    <form class="form-inline" method="POST">
                        <h2>Para hacer la reserva del evento</h2>
                        <div id="reserva">
                            <div class="w-100"></div>
                            <label>Introduce tu correo para reservar plaza: </label>
                            <div class="w-100"></div>
                            <input type="email" id="correo" value=""/>
                            <div class="w-100"></div>
                            <input type="button" class="btn btn-primary" id="aceptar3" value="Aceptar"/>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </body>
</html>