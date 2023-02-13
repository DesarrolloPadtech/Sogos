<!DOCTYPE html>
<html style="font-size: 16px;" lang="es">

	<head>
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    	<meta charset="utf-8">
    	<meta name="keywords" content="JHON DO​E">
    	<meta name="description" content="">
    	<title>Contratacion de Internet</title>      
		
		<link rel="stylesheet" href="{{asset('css/Contacto.css')}}" media="screen">
    	<link rel="stylesheet" href="{{ asset('css/nicepage.css') }}"> 
    	<!--<link rel="stylesheet" href="{{asset('css/cargar-archivo.css')}}" media="screen">
		<link rel="stylesheet" href="{{asset('css/jquery.toast.css')}}" media="screen">-->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    	<script src="{{ asset('js/jquery.js') }}" defer></script>
    	<script src="{{ asset('js/nicepage.js') }}" defer></script>


    	<meta name="generator" content="Nicepage 4.15.11, nicepage.com">
    	<link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ubuntu:300,300i,400,400i,500,500i,700,700i|Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
    	<link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
    	<link rel="icon" href="{{asset('images/Sogos_ico.png')}}">    
    
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

  	<body class="u-body u-xl-mode" data-lang="es">
  		
  		@include('layouts.header')

  		<div class="container">

  			<form action="#" method="POST" class="u-clearfix u-form-spacing-10 u-form-vertical u-inner-form" source="custom" name="form" style="padding: 10px;" id="serviceForm">
     
    			<div class="form-group col-md-6">
      				<label for="cp">Código Postal</label>
      					<input type="number" class="form-control" id="cp">
    			</div>
    			
    			<div class="form-group col-md-6">
    			</div>	

    			<div class="form-group col-md-6">
      				<label for="calle">Calle</label>
      					<input type="text" maxlength="45" class="form-control" id="calle">
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
      				<label for="calle">Ciudad</label>
      					<input type="text" maxlength="40" class="form-control" id="calle">
    			</div>

    			<div class="form-group col-md-3">
      				<label for="num_ext">Alcaldía / Municipio</label>
      					<input type="text" maxlength="7" class="form-control" id="num_ext">
    			</div>

    			<div class="form-group col-md-3">
      				<label for="num_int">Colonia</label>
      					<input type="text" maxlength="7" class="form-control" id="num_int">
    			</div>
 

  <div class="form-group">
    <label for="inputAddress">Address</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
  </div>
  <div class="form-group">
    <label for="inputAddress2">Address 2</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
  </div>

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">City</label>
      <input type="text" class="form-control" id="inputCity">
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">State</label>
      <select id="inputState" class="form-control">
        <option selected>Choose...</option>
        <option>...</option>
      </select>
    </div>
    <div class="form-group col-md-2">
      <label for="inputZip">Zip</label>
      <input type="text" class="form-control" id="inputZip">
    </div>
  </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Sign in</button>

  			</form>
  		
  		</div>	


  	</body>
</html>
