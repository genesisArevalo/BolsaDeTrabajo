<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\descripcion_oferta;
use App\responsable;
use App\empresa;
use Redirect;
class Descripcion_OfertaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
 public function RemoverOferta(Request $request)
    {
      //remover descripcion de oferta
    $RemovVacante = descripcion_oferta::RemoverOferta($request->value_oferta);
      //cargar panel principal administrador
    return Redirect::to('/panel/Principal');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
   
     public function selectOfertas(Request $request)
    {
        //cargar vacante
       $vacante=descripcion_oferta::SelectOferta($request);
       //cargar la vista
     return view('administrador.EditarVacante',compact('vacante'));
    }

   public function EditOfertas (Request $request){
    //editar oferta
    $Editvacante=descripcion_oferta::EditarOferta($request);
    $EditarEmpresa = empresa::UpdateEmpresa($request);
    $EditarResponsable = responsable::EditarResponsable($request);
     //cargar panel principal administrador
    return Redirect::to('/panel/Principal');
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
