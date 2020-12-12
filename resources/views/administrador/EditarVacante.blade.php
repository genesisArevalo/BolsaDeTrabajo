@extends('layouts.dashboard')
@section('title','Publicar oferta')



@section('content')
<!-- <div>
   <a href="" class="footer-logo">
      <img src="http://www.negocios.unach.mx/wp-content/themes/uoc-theme/assets/images/logo1.png" alt="FACULTAD DE NEGOCIOS, CAMPUS IV">
      </a>                   
   </div><br>
-->
<nav class="navbar navbar-dark navbar-full" style="background-color:#18386B">

 <a class="navbar-brand" href="#" style="">
    <img src="/images/IconBolsa.svg" width="30" height="30" class="d-inline-block align-top" alt="">
    BOLSA DE TRABAJO
  </a>

       <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
         <li class="nav-item active">
          <a class="nav-link" href="{{route('home')}}" style="">Panel administrativo<span class="sr-only">(current)</span></a>
         </li>
       </ul>

</nav>
  
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
        <br><br>
  <h3 class="mb-3" style=" color:#18386B">
  <img src="/images/job.svg" width="30" height="30" class="d-inline-block align-top" alt="">
    Bolsa de trabajo -Facultad de Negocios
  </h3>

    <form action="{{route('OfertasEdit')}}" method="POST">
               @csrf
 @if(session('errorNotification'))
   <div class="alert alert-success alert-dismissible">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
      {{ session('errorNotification') }}
    </div>
 @endif

         @foreach($vacante as $vnt)
           <br><br>
       <h5 class="mb-3">Informacion de la empresa</h5>
          
              <div class="mb-3">
                <img src="/images/company.png" width="30" height="30" class="d-inline-block align-top" alt="">
                <label for="RazonSocial">Razon social</label>
                <label for="inputApellidoPaterno4" style=" color:red">*</label>
                <input type="text" name="razon_social" class="form-control" id="RazonSocial" placeholder="" value="{{$vnt->razon_social}}"   pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{4,30}"  required>
                <div class="invalid-feedback">
                  Valid Razon social is required.
                </div>
              </div>
              
            <div class="row">
              <div class="col-md-6 mb-3">
                <img src="/images/phone.svg" width="30" height="30" class="d-inline-block align-top" alt="">
                <label for="telefono">Telefono</label>
                <label for="inputApellidoPaterno4" style=" color:red">*</label>
                <input type="text" name="telefono" class="form-control" id="telefono" placeholder="(962) 62 51723" value="{{$vnt->telefono}}" maxlength="13" pattern="[0-9]{10}" required>
                <div class="invalid-feedback">
                  Valid Telefono is required.
                </div>
              </div>
              <div class="col-md-6 mb-3">
              <img src="/images/Location-company.png" width="30" height="30" class="d-inline-block align-top" alt="">
                <label for="Localidad">Localidad</label>
                <input type="text" name="localidad" class="form-control" id="Localidad" placeholder="" value="{{$vnt->localidad}}"   pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,15}" required>
                <div class="invalid-feedback">
                  Valid Localidad is required.
                </div>
              </div>
            </div>

              <div class="mb-3">
                <img src="/images/location.svg" width="30" height="30" class="d-inline-block align-top" alt="">
                <label for="ubicacion">Ubicacion</label>
                <label for="inputApellidoPaterno4" style=" color:red">*</label>
                <input type="text" name="ubicacion" class="form-control" id="ubicacion" placeholder="" value="{{$vnt->ubicacion}}"  required>
                <div class="invalid-feedback">
                  Valid Ubicacion is required.
                </div>
              </div>

            <div class="mb-3">
           <img src="/images/email.svg" width="30" height="30" class="d-inline-block align-top" alt="">
              <label for="email">Correo electronico <span class="text-muted">(Optional)</span></label>
              <input type="email" name="email" class="form-control" id="email" placeholder="Mi_Empresa@example.com" value="{{$vnt->email}}">
              <div class="invalid-feedback">
                Please enter a valid correo electronico for shipping updates.
              </div>
            </div>

           <br>
          <h5 class="mb-3">Responsable de area</h5>

          <div class="row">
              <div class="col-md-4 mb-3">
                <img src="/images/avatar.svg" width="30" height="30" class="d-inline-block align-top" alt="">
                <label for="firstName">Nombre</label>
                <label for="inputApellidoPaterno4" style=" color:red">*</label>
                <input type="text" name="nom_responsable" class="form-control" id="firstName" placeholder="" value="{{$vnt->nom_responsable}}"  pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð]{2,35}" required>
                <div class="invalid-feedback">
                  Valid first name is required.
                </div>
              </div>
              <div class="col-md-4 mb-3">
                <img src="/images/men.png" width="30" height="30" class="d-inline-block align-top" alt="">
                <label for="lastName">Apellido paterno</label>
                <label for="inputApellidoPaterno4" style=" color:red">*</label>
                <input type="text" name="app_p" class="form-control" id="lastName" placeholder="" value="{{$vnt->app_p}}"  pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,]{2,20}" required>
                <div class="invalid-feedback">
                  Valid last name is required.
                </div>
              </div>
               <div class="col-md-4 mb-3">
                <img src="/images/woman.png" width="30" height="30" class="d-inline-block align-top" alt="">
                <label for="secondlastName">Apellido Materno</label>
                <input type="text" name="app_m" class="form-control" id="secondlastName" placeholder="" value="{{$vnt->app_m}}"  pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,]{2,20}" required>
                <div class="invalid-feedback">
                  Valid last name is required.
                </div>
              </div>
            </div>

               <div class="col-md-8 mb-3">
                <img src="/images/cargo-usuario.png" width="30" height="30" class="d-inline-block align-top" alt="">
                <label for="Cargo">Puesto que desempeña</label>
                <label for="inputApellidoPaterno4" style=" color:red">*</label>
                <input type="text" name="cargo" class="form-control" id="Cargo" placeholder="" value="{{$vnt->cargo}}"  pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,35}" required>
                <div class="invalid-feedback">
                  Valid Puesto que desempeña is required.
                </div>
              </div>

                  <br>
          <h5 class="mb-3">Descripcion de la Oferta</h5>

         <div class="row">
              <div class="col-md-6 mb-3">
                <img src="/images/time.svg" width="30" height="30" class="d-inline-block align-top" alt="">
                <label for="horario">Horario laboral</label>
                <label for="inputApellidoPaterno4" style=" color:red">*</label>
                <input type="text" name="horario" class="form-control" id="horario" placeholder="09:00-13:00" value="{{$vnt->horario}}"required>
                <div class="invalid-feedback">
                  Valid Horario laboral is required.
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <img src="/images/turno.svg" width="30" height="30" class="d-inline-block align-top" alt="">
                <label for="turno">Turno</label>
                <label for="inputApellidoPaterno4" style=" color:red">*</label>
                  <select style="width: 250px" name="turno">
                      <option value="medio tiempo">MEDIO TIEMPO</option>
                      <option value="tiempo completo">TIEMPO COMPLETO</option>
                  </select>
                <div class="invalid-feedback">
                  Valid turno is required.
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 mb-3">
                <img src="/images/salario.svg" width="30" height="30" class="d-inline-block align-top" alt="">
                <label for="salario">Salario </label>
                <input type="text" name="salario" class="form-control" id="salario" placeholder="" value="{{$vnt->salario}}" required>
                <div class="invalid-feedback">
                  Valid Salario is required.
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <img src="/images/puesto.svg" width="30" height="30" class="d-inline-block align-top" alt="">
                <label for="cargo">Cargo a desempeñar</label>
                <label for="inputApellidoPaterno4" style=" color:red">*</label>
                <input type="text" name="cargo" class="form-control" id="cargo" placeholder="" value="{{$vnt->cargo}}"  pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,40}" required>
                <div class="invalid-feedback">
                  Valid Cargo a desempeñar is required.
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-5 mb-3">
                <img src="/images/cargo-usuario.png" width="30" height="30" class="d-inline-block align-top" alt="">
                <label for="country">perfil academico de interes</label>
                <label for="inputApellidoPaterno4" style=" color:red">*</label>
                <select class="custom-select d-block w-100" name="perfil_academico" id="" required>
                   <option value="Sistemas Computacionales">Ingenieria en software</option>
                  <option value="Contaduria Publica">Contaduria Publica</option>
                  <option value="Otros">Otros</option>
                </select>
                <div class="invalid-feedback">
                  Please select a valid user type.
                </div>
             </div>
             <div class="col-md-5 mb-4">
                <label for="country">Descripcion del puesto</label>
                 <textarea class="form-control" name="descripcion" rows="8">{{$vnt->descripcion}}</textarea>
                </div>
           </div>
            @endforeach
            <br>
             <button class="btn btn-primary btn-lg btn-block" type="submit">Guardar Registro</button>
        </form>

      <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">&copy; 2020 Facultad de Negocios</p>
      </footer>
    </div>


@endsection
