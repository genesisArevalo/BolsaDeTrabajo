<?php

namespace App\Http\Controllers;
use App\User;
use App\empresa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


 public function indexAdmin(Request $request)
    {
         $empresas = empresa::SelectAllUnion();
        return view('administrador.vistaPrincipal',compact('empresas'));
    }
    public function index()
    {
        return view('Usuarios.Formulario');
    }
     public function welcome()
    {
        return view('Empresas.PerfilEmpresas');
    }
     public function login()
    {
        return view('Usuarios.Login');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view ('Usuarios.Login');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      // return $request->all();  //muestra todos los datos solicitados
   if($request->edad >= 17 && $request->edad<50 ){// si es menor a 50
    $verificador = User::verificarExistenciaEmail($request->email);
    $verificadorMatricula = User::verificarExistenciaMatricula($request->matricula);
    $curpValid = User::validate_curp($request->curp);
    if($curpValid == 'true'){
  $verificadorCurp = User::verificarExistenciaCurp($request->curp);
     if ($verificador < 1) {
        if($verificadorMatricula <1){
            if($verificadorCurp <1){
                $user = new User();
                $user->nombre = $request->input('nombre');
                $user->app_p = $request->input('app_p');
                $user->app_m = $request->input('app_m');
                $user->sexo = $request->input('sexo');
                $user->colonia = $request->input('colonia');
                $user->tipo_user = $request->input('tipo_user');
                $user->edad = $request->input('edad');
                $user->municipio = $request->input('municipio');
                $user->telefono = $request->input('telefono');
                $user->nacionalidad = $request->input('nacionalidad');
                $user->email = $request->input('email');
                $user->curp = $request->input('curp');
                $user->matricula= $request->input('matricula');
                $user->edo_civil= $request->input('edo_civil');
                $user->domicilio= $request->input('domicilio');
                $user->pais= $request->input('pais');
                $user->estatus= 'true';
                $user->cp= $request->input('cp');
               $user->password = Hash::make($request->password);
                //$user->password = md5();
                $user->save();
          
                   /// return redirect('/Alta/usuario')->with('errorNotification','USUARIO GUARDADO CORRECTAMENTE');
                  return redirect('/bolsa/de/trabajo');
                   }else{
             return redirect('/Alta/usuario')->with('errorNotification','EL CURP YA PERTENECE A UN USUARIO');
             }
         }else{
              return redirect('/Alta/usuario')->with('errorNotification','LA MATRICULA YA PERTENECE A UN USUARIO');
          }
     }else{
        return redirect('/Alta/usuario')->with('errorNotification','EL EMAIL YA PERTENECE A UN USUARIO');
     }


  }else{
    return redirect('/Alta/usuario')->with('errorNotification','¡CURP INCORECTA!');
    }


}else{
          return redirect('/Alta/usuario')->with('errorNotification','LA EDAD NO ESTA DENTRO DEL RANGO PERMITIDO');
        }
    }

 
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
