 <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title></title>
  </head>
  <body>
    <div class="container">
    <h1 align='center'>solicitud de empleo</h1>
  <!--  <input type="text" class="text-center" value="Solicitud de empleo" name="apellidos" /> -->
    <hr style="color:red; background-color:red;" /><br>
    
    
 <table class="table">
  <thead>
    <tr>
      <th scope="col">Puesto solicitado</th>
      <th scope="col">nombre_escuela</th>
      </tr>
  </thead>
  </table>
<br>
     <h4>Datos personales</h4>
     <table class="table">
  <thead>
    <tr>
      <th scope="col">nombre</th>
      <th scope="col">apellido paterno</th>
      <th scope="col">apellido materno</th>
      <th scope="col">edad</th>
    </tr>
  </thead>
  <tbody>
     @foreach($res as $pdf)
    <tr>
      <td>{{$pdf->nombre}}</td>
      <td>{{$pdf->app_p}}</td>
      <td>{{$pdf->app_m}}</td>
      <td>{{$pdf->edad}}</td>
    </tr>
       @endforeach
  </tbody>
</table>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Domicilio</th>
      <th scope="col">colonia</th>
      <th scope="col">codigo postal</th>

    </tr>
  </thead>
  <tbody>
     @foreach($res as $pdf)
    <tr>
      <td>{{$pdf->domicilio}}</td>
      <td>{{$pdf->colonia}}</td>
      <td>{{$pdf->cp}}</td>
    </tr>
      @endforeach
  </tbody>
</table>
<table class="table">
   <thead>
    <tr>
      <th scope="col">correo electronico</th>
      <th scope="col">telefono</th>
    </tr>
  </thead>
  <tbody>
     @foreach($res as $pdf)
    <tr>
      <td>{{$pdf->email}}</td>
     <td>{{$pdf->telefono}}</td>
    </tr>
      @endforeach
  </tbody>
</table>
     <h4>Informacion Academica</h4>
     <h4>Informacion laboral</h4>
     

 </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>