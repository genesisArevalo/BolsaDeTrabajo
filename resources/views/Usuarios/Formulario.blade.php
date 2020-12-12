@extends('layouts.dashboard')
@section('title','Registro de usuario')

    <!-- Custom styles for this template -->
    <link href="/css/formulario.css" rel="stylesheet">

@section('content')
<nav class="navbar navbar-dark navbar-full" style="background-color:#18386B">

 <a class="navbar-brand" href="" style="">
    <img src="/images/IconBolsa.svg" width="30" height="30" class="d-inline-block align-top" alt="">
    BOLSA DE TRABAJO
  </a>

       <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
         <li class="nav-item active">
          <a class="nav-link" href="{{route('welcome-home')}}" style=""> Perfiles de Empresas<span class="sr-only">(current)</span></a>
         </li>
       </ul>

</nav>
   <!-- Begin page content -->
    <main role="main" class="container">
     <center> <h1 class="mt-5"style=" color:#18386B">Facultad de Negocios</h1> </center>
     <center> <h3 class="mt-5" style=" color:#18386B">Registro de usuario</h3> </center>
    </main>
<br>
 @if(session('errorNotification'))
   <div class="alert alert-success alert-dismissible">
     <button type="button" class="close" data-dismiss="alert">&times;</button>
      {{ session('errorNotification') }}
    </div>
 @endif
 <form action="{{route('registro-usuario')}}" method="POST">
               @csrf
  <div class="form-row">

    <div class="form-group col-md-4">
      <img src="/images/avatar.svg" width="30" height="30" class="d-inline-block align-top" alt="">
      <label for="inputEmail4">Nombre(s)</label>
      <label for="inputApellidoPaterno4" style=" color:red">*</label>
      <input type="text" class="form-control" maxlength="15" name="nombre" class="form-control" id="inputNombre4" placeholder="Nombre" value="" pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,15}"  required autofocus>
      <div class="invalid-feedback">
        Valid last name is required.
      </div>
    </div>

        <div class="form-group col-md-4">
          <img src="/images/men.png" width="30" height="30" class="d-inline-block align-top" alt="">
          <label for="inputApellidoPaterno4">Apellido Paterno</label>
          <label for="inputApellidoPaterno4" style=" color:red">*</label>
          <input type="text" name="app_p" maxlength="13" class="form-control" id="inputApellidoPaterno4" placeholder="Apellido"value="" pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,13}" required>
           <div class="invalid-feedback">
           Valid Apellido paterno is required.
          </div>
        </div>
              <div class="form-group col-md-4">
                <img src="/images/woman.png" width="30" height="30" class="d-inline-block align-top" alt="">
                 <label for="inputApellidoPaterno4">Apellido Materno</label>
                <label for="inputApellidoPaterno4" style=" color:red">*</label>
                <input type="text" maxlength="13" name="app_m" class="form-control" id="inputApellidoPaterno4" placeholder="Apellido"value="" pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,13}" required>
                <div class="invalid-feedback">
                 Valid Apellido materno is required.
                </div>
              </div>
  </div>
   <div class="form-row">
    <div class="form-group col-md-1">
      <img src="/images/birthday.png" width="30" height="30" class="d-inline-block align-top" alt="">
      <label for="inputEdad4">Edad</label>
      <input type="number" name="edad" min="17" max="40" class="form-control" id="inputEdad4" placeholder=""value="" required>
      <div class="invalid-feedback">
       Valid  Edad is required.
      </div>
    </div>
          <div class="form-group col-md-2">
            <img src="/images/phone.svg" width="30" height="30" class="d-inline-block align-top" alt="">
            <label for="inputTelefono4">Telefono</label>
            <label for="inputApellidoPaterno4" style=" color:red">*</label>
            <input type="text" maxlength="13" name="telefono" class="form-control" id="inputTelefono4" placeholder="+52" value="" pattern="\x2b[0-9]+"  required>
            <div class="invalid-feedback">
             Valid  Telefono is required.
            </div>
          </div>
    <div class="form-group col-md-4">
      <img src="/images/curp.png" width="30" height="30" class="d-inline-block align-top" alt="">
       <label for="inputCurp4">Curp</label>
       <label for="inputApellidoPaterno4" style=" color:red">*</label>
      <input style="text-transform:uppercase;" maxlength="18" name="curp" class="form-control" id="inputCurp4" placeholder="" value="" required>
      <div class="invalid-feedback">
       Valid Curp is required.
      </div>
    </div>
     <div class="col-md-2 mb-3">
      <img src="/images/estado-civil.png" width="30" height="30" class="d-inline-block align-top" alt="">
       <label for="country">Estado civil</label>
                <select class="custom-select d-block w-100" name="edo_civil" id="" required>
                   <option value="soltero(a)">soltero(a)</option>
                  <option value="casado(a)">casado(a)</option>
                  <option value="union libre">union libre</option>
                </select>
                <div class="invalid-feedback">
                  Please select a valid estado civil.
                </div>
             </div>
    <div class="form-group col-md-3">
      <img src="/images/credencial.png" width="30" height="30" class="d-inline-block align-top" alt="">
       <label for="inputMatricula4">Matricula</label>
      <label for="inputApellidoPaterno4" style=" color:red">*</label>
      <input type="text" maxlength="7" name="matricula" class="form-control" id="inputMatricuala4" placeholder="" value="" pattern="[A-Za-z0-9]{1,15}" required>
      <div class="invalid-feedback">
       Valid Matricula civil is required.
      </div>
    </div>
  </div>
   <div class="form-row">
    <div class="form-group col-md-4">
      <img src="/images/world.png" width="30" height="30" class="d-inline-block align-top" alt="">
      <label for="inputEdad4">Nacionalidad</label>
      <input type="text" maxlength="13" name="nacionalidad" class="form-control" id="inputNacionalidad4" placeholder="" value="" pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,15}" required>
      <div class="invalid-feedback">
       Valid nacionalidad is required.
      </div>
    </div>
    <div class="form-group col-md-4">
      <img src="/images/pais.png" width="30" height="30" class="d-inline-block align-top" alt="">
       <label for="inputCurp4">Pais</label>
      <input type="text" maxlength="13" name="pais" class="form-control" id="inputPais4" placeholder="" value="" pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,15}" required>
        <div class="invalid-feedback">
       Valid pais is required.
      </div>
    </div>
    <div class="form-group col-md-4">
      <img src="/images/house.png" width="30" height="30" class="d-inline-block align-top" alt="">
       <label for="inputMatricula4">Municipio</label>
      <input type="text" maxlength="13" name="municipio" class="form-control" id="inputMunicipio4" placeholder="" value="" pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,15}" required>
      <div class="invalid-feedback">
       Valid municipio is required.
      </div>
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-4">
       <img src="/images/usuario-location.png" width="30" height="30" class="d-inline-block align-top" alt="">
      
      <label for="inputColonia4">Colonia</label>
      <input type="text" maxlength="20" name="colonia" class="form-control" id="inputColonia4" placeholder="" value="" pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,15}" required>
      <div class="invalid-feedback">
       Valid colonia is required.
      </div>
    </div>
    <div class="form-group col-md-7">
      <img src="/images/casa.png" width="30" height="30" class="d-inline-block align-top" alt="">
       <label for="inputDomicilio4">Domicilio</label>
       <label for="inputApellidoPaterno4" style=" color:red">*</label>
      <input type="text" name="domicilio" class="form-control" id="inputDomicilio4" placeholder="Calle.        Mz#         Lt#               Referencias* " value="" required>
       <div class="invalid-feedback">
       Valid domicilio is required.
      </div>
    </div>
    <div class="form-group col-md-1">
      <img src="/images/sobre.png" width="30" height="30" class="d-inline-block align-top" alt="">
       <label for="inputCp4">CP.</label>
      <input type="text" maxlength="8" name="cp"  class="form-control" id="inputCp4" placeholder="" value=""  pattern="[0-9]+"  required>
     <div class="invalid-feedback">
       Valid CP is required.
      </div>
  </div>
  </div>
  <div class="form-row">
   <div class="mb-3  col-md-6">
    <img src="/images/email.svg" width="30" height="30" class="d-inline-block align-top" alt="">
       <label for="email">Correo electronico <span class="text-muted">(Optional)</span></label>
        <input type="email" name="email" class="form-control" id="email" placeholder="Mi_Correo@example.com"value="" required>
     <div class="invalid-feedback">
         Please enter a valid correo electronico for shipping updates.
      </div>
  </div>

  <div class="mb-3  col-md-3">
       <label for="email">password</label>
        <input type="password" minlength="4" maxlength="16" name="password" class="form-control" id="myInput" placeholder=""value="" required><input type="checkbox" onclick="myFunction()">Mostrar Contraseña
     <div class="invalid-feedback">
         Please enter a valid password for shipping updates.
      </div>
    </div>
  </div>

   <div class="form-row">
      <div class="form-group col-md-4">
        <img src="/images/sexo.png" width="30" height="30" class="d-inline-block align-top" alt="">
      <label for="inputEmail4">Sexo</label> 
              <!-- Default unchecked -->
      <div class="custom-control custom-radio">
        <input type="radio" name="sexo" class="custom-control-input" id="defaultUnchecked" name="defaultExampleRadios" value="Femenino" checked>
        <label class="custom-control-label" for="defaultUnchecked">Femenino</label>
      </div>

      <!-- Default checked -->
      <div class="custom-control custom-radio">
        <input type="radio" name="sexo" class="custom-control-input" id="defaultChecked" name="defaultExampleRadios" value="Masculino">
        <label class="custom-control-label" for="defaultChecked">Masculino</label>
      </div>
    </div>
         <div class="col-md-5 mb-3">
                <div class="form-group col-md-12">
        <img src="/images/cargo-usuario.png" width="30" height="30" class="d-inline-block align-top" alt="">
                <label for="country">Tipo de usuario:</label>
            <label for="inputApellidoPaterno4" style=" color:red">* </label>
              <div class="form-check-inline">
             <label class="form-check-label">
            <input type="radio" class="form-check-input" onclick="Function()" name="optradio" value="Alumno">Alumno
          </label>
        </div>
        <div class="form-check-inline">
          <label class="form-check-label">
            <input type="radio" class="form-check-input" onclick="myFunction()" value="Docente" name="optradio"> Docente
          </label>
        </div>
        </div>
             </div>


      <div id="myDIV" class="form-group" style="display:none">
         <img src="/images/pencil.png" width="30" height="30" class="d-inline-block align-top" alt="">
         <label for="Localidad">Ingrese el codigo de docencia:</label>
          <label for="inputApellidoPaterno4" style=" color:red">*</label>
       <input type="text" maxlength="13" name="municipio" class="form-control" id="inputMunicipio4" placeholder="" value="" pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,15}">
      <div class="invalid-feedback">
       Valid municipio is required.
      </div>
              </div>
<script>
          function myFunction() {
    var x = document.getElementById("myDIV");
    if (x.style.display === "none") {
        x.style.display = "block";
    }
}

        function Function() {
    var x = document.getElementById("myDIV");
    if (x.style.display === "block") {
        x.style.display = "none";
    } else {
        x.style.display = "none";
    }
}
</script>
         


   </div>
  <button type="submit" class="btn btn-primary btn-lg" style="">Enviar</button>
  </div>
</form>

    <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">&copy; 2020 Facultad de Negocio</p>
      </footer>
@endsection



