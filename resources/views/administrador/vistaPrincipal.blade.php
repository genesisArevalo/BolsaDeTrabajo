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
        <a class="nav-link text-right" href="{{route('welcome-home')}}">Cerrar Secion</a>
   
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
           Acciones
          </h5>
          <ul class="list-group mb-3">
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <a class="navbar-brand"><img src="/images/IconBolsa.svg" width="30" height="30" class="d-inline-block align-top" alt="">
                  Vacante
            </a>
             <br>
             <a class="nav-link " href="{{route('EmpresasRegistro')}}">Agregar vacante</a> 
              </div>
            </li>
               <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <a class="navbar-brand">
                <img src="/images/avatar.svg" width="30" height="30" class="d-inline-block align-top" alt="">
               Usuario
            </a>
            <br>
               <a class="nav-link " href="{{route('usuarios-add')}}">Agregar usuario</a>
               <br><br>
           <label for="inputMatricula4">Matricula</label>
      <input type="text" maxlength="7" name="matricula" class="form-control" id="inputMatricuala4" placeholder="" value="" pattern="[A-Za-z0-9]{1,15}" required>
               <button type="button" onclick="{{route('usuarios-add')}}" class="btn btn-link">Eliminar Usuario</button>
               <button type="button" class="btn btn-link">Editar Usuario</button>
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
        
            
            <form action="{{route('SelectEdit')}}" method="POST">
            @csrf
               <input type="hidden" name="value_oferta" value="{{$empresa->id_oferta}}">
               <input type="hidden" name="value_empresa" value="{{$empresa->id_empresa}}">
               <input type="hidden" name="value_responsable" value="{{$empresa->id_responsable}}">
           <button type="submit" class="btn btn-link">Editar vacante</button>
          </form>

          

            <p class="font-italic text-right" style="color:#414040F"><font face=" Myriad Web Pro">{{"Fecha de publicación: ".$empresa->updated_at}}</font></p>
             
     <u>
     
     <br>
     <form action="{{route('OfertasRemov')}}" method="POST">
            @csrf
               <input type="hidden" name="value_oferta" value="{{$empresa->id_oferta}}">
           <button type="submit" class="btn btn-link">Eliminar vacante</button>
          </form>
      <br>
       <button type="button" class="btn btn-link"> Personas a quienes les intereso la oferta</button>
    </u>
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
