<?php

namespace App\Http\Controllers\productor;

use Illuminate\Http\Request;
use App\Productore;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class ProductorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $dataCliente = DB::table('productos')
        // ->join('')
        // //->join('suscripciones','suscripciones.id','=','clientes.suscripcion_id')
        // //->leftJoin('suscripciones','suscripciones.id','=','clientes.suscripcion_id')
        // ->select('productos.*',
        // 'clientes.medida',
        // 'clientes.stock',
        // 'clientes.nombre')->get();

        // //  $data = Cliente::all();
        // return view('admin.producto.verProducto', compact('dataCliente'));
        $prodcutores = Productore::all();
        return response()->json(compact('prodcutores'),201);
        // return view('admin.productor.verProductor');
     
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