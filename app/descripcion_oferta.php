<?php

namespace App;
use DB;
use Illuminate\Database\Eloquent\Model;

class descripcion_oferta extends Model
{
    //
    
     protected $table = 'descripcion_ofertas';
    protected $primaryKey = 'id_oferta';

     public static function insertOferta($request)
    {
         
     $descripcion = new descripcion_oferta();
     $descripcion->perfil_academico = $request->input('perfil_academico');
     $descripcion->cargo = $request->input('cargo');
     $descripcion->descripcion = $request->input('descripcion');
     $descripcion->horario = $request->input('horario');
     $descripcion->turno = $request->input('turno');
     $descripcion->salario = $request->input('salario');
     $descripcion->save();
     return $descripcion->id_oferta;
    // return view('empresa-add');
    }

     public static function RemoverOferta($request){
      //eliminar empresa por id
      // return empresa::destroy($request->value_empresa); 
     
       $fechaActual = date('Y-m-j');//optenemos la fecha catual
      $fechaMesPasado = strtotime ('-2 month', strtotime($fechaActual)); //convercion
      $fechaMesPasadoDate = date('Y-m-j', $fechaMesPasado);//convercion restandole un mes
       //remover vacante desde la tabla descripcion ofertas      
         $oferta = new descripcion_oferta();
        $oferta->where('id_oferta','=',$request)
        ->update([
          'updated_at' => $fechaMesPasadoDate
        ]);
    }
 public static function SelectOferta($request){
   

      $consulta1 = DB::table('empresas as a')
        ->join('responsables as b', 'b.id_empresa', '=', 'a.id_empresa')
        ->join('descripcion_ofertas as c', 'b.id_oferta', '=', 'c.id_oferta')
        ->select('c.id_oferta','b.id_responsable','a.id_empresa','a.razon_social', 'a.ubicacion', 'a.localidad','a.telefono', 'a.email','b.nom_responsable', 'b.app_p','b.app_m','c.cargo','c.horario','c.descripcion','c.turno','c.salario','c.updated_at')
        ->where([
            ['a.id_empresa','=',$request->value_empresa],
            ['c.id_oferta','=',$request->value_oferta],
            ['b.id_responsable','=',$request->value_responsable]
        ])->get();
      return $consulta1;

 }
    public static function EditarOferta($request){
            
            $oferta = new descripcion_oferta();
        $oferta->where('id_oferta', '=', $request->data['id_oferta'])
        ->update([
            'horario' => trim(strtoupper($request->data['horario'])),
            'turno' => trim(strtoupper($request->data['turno'])),
            'salario' => trim(strtoupper($request->data['salario'])),
            'cargo' => trim(strtoupper($request->data['cargo'])),
            'perfil_academico' => trim(strtoupper($request->data['perfil_academico'])),
            'descripcion' => trim(strtoupper($request->data['descripcion']))
        ]);

    }
}
