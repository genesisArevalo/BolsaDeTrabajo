<?php

namespace App;
use DB;
use Illuminate\Database\Eloquent\Model;

class responsable extends Model
{
    
     protected $table = 'responsables';
    protected $primaryKey = 'id_responsable';

      
        public static function insertResponsable($request,$empresas,$id_oferta)
    {
         
      $responsable = new responsable();
      $responsable->nom_responsable = $request->input('nom_responsable');
      $responsable->app_p = $request->input('app_p');
      $responsable->app_m = $request->input('app_m');
      $responsable->cargo = $request->input('cargo');
      $responsable->id_empresa = $empresas;
      $responsable->id_oferta= $id_oferta;
      $responsable->save();
    }
    public static function verificarExistencia($request)
    {

        $existencia = DB::table('responsables')
        ->select('id_responsable')
        ->where('nom_responsable',$request->nom_responsable)
        ->where('app_p',$request->app_p)
        ->where('app_m', '=', $request->app_m)->get();
         return count($existencia);

    }

    public static function EditarResponsable($request){

        $responsable = new responsable();
        $responsable->where('id_responsable', '=', $request->data['id_responsable'])
        ->update([
            'nom_responsable' => trim(strtoupper($request->data['nom_responsable'])),
            'app_p' => trim(strtoupper($request->data['app_p'])),
            'app_m' => trim(strtoupper($request->data['app_m'])),
            'cargo' => trim(strtoupper($request->data['cargo']))
        ]);
    }

 }
