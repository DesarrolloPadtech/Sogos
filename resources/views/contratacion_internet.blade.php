<!DOCTYPE html>
<html style="font-size: 16px;" lang="es">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="JHON DO​E">
    <meta name="description" content="">
    <title>Contratacion de Internet</title>

    <link rel="stylesheet" href="{{asset('css/Internet.css')}}" media="screen">
    <link rel="stylesheet" href="{{asset('css/Contacto.css')}}" media="screen">
    <link rel="stylesheet" href="{{ asset('css/nicepage.css') }}">
    <!--<link rel="stylesheet" href="{{asset('css/cargar-archivo.css')}}" media="screen">
		<link rel="stylesheet" href="{{asset('css/jquery.toast.css')}}" media="screen">-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
          integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script src="{{ asset('js/jquery.js') }}" defer></script>
    <script src="{{ asset('js/nicepage.js') }}" defer></script>
    <script src="{{ asset('js/contact.js') }}" defer></script>


    <meta name="generator" content="Nicepage 4.15.11, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Ubuntu:300,300i,400,400i,500,500i,700,700i|Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
    <link id="u-page-google-font" rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
    <link rel="icon" href="{{asset('images/Sogos_ico.png')}}">

    <script
            src="https://code.jquery.com/jquery-3.6.3.js"
            integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM="
            crossorigin="anonymous"></script>

    <script type="application/ld+json">
    		{
			"@context": "http://schema.org",
			"@type": "Organization",
			"name": "",
			"logo": "{{asset('/images/NUEVO_LOGO_SOGOS.jpg')}}"
    		}

    </script>

    <meta name="theme-color" content="#3a0e63">
    <meta property="og:title" content="ContratoInternet">
    <meta property="og:type" content="website">

</head>

<style>

    .show{
        display: block;
    }

    .hide{
        display: none;
    }

    #section1, #section2, #section3, #section4{
        padding: 10px;
    }
    .card-body{
        background-color: #d4edda;
    }

</style>

<body class="u-body u-xl-mode" data-lang="es">

@include('layouts.header')


