<?php

namespace App\Http\Controllers;

use App\empresa;
use App\responsable;
use App\descripcion_oferta;
use Illuminate\Http\Request;

class EmpresasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $empresas = empresa::SelectAllUnion();
        // $empresas = empresa::all();
     return view('Empresas.PerfilEmpresas',compact('empresas'));
  //  return $empresas;
    }

    public function EditEmpresas(Request $request){
     //Editar la vacante
      // $empresas = empresa::SelectAllUnion();
        //return view('Empresas.EditarEmpresas',compact('empresas'));
   
   return $request."prueba";
    }
        
    
     public function indexSistemas(){
          $empresas = empresa:: SelectSistemas();
    return view('Empresas.PerfilEmpresas',compact('empresas'));
      
    }

       public function indexContaduria(){
          $empresas = empresa:: SelectContaduria();
    return view('Empresas.PerfilEmpresas',compact('empresas'));
      
    }

     public function CreateEmpresas()
    {
           return view('Empresas.AltaEmpresas');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
    //valida el formato de horarios
   //$Validarhorario = descripcion_oferta::verificarFormatoHorario();
    
//elimina redundancia de empresas
  $existenciaEmpresa = empresa::verificarExistencia($request);
  $idEmpresa =empresa::SelectById($request);
  
   if($existenciaEmpresa >= 1){ //si la empresa existe
    //optiene el id de la empresa
    $id_empresa = empresa::SelectById($request);
   // $empres_id = implode("",(array)$id_empresa);
    //update telefono,correo, localidad
     $updateEmpresa = empresa::UpdateEmpresa($request);
     $insertOferta = descripcion_oferta::insertOferta($request);
     $inserResponsable = responsable::insertResponsable($request,$id_empresa,$insertOferta);
     //retornando la vista
      return redirect('/registro/empresas')->with('errorNotification','REGISTRO GUARDADO CORRECTAMENTE');
       } else{ //si la empresa no existe
         //Alata de Empresas 
     $insertarEmpresas = empresa::InsertEmpresa($request);
     $insertOferta = descripcion_oferta::insertOferta($request);
     $inserResponsable = responsable::insertResponsable($request,$insertarEmpresas ,$insertOferta);
     //cargamos la vista
      return redirect('/registro/empresas')->with('errorNotification','REGISTRO GUARDADO CORRECTAMENTE');
   }

       // return $request->all();  //muestra todos los datos solicitados
    } 

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   
     public function search(Request $request)
    {
        //busqueda por perfil
          $search = empresa::SelectPerfil();
          return view('Empresas.PerfilEmpresas',compact('search'));


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
}
