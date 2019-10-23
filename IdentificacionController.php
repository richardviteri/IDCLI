<?php

namespace App\Http\Controllers\Idcli;

use App\Http\Models\Idcli\Identificacion;
use App\Http\Models\Idcli\TipoCliente;
use App\Http\Models\Idcli\TipoRif;
use App\Http\Models\Idcli\ActividadEconomica;
use App\Http\Models\Idcli\CategoriaEspecial;
use App\Http\Models\Idcli\Pais;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IdentificacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //return redirect()->route('identificacion.create');
        dd(Identificacion::with('detalleEmpresa')->get());
    }
    public function tipoClienteList()
    {
        return TipoCliente::select('id_tipo_cliente','nb_tipo_cliente')
                           ->get();
    }

    public function tipoRifList()
    {
        return TipoRif::select('id_tipo_rif','nb_rif')
                           ->get();
    }

    public function actividadEconominaList()
    {
        return ActividadEconomica::select('id_actividad_economica','nb_acti_economica')
                           ->get();
    }

    public function categoriaEspecialList()
    {
        return ActividadEconomica::select('id_actividad_economica','nb_acti_economica')
                           ->get();
    }

    public function paislList()
    {
        return Pais::select('id_pais','nb_pais')
                           ->get();
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $Identificacion = Identificacion::create($request->all());
        $Identificacion->detalleEmpresa()->create($request->detalleEmpresa);
        
        return [
            'msj'=> 'Registro almacenado Correctamente',  
            compact('Identificacion') 
        ];
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Http\Models\Idcli\Identificacion  $identificacion
     * @return \Illuminate\Http\Response
     */
    public function show(Identificacion $identificacion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Http\Models\Idcli\Identificacion  $identificacion
     * @return \Illuminate\Http\Response
     */
    public function edit(Identificacion $identificacion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Http\Models\Idcli\Identificacion  $identificacion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Identificacion $identificacion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Http\Models\Idcli\Identificacion  $identificacion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Identificacion $identificacion)
    {
        //
    }
}