<div class="container">

    <div class="show" id="section1">

        <form action="#" method="POST" class="u-clearfix u-form-spacing-10 u-form-vertical u-inner-form" source="custom"
              name="form" style="padding: 10px;" id="serviceForm">

            <div class="form-group col-md-12">
                <h3>Dirección de Instalación</h3>
                <div>
                    <i class="fa fa-home fa-3x" aria-hidden="true"></i>
                    <label style="font-size: 20px;color: #55667a;">Ingresa tus datos para validar cobertura</label>

                </div>
            </div>
            <hr>

            <div class="form-group col-md-6">
                <label for="cp">Código Postal</label>
                <input type="number" class="form-control" id="cp">
            </div>

            <div class="form-group col-md-6"></div>

            <div class="form-group col-md-6">
                <label for="street">Calle</label>
                <input type="text" maxlength="45" class="form-control" id="street">
            </div>

            <div class="form-group col-md-3">
                <label for="num_ext">No. Exterior</label>
                <input type="text" maxlength="7" class="form-control" id="num_ext">
            </div>

            <div class="form-group col-md-3">
                <label for="num_int">No. Interior</label>
                <input type="text" maxlength="7" class="form-control" id="num_int">
            </div>

            <div class="form-group col-md-6">
                <label for="state">Estado</label>
                <input type="text" maxlength="40" class="form-control" id="state">
            </div>

            <div class="form-group col-md-3">
                <label for="town">Alcaldía / Municipio</label>
                <input type="text" maxlength="40" class="form-control" id="town">
            </div>

            <div class="form-group col-md-3">
                <label for="neighborhod">Colonia</label>
                <input type="text" maxlength="40" class="form-control" id="neighborhod" >
            </div>

            <div class="form-group col-md-12">
                <h4>Cualquier información adicional es de ayuda</h4>
            </div>

            <div class="form-group col-md-6">
                <label for="street1">Entre calle 1</label>
                <input type="text" maxlength="40" class="form-control" id="street1">
            </div>

            <div class="form-group col-md-6">
                <label for="street2">Entre calle 2</label>
                <input type="text" maxlength="40" class="form-control" id="street2">
            </div>

            <div class="form-group col-md-3">
                <label for="building">Edificio</label>
                <input type="text" maxlength="40" class="form-control" id="building">
            </div>

            <div class="form-group col-md-3">
                <label for="depto">Departamento</label>
                <input type="text" maxlength="40" class="form-control" id="depto">
            </div>

            <div class="form-group col-md-3">
                <label for="manzana">Manzana</label>
                <input type="text" maxlength="7" class="form-control" id="manzana">
            </div>

            <div class="form-group col-md-3">
                <label for="lote">Lote</label>
                <input type="text" maxlength="7" class="form-control" id="lote">
            </div>

            <div class="form-group col-md-12 ">
                <button type="button" class="btn btn-primary" style="float: right" id="next1" onclick="changeSection(id)">Continuar</button>
            </div>


        </div>

    <div class="hide" id="section2">

        <div class="form-group col-md-12">
            <div>
                <i class="fa fa-map fa-3x" aria-hidden="true"></i>
                <label style="font-size: 20px;color: #55667a;">Verifica tu dirección en el mapa</label>

            </div>
        </div>
        <hr>

        <!--<div id="map"></div>
        <iframe
                width="450"
                height="250"
                frameborder="0" style="border:0"
                referrerpolicy="no-referrer-when-downgrade"
                src="https://www.google.com/maps/embed/v1/search?key=AIzaSyD1Ad7Wxn0aZLaj1nlR_0udD8tZDZsVH3o&q=senior+assisted+care+near+me&zoom=9"
                allowfullscreen>
        </iframe>

        -->

        <div id="map" style="height: 400px;width: 100%;"></div>

        <!--
          The `defer` attribute causes the callback to execute after the full HTML
          document has been parsed. For non-blocking uses, avoiding race conditions,
          and consistent behavior across browsers, consider loading using Promises
          with https://www.npmjs.com/package/@googlemaps/js-api-loader.
          -->
        <script
                src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD1Ad7Wxn0aZLaj1nlR_0udD8tZDZsVH3o&callback=initMap&v=weekly"
                defer
        ></script>

        <div class="form-group col-md-12">
            <button type="button" class="btn btn-primary" style="float: right" id="next2" onclick="changeSection(id)">Continuar</button>
        </div>

    </div>


    <div class="hide" id="section3">

        <div class="form-group col-md-12">
            <div>
                <label style="font-size: 20px;color: #55667a;">Valida tu velocidad</label>
            </div>
        </div>

        <div class="form-group col-md-6">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title">Dirección confirmada</h3>
                    <h5 id="card-text" class="card-text"></h5>
                    <a href="#" onclick="changeSection('4');return false;">Cambiar dirección</a>
                </div>
            </div>
        </div>

        <div class="form-group col-md-6">
            <div class="card" style="margin-top:2rem">

                <div class="card-body" style="display: flex;justify-content: space-between; background-color: #0067ee; color:white" >
                    <h3 class="card-title">Internet 3 MB</h3>
                    <h5 class="card-text"> $255 al mes</h5>
                </div>
                <ul class="list-group list-group-flush" style="font-size: 1.125em; text-align: center">
                    <li class="list-group-item">Internet Ilimitado</li>
                    <li class="list-group-item">x 12 Meses</li>
                </ul>
            </div>

        </div>

        <div class="form-group col-md-12 ">
            <button type="button" class="btn btn-primary" style="float: right" id="next3" onclick="changeSection(id)">Continuar</button>
        </div>


    </div>

    <div class="hide" id="section4">
        <div class="row">

        <div class="form-group col-md-12">
            <h4>Información del titular del servicio</h4>
            <h6 style="color: #55667a">Estos datos se usarán para comunicarse contigo para confirmar la instalación del servicio</h6>
        </div>

        <div class="form-group col-md-6">

            <label for="nombre">Nombre</label>
            <input type="text" maxlength="40" class="form-control" id="nombre">

        </div>

        <div class="form-group col-md-3">

            <label for="apaterno">Apellido Paterno</label>
            <input type="text" maxlength="25" class="form-control" id="apaterno">

        </div>

        <div class="form-group col-md-3">

            <label for="amaterno">Apellido Materno</label>
            <input type="text" maxlength="25" class="form-control" id="amaterno">

        </div>

        <div class="form-group col-md-6">

            <label for="correoelectronico">Correo Electrónico</label>
            <input type="email" maxlength="" class="form-control" id="correoelectronico">

        </div>

        <div class="form-group col-md-6">

            <label for="confirmacorreo">Confirma correo electrónico</label>
            <input type="email" maxlength="7" class="form-control" id="confirmacorreo">

        </div>

        <div class="form-group col-md-6">

            <label for="celular">Celular de contacto</label>
            <input type="text" maxlength="15" class="form-control" id="celular">

        </div>

        <div class="form-group col-md-6">

            <label for="telefono">Teléfono de contacto</label>
            <input type="text" maxlength="15" class="form-control" id="telefono">

        </div>

        <div class="form-group col-md-12" >

            <button type="submit" class="btn btn-primary" style="float: right">Confirmar</button>

        </div>


        </div>

        </form>


    </div>

</div>


</body>
</html>
