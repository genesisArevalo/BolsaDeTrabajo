@extends('layouts.dashboardLogin')
@section('title','Inicio -secion')

<!-- Custom styles for this template -->
    <link href="/css/Login.css" rel="stylesheet">

@section('content')

  <p class="text-right">
   <a href="{{route('welcome-home')}}" class="btn btn-primary btn-sm"> Inicio </a>
   <a href="{{route('usuarios-add')}}" class="btn btn-primary btn-sm">Registrarse</a>
  </p>
 
   <form class="form-signin  text-center" method="POST" action="{{url('/authentication')}}">
    	@csrf
      <img class="mb-4" src="/images/unach.png" alt="FACULTAD DE NEGOCIOS, CAMPUS IV" width="110" height="110">
      <h1 class="h3 mb-3 font-weight-normal">Por favor, registrese</h1> 
  
      <label for="inputEmail" class="sr-only">Correo Electronico</label>
      <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Correo Electronico" required autofocus>
      <label for="inputPassword" class="sr-only">Contraseña</label>
      <input type="password" name="pass" id="inputPassword" class="form-control" placeholder="Contraseña">

     <!-- <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Recordar datos
        </label>
      </div>-->
      <button class="btn btn-lg btn-primary btn-block" type="submit">Ingresar</button>
     <!-- <center><a href="../sticky-footer-navbar/">¿Olvidaste tu contraseña?<a></center>-->
      <p class="mt-5 mb-3 text-muted">&copy; 2019-2020</p>
    </form>
@endsection