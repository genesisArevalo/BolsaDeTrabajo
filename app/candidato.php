<?php

namespace App;
use DB;
use Illuminate\Database\Eloquent\Model;

class candidato extends Model
{
    //

   public static function IndexFormularioVitae($request)
    {
         
      $consulta1 = DB::table('users as u')
        ->select('u.nombre', 'u.app_p', 'u.app_m','u.sexo', 'u.colonia','u.edad', 'u.municipio','u.nacionalidad','u.telefono','u.edo_civil','u.domicilio','u.email','u.cp')
         ->where('id_user', '=',$request->value_eve)->get();

         
       // ->join('responsables as b', 'b.id_empresa', '=', 'a.id_empresa')
        //->join('descripcion_ofertas as c', 'b.id_oferta', '=', 'c.id_oferta')
        //->paginate(15);
       
      
       return $consulta1;
   }


     public static function SendEmail($request)
    {


   }
}
