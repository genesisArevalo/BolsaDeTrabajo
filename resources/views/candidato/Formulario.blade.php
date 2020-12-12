@extends('layouts.dashboard')
@section('title','registro a ofertas')



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
<form action="{{route('pdf-solicitud')}}" method="POST">
    @csrf
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="well well-sm">
                <form class="form-horizontal" method="post">
                    <fieldset><br>
                    
              <h3>Informacion Academica</h3>
             <hr><br>
       <div class="form-row">
    <div class="form-group col-md-4">
          <img src="/images/curp.png" width="30" height="30" class="d-inline-block align-top" alt="">
           <label for="inputCurp4">Titulo/certificado</label>
           <label for="inputApellidoPaterno4" style=" color:red">*</label>
         <input style="text-transform:uppercase;" maxlength="45" name="titulo_certificado" class="form-control" id="" placeholder="" value="" required>
        <div class="invalid-feedback">
         Valid Titulo/certificado is required.
        </div>
    </div>
       <div class="form-group col-md-4">
            <img src="/images/education.png" width="30" height="30" class="d-inline-block align-top" alt="">
            <label for="inputCurp4">Nombre de la Escuela</label>
            <label for="inputApellidoPaterno4" style=" color:red">*</label>
          <input style="text-transform:uppercase;" maxlength="40" name="nombre_escuela" class="form-control" id="" placeholder="" value="" required>
          <div class="invalid-feedback">
            Nombre de la Escuela es requerido.
          </div>
      </div>
          <div class="form-group col-md-4">
              <img src="/images/graduacion.png" width="30" height="30" class="d-inline-block align-top" alt="">
               <label for="inputCurp4">Grado de Estudio</label>
               <label for="inputApellidoPaterno4" style=" color:red">*</label>
             <input style="text-transform:uppercase;" maxlength="40" name="nombre_escuela" class="form-control" id="" placeholder="" value="" required>
            <div class="invalid-feedback">
              Grado de Estudio es requerido.
            </div>
        </div>
    </div>    

        <div class="form-row">
          
    <div class="form-group col-md-8">
      <img src="/images/idioma.png" width="30" height="30" class="d-inline-block align-top" alt="">
       <label for="inputCurp4">Idioma que domina</label>
      <input style="text-transform:uppercase;" maxlength="260" name="idioma" class="form-control" id="inputCurp4" placeholder="" value="" >
    </div>
  </div>

  <h3>Informacion Laboral</h3>
  <p class="lead text-muted">(Opcional)</p>
             <hr><br>

                <div class="form-row">
          <div class="form-group col-md-2">
                  <img src="/images/phone.svg" width="30" height="30" class="d-inline-block align-top" alt="">
                <label for="inputTelefono4">Telefono</label>
         <input type="text" maxlength="13" name="telefonoE" class="form-control" id="inputTelefono4" placeholder="+52" value="" pattern="\x2b[0-9]+" placeholder="+52">
                <div class="invalid-feedback">
                       Telefono es requerido.
                      </div>
             </div>              
         <div class="form-group col-md-4">
                    <img src="/images/company.png" width="30" height="30" class="d-inline-block align-top" alt="">
                    <label for="inputCurp4">Nombre de la empresa</label>
                  <input style="text-transform:uppercase;" maxlength="40" name="ultimo_puesto" class="form-control" id="" placeholder="" value="" >
                  <div class="invalid-feedback">
                       El nombre de la empresa es requerido.
                      </div>
              </div>
               <div class="form-group col-md-6">
                    <img src="/images/pais.png" width="30" height="30" class="d-inline-block align-top" alt="">
                    <label for="inputCurp4">domicilio de la empresa</label>
                  <input style="text-transform:uppercase;" maxlength="120" name="sueldo_mensual" class="form-control" id="" placeholder="" value="" >
              </div>
           </div>
      <div class="form-row">
         <div class="form-group col-md-4">
                    <img src="/images/barra.png" width="30" height="30" class="d-inline-block align-top" alt="">
                    <label for="inputCurp4">Ultimo Puesto</label>
                  <input style="text-transform:uppercase;" maxlength="40" name="ultimo_puesto" class="form-control" id="" placeholder="" value="" >
                  <div class="invalid-feedback">
                       Ultimo puesto es requerido.
                      </div>
              </div>
               <div class="form-group col-md-4">
                    <img src="/images/salario.png" width="30" height="30" class="d-inline-block align-top" alt="">
                    <label for="inputCurp4">Sueldo Mensual</label>
                  <input style="text-transform:uppercase;" maxlength="40" name="sueldo_mensual" class="form-control" id="" placeholder="" value="" >
              </div>
           </div>

        <div class="form-row">
          <div class="form-group col-md-12">
         <img src="/images/checkli.png" width="30" height="30" class="d-inline-block align-top" alt="">
            <label for="inputCurp4">¿Podemos solicitar informacion? </label>
              <div class="form-check-inline">
             <label class="form-check-label">
            <input type="radio" class="form-check-input" onclick="Function()" name="optradio" value="Si"> Si
          </label>
        </div>
        <div class="form-check-inline">
          <label class="form-check-label">
            <input type="radio" class="form-check-input" onclick="myFunction()" value="No" name="optradio"> No
          </label>
        </div>
        </div>
         </div>

           <div id="myDIV" class="form-group" style="display:none">
               <img src="/images/pencil.png" width="30" height="30" class="d-inline-block align-top" alt="">
                  <label for="Localidad">Expecifique la razón:</label>
                    <div id="myDIV" class="col-md-8">
                       <textarea class="form-control" id="message" name="justificacion" placeholder="Ingrese su masaje para nosotros aquí, brindando sus razones." rows="7"></textarea>
                  </div>
              </div>


            <h3>Datos personales</h3>
             <p class="lead text-muted">corrobore la informacion</p>
             <hr><br>

             @foreach($usuario as $user)
          <div class="form-row">
    <div class="form-group col-md-1">
      <img src="/images/birthday.png" width="30" height="30" class="d-inline-block align-top" alt="">
      <label for="inputEdad4">Edad</label>
      <input type="number" name="edad" min="17" max="40" class="form-control" id="inputEdad4" placeholder=""value="{{$user->edad}}" required>
      <div class="invalid-feedback">
       Valid  Edad is required.
      </div>
    </div>
          <div class="form-group col-md-2">
            <img src="/images/phone.svg" width="30" height="30" class="d-inline-block align-top" alt="">
            <label for="inputTelefono4">Telefono</label>
            <label for="inputApellidoPaterno4" style=" color:red">*</label>
            <input type="text" maxlength="13" name="telefono" class="form-control" id="inputTelefono4" placeholder="+52" value="{{$user->telefono}}" pattern="\x2b[0-9]+" placeholder="+52"  required>
            <div class="invalid-feedback">
             Valid  Telefono is required.
            </div>
          </div>
     <div class="col-md-2 mb-4">
      <img src="/images/estado-civil.png" width="30" height="30" class="d-inline-block align-top" alt="">
       <label for="country">Estado civil</label>
       <label for="inputApellidoPaterno4" style=" color:red">*</label>
                <select class="custom-select d-block w-100" name="edo_civil" id="" required>
                   <option value="soltero(a)">soltero(a)</option>
                  <option value="casado(a)">casado(a)</option>
                  <option value="union libre">union libre</option>
                </select>
                <div class="invalid-feedback">
                  Please select a valid estado civil.
                </div>
             </div>
          <div class="form-group col-md-4">
      <img src="/images/pais.png" width="30" height="30" class="d-inline-block align-top" alt="">
       <label for="inputCurp4">Pais</label>
       <label for="inputApellidoPaterno4" style=" color:red">*</label>
      <input type="text" maxlength="13" name="pais" class="form-control" id="inputPais4" placeholder="" value="{{$user->pais}}" pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,15}" required>
        <div class="invalid-feedback">
       Valid pais is required.
      </div>
    </div>
         </div>
         <div class="form-row">
     
     <div class="form-group col-md-4">
      <img src="/images/house.png" width="30" height="30" class="d-inline-block align-top" alt="">
       <label for="inputMatricula4">Municipio</label>
       <label for="inputApellidoPaterno4" style=" color:red">*</label>
      <input type="text" maxlength="13" name="municipio" class="form-control" id="inputMunicipio4" placeholder="" value="{{$user->municipio}}" pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,15}" required>
      <div class="invalid-feedback">
       Valid municipio is required.
      </div>
    </div>

    <div class="form-group col-md-4">
       <img src="/images/usuario-location.png" width="30" height="30" class="d-inline-block align-top" alt="">
      
      <label for="inputColonia4">Colonia</label>
       <label for="inputApellidoPaterno4" style=" color:red">*</label>
      <input type="text" maxlength="20" name="colonia" class="form-control" id="inputColonia4" placeholder="" value="{{$user->colonia}}" pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,15}" required>
      <div class="invalid-feedback">
       Valid colonia is required.
      </div>
    </div>
     </div>
       <div class="form-row">
    
    <div class="form-group col-md-8">
      <img src="/images/casa.png" width="30" height="30" class="d-inline-block align-top" alt="">
       <label for="inputDomicilio4">Domicilio</label>
       <label for="inputApellidoPaterno4" style=" color:red">*</label>
      <input type="text" name="domicilio" class="form-control" id="inputDomicilio4" placeholder="Calle.        Mz#         Lt#               Referencias* " value="{{$user->domicilio}}" required>
       <div class="invalid-feedback">
       Valid domicilio is required.
      </div>
    </div>
    <div class="form-group col-md-1">
      <img src="/images/sobre.png" width="30" height="30" class="d-inline-block align-top" alt="">
       <label for="inputCp4">CP.</label>
       <label for="inputApellidoPaterno4" style=" color:red">*</label>
      <input type="text" maxlength="8" name="cp"  class="form-control" id="inputCp4" placeholder="" value="{{$user->cp}}"  pattern="[0-9]+"  required>
     <div class="invalid-feedback">
       Valid CP is required.
      </div>
  </div>
  </div>
 @endforeach

            <h3>Informacion de la vacante de interes</h3>
             <hr><br>

              <div class="form-row">
             <div class="form-group col-md-6">
           <img src="/images/email.svg" width="30" height="30" class="d-inline-block align-top" alt="">
              <label for="email">Correo electronico <span class="text-muted">(Optional)</span></label>
              <input type="email" name="email" class="form-control" id="email" placeholder="Empresa@example.com">
              <div class="invalid-feedback">
                Please enter a valid correo electronico for shipping updates.
              </div>
            </div>
            <div class="form-group col-md-4">
                <img src="/images/puesto.svg" width="30" height="30" class="d-inline-block align-top" alt="">
                <label for="cargo">Nombre de la vacante</label>
                <label for="inputApellidoPaterno4" style=" color:red">*</label>
                <input type="text" name="cargo" class="form-control" id="cargo" placeholder="" value=""  pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,40}" required>
              <div class="invalid-feedback">
                  Valid Cargo a desempeñar is required.
             </div>
            </div>
          </div>
            <div class="form-row">
           <div class="form-group col-md-6">
                <img src="/images/company.png" width="30" height="30" class="d-inline-block align-top" alt="">
                <label for="RazonSocial">Razon social</label>
                <label for="inputApellidoPaterno4" style=" color:red">*</label>
                <input type="text" name="razon_social" class="form-control" id="RazonSocial" placeholder="" value=""   pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{4,3}"  required>
                <div class="invalid-feedback">
                  Valid Razon social is required.
                </div>
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
                        <div class="form-group">
                          <br><br>
                           <input type="hidden" name="value_eve" value="{{$user->id_user}}">
                           <!-- <input type="file" name="adjunto" value=""><br> -->
                            <div class="col-md-12 text-center"><br>
                                <button type="submit" class="btn btn-lg btn-primary">Guardar/y Enviar la solicitud a la empresa</button>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>
</form> 
@endsection