@extends('layouts.dashboard')
@section('title','Facultad de negocios')

@section('content')
<br>
<header>
<nav class="navbar navbar-expand-lg navbar-light bg-light ">

 <a class="navbar-brand">
    <img src="/images/IconBolsa.svg" width="30" height="30" class="d-inline-block align-top" alt="">
    BOLSA DE TRABAJO
  </a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">  
        <li class="nav-item dropdown active">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Categoria
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="{{route('welcome-sistemas')}}">Ingenieria en software</a>
          <a class="dropdown-item" href="{{route('welcome-contaduria')}}">Contaduria publica</a>
          <a class="dropdown-item" href="{{route('welcome-home')}}">otras opciones</a>
        </div>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
        <a class="nav-link" href="{{route('usuarios-add')}}">Registrarse<span class="sr-only">(current)</span></a>
        <a class="nav-link" href="{{route('login-access')}}">Inicio</a>
   </form>
 </header><br>


<div class="row">
 <div class="col-md-4 order-md-2 mb-4">
          
      <br><br><br>
       <div>
            <a href="" class="footer-logo">
             <img src="http://www.negocios.unach.mx/wp-content/themes/uoc-theme/assets/images/footer-log.png" alt="FACULTAD DE NEGOCIOS, CAMPUS IV">
             </a>                   
           </div>
           
           <br>
       
          <h5 class="mb-3" style=" color:#18386B">
            Informes
          </h5>
          <ul class="list-group mb-3">
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <a class="navbar-brand">
                <img src="/images/location.svg" width="30" height="30" class="d-inline-block align-top" alt="">
                Ubicacion
            </a>
            <br>
                <small class="text-muted">Carretera a puerto madero km. 1.5 sin número; Tapachula, Chiapas. México. C.P. 30700</small>
              </div>
            </li>
               <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <a class="navbar-brand">
                <img src="/images/phone.svg" width="30" height="30" class="d-inline-block align-top" alt="">
               Telefono
            </a>
            <br>
                <small class="text-muted">(044) 9622310496</small>
              </div>
            </li>
             <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <a class="navbar-brand">
                <img src="/images/cargo.svg" width="30" height="30" class="d-inline-block align-top" alt="">
               Contacto Internacional
            </a>
            <br>
                <small class="text-muted">(962) 62 51723 ext. 113</small>
              </div>
            </li>
              <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <a class="navbar-brand">
                <img src="/images/aroba.png" width="30" height="30" class="d-inline-block align-top" alt=""> 
               EMAIL
            </a>
            <br>
                <small class="text-muted">rosa.aguilar@unach.mx</small>
              </div>
            </li>
          </ul>
        </div>

     <div class="col-md-8 order-md-1">
        <br><br><br>
  <h3 class="mb-3" style=" color:#18386B">
  <img src="/images/job.svg" width="30" height="30" class="d-inline-block align-top" alt="">
    Bolsa de trabajo -Facultad de Negocios
  </h3>
  <br><br>

          @foreach($empresas as $empresa)
      <div class="jumbotron jumbotron-fluid" style="background-color:#d7dedc!important;">
        <div class="container">
          
       
         <h3 class="font-weight-bold   text-uppercase" style="color:#414040"><font face=" Myriad Web Pro">{{ $empresa->cargo }}</font></h3>
         <p class="em" style="color:#414040F"><font face=" Myriad Web Pro">{{$empresa->descripcion}}</font></p>
          <p class="text-uppercase" style="color:#414040F"><font face=" Myriad Web Pro">{{ "Responsable:  ".$empresa->nom_responsable."  ".$empresa->app_p." ".$empresa->app_m}}</font></p>
            <p class="text" style="color:#414040F"><font face=" Myriad Web Pro">{{"DEPENDENCIA: ".$empresa->razon_social}}<br>{{"INFORMACION DEL CONTACTO: ".$empresa->email}}<br>{{"LOCACION: ".$empresa->ubicacion}}</font></p>
            <p class="font-italic text-right" style="color:#414040F"><font face=" Myriad Web Pro">{{"Fecha de publicación: ".$empresa->updated_at}}</font></p>
     <u><a class="nav-link" style="color:#2D5BD5" href="{{route('login-access')}}">Me interesa</a></u>
     <div  class="col-4 align-self-end">
       
     </div>
     
        </div>
      </div>
        @endforeach
      <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">&copy; 2020 Facultad de Negocios</p>
      </footer>
    </div>

@endsection
