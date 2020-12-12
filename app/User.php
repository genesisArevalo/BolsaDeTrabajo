<?php

namespace App;
use DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

class User extends Model
{
    //
    protected $table = 'users';
    protected $primaryKey = 'id_user';

    public static function verificarExistenciaEmail($request)
    {
         
        $existencia = DB::table('users')
                ->where('email', '=',$request)
                ->get();
        return count($existencia);
    }
     public static function verificarExistenciaCurp($curp)
    {
         
        $existencia = DB::table('users')
                ->where('curp', '=',$curp)
                ->get();
        return count($existencia);
	 }
	  public static function verificarExistenciaMatricula($matricula)
    {
         
        $existencia = DB::table('users')
                ->where('matricula', '=',$matricula)
                ->get();
        return count($existencia);

    }

   public static function validate_curp($valor) {     
     if(strlen($valor)==18){         
        $letras     = substr($valor, 0, 4);
        $numeros    = substr($valor, 4, 6);         
        $sexo       = substr($valor, 10, 1);
        $mxState    = substr($valor, 11, 2); 
        $letras2    = substr($valor, 13, 3); 
        $homoclave  = substr($valor, 16, 2);
        $res = User::is_mx_state($mxState);
        $result = User::is_sexo_curp($sexo);
          if(ctype_alpha($letras) && ctype_alpha($letras2) && ctype_digit($numeros) && ctype_digit($homoclave) && $res =='true' && $result =='true' ){ 
            return true; 
        }         
    return false;
     }else{
         return false; 
        } 
    }

   public static function is_mx_state($state){     
    $mxStates = [         
        'AS','BS','CL','CS','DF','GT',         
        'HG','MC','MS','NL','PL','QR',         
        'SL','TC','TL','YN','NE','BC',         
        'CC','CM','CH','DG','GR','JC',         
        'MN','NT','OC','QT','SP','SR',         
        'TS','VZ','ZS'     
    ];     
    if(in_array(strtoupper($state),$mxStates)){         
        return true;     
        }     
        return false; 
    }

    public static function is_sexo_curp($sexo){     
    $sexoCurp = ['H','M'];     
    if(in_array(strtoupper($sexo),$sexoCurp)){         
       return true;     
        }     
        return false; 
    }

    public static function logo_User($request){ 
   $existencia = DB::table('users')
        ->select('password')
        ->where('email',$request->email)->get();
        $id = $existencia->pluck('password')->first();
    if (Hash::check($request->pass,$id)) {
    echo '¡La contraseña es válida!';
        echo 'la contraseña es: ';
    echo $id;
      echo 'la otra  contraseña es: ';
    echo $request->pass;
} else {
    echo 'La contraseña no es válida. ';
    echo 'la contraseña es: ';
    echo $id;
      echo ' la otra  contraseña es: ';
    echo $request->pass;
    return $existencia;
}
   
        // return count($existencia);
    }


     public static function authentication($request)
    {
        //verifica contraseña y selecciona el tipo de usuario
        $admin = User::where('email','=',trim($request->email))->first();        
        if(!empty($admin) && Hash::check($request->pass,$admin->password)){
           
         $resp = DB::table('users')
                ->select('tipo_user')
                ->where('email', '=',$request->email)->get();
                  $type = $resp->pluck('tipo_user')->first();
             return  $type; 
         }else
            {
                $resp = 'la contraseña es incorrecta';
                   return $resp; 
             }   
       
    }
   

    public static function SelectUsuarioInf($request)
    {
        //verifica contraseña y selecciona el tipo de usuario
        $admin = User::where('email','=',trim($request->email))->first();        
        if(!empty($admin) && Hash::check($request->pass,$admin->password)){           
         $resp = DB::table('users')
            ->select('id_user','edad','telefono','edo_civil','pais','municipio','colonia','domicilio','cp')
                ->where('email', '=',$request->email)->get();
             return  $resp; 
         }else
            {
                $resp = 'la contraseña es incorrecta';
                   return $resp; 
             }   
       
    }


}
