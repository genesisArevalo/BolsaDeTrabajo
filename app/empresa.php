<?php

namespace App;
use DB;
use Illuminate\Database\Eloquent\Model;

class empresa extends Model
{
    //
    protected $table = 'empresas';
    protected $primaryKey = 'id_empresa';

    public static function InsertEmpresa($request)
    {
         
        $empresas = new empresa();
        $empresas->razon_social = $request->input('razon_social');
        $empresas->email = $request->input('email');
        $empresas->ubicacion = $request->input('ubicacion');
        $empresas->telefono = $request->input('telefono');
        $empresas->localidad = $request->input('localidad');
        $empresas->save();
        return $empresas->id_empresa;
    }

   public static function verificarExistencia($request)
    {
        $existencia = DB::table('empresas')
        ->select('id_empresa')
        ->where('razon_social',$request->razon_social)
        ->where('ubicacion', '=', $request->ubicacion)->get();
         return count($existencia); 

    }
     public static function SelectById($request)
    {
        $existencia = DB::table('empresas')
        ->select('id_empresa')
        ->where('razon_social',$request->razon_social)
        ->where('ubicacion', '=', $request->ubicacion);
       $id = $existencia->pluck('id_empresa')->first();//;
       return $id;
      
        

    }


       public static function SelectAllUnion()
    {
      $fechaActual = date('Y-m-j');//optenemos la fecha catual
      $fechaMesPasado = strtotime ('-1 month', strtotime($fechaActual)); //convercion
      $fechaMesPasadoDate = date('Y-m-j', $fechaMesPasado);//convercion restandole un mes
      //consulta de oefertas echa  por fecha 
      //se muesta del mes actual en adelante
     // return $fechaMesPasadoDate;
      $consulta1 = DB::table('empresas as a')
        ->select('c.id_oferta','b.id_responsable','a.id_empresa','a.razon_social', 'a.ubicacion', 'a.localidad','a.telefono', 'a.email','b.nom_responsable', 'b.app_p','b.app_m','c.cargo','c.horario','c.descripcion','c.turno','c.salario','c.updated_at')
        ->join('responsables as b', 'b.id_empresa', '=', 'a.id_empresa')
        ->join('descripcion_ofertas as c', 'b.id_oferta', '=', 'c.id_oferta')
        ->where('c.updated_at','>=',$fechaMesPasadoDate)
        ->paginate(15);
       
      return $consulta1;

    }

    

    public static function SelectSistemas()
    {
        $fechaActual = date('Y-m-j');//optenemos la fecha catual
      $fechaMesPasado = strtotime ('-1 month', strtotime($fechaActual)); //convercion
      $fechaMesPasadoDate = date('Y-m-j', $fechaMesPasado);//convercion restandole un mes
      //consulta de oefertas echa  por fecha 
      //se muesta del mes actual en adelante
     // return $fechaMesPasadoDate;
      $consulta2 = DB::table('empresas as a')
        ->select('a.razon_social', 'a.ubicacion', 'a.localidad','a.telefono', 'a.email','b.nom_responsable', 'b.app_p','b.app_m','c.cargo','c.horario','c.descripcion','c.turno','c.salario','c.updated_at')
        ->where('c.perfil_academico', '=', 'Ingenieria en software')
        ->join('responsables as b', 'b.id_empresa', '=', 'a.id_empresa')
        ->join('descripcion_ofertas as c', 'b.id_oferta', '=', 'c.id_oferta')
        ->where('c.updated_at','>=',$fechaMesPasadoDate)
        ->paginate(15);
       
       
       return $consulta2;

    }
     public static function SelectContaduria()
    {
        $fechaActual = date('Y-m-j');//optenemos la fecha catual
      $fechaMesPasado = strtotime ('-1 month', strtotime($fechaActual)); //convercion
      $fechaMesPasadoDate = date('Y-m-j', $fechaMesPasado);//convercion restandole un mes
      //consulta de oefertas echa  por fecha 
      //se muesta del mes actual en adelante
     // return $fechaMesPasadoDate;      
      $consulta3 = DB::table('empresas as a')
        ->select('a.razon_social', 'a.ubicacion', 'a.localidad','a.telefono', 'a.email','b.nom_responsable', 'b.app_p','b.app_m','c.cargo','c.horario','c.descripcion','c.turno','c.salario','c.updated_at')
        ->where('c.perfil_academico', '=', 'Contaduria Publica')
        ->join('responsables as b', 'b.id_empresa', '=', 'a.id_empresa')
        ->join('descripcion_ofertas as c', 'b.id_oferta', '=', 'c.id_oferta')
        ->where('c.updated_at','>=',$fechaMesPasadoDate)
        ->paginate(15);
       
       
       return $consulta3;

    }


       public static function SelectPerfil()
    {
      
      $consulta2 = DB::table('empresas as a')
        ->select('c.perfil')
        ->join('responsables as b', 'b.id_empresa', '=', 'a.id_empresa')
        ->join('descripcion_ofertas as c', 'b.id_oferta', '=', 'c.id_oferta')
        ->paginate(15);
       
       return $consulta2;

    }

    //pendiente no actualiza

    public static function UpdateEmpresa($request){
      
        $empresa = new empresa();
        $empresa->where('id_empresa', '=', $request->data['id_empresa'])
        ->update([
            'razon_social' => trim(strtoupper($request->data['razon_social'])),
            'telefono' => trim(strtoupper($request->data['telefono'])),
            'localidad' => trim(strtoupper($request->data['localidad'])),
            'ubicacion' => trim(strtoupper($request->data['ubicacion'])),
            'email' => trim(strtoupper($request->data['email']))
        ]);
    }
  
}