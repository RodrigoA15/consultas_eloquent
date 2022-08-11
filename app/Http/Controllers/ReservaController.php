<?php

namespace App\Http\Controllers;

use App\Models\Reserva;
use Illuminate\Http\Request;
use DB;

class ReservaController extends Controller
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
     * @param  \App\Models\Reserva  $reserva
     * @return \Illuminate\Http\Response
     */
    public function show(Reserva $reserva)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Reserva  $reserva
     * @return \Illuminate\Http\Response
     */
    public function edit(Reserva $reserva)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Reserva  $reserva
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reserva $reserva)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Reserva  $reserva
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reserva $reserva)
    {
        //
    }

    public function buscar1(){

        $reserva = Reserva::select ('inicio_fecha', 'fin_fecha', 'habitacions.habitacion_id')
        ->join('habitacions' ,'reservas.habitacion_id',  '='  , 'habitacions.id');
        return $reserva;
    }

    public function buscar2(){

        $reserva1 = Reserva::select( 'inicio_fecha', 'fin_fecha', 'huesped_id', 'huespeds.nombres', 'huespeds.apellidos' , 'habitacions.max_personas')
        ->join('habitacions', 'reservas.habitacion_id',  '=', 'habitacions.id')
        ->join('huespeds',  'reservas.huesped_id', '=', 'huespeds.id')->get();
        return $reserva1;
    }

    ///////////////////////////////////////////////////////////Consultas///////////////////////////////////////////////////////////////

    public function consulta(){
        
        $consulta =Reserva::select('huespeds.nombres', 'huespeds.apellidos', 'huespeds.telefono', 'huespeds.correo', 'habitacions.bano', 'habitacions.ducha')
        ->join('habitacions', 'reservas.habitacion_id', '=', 'habitacions.id')
        ->join('huespeds', 'reservas.huesped_id', '=', 'huespeds.id')
        ->where('habitacions.ducha', '=','si')
        ->where('habitacions.bano', '=','no')
        ->get();
        return $consulta;
    }

    public function consulta3(){

        $consulta3 = Reserva::select(DB::raw('COUNT(huesped_id)', 'inicio_fecha', 'fin_fecha',  'huespeds.nombres'))
        ->join('huespeds', 'reservas.huesped_id' , '='  , 'huespeds.id')
        ->groupby('huespeds.nombres')
        ->get();

        return $consulta3;

    }

    public function consulta4(){
        $consulta4 = Reserva::select(DB::raw('MAX(precio_por_noche)', 'huespeds.nombres', 'huespeds.apellidos'))
        ->join('habitacions', 'reservas.habitacion_id', '=' , 'habitacions.id')
        ->join('huespeds', 'reservas.huesped_id', '=', 'huespeds.id')
       
        ->get();

        return $consulta4;
    }

    


}
