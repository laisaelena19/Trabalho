<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Tintas;

class TintasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tintas = Tintas::all();

        return view('tintas.index', compact('tintas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tintas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'tipo'=>'required',
            'marca'=>'required',
            'cor'=>'required',
            'validade'=>'required',
            'preço'=>'required'


        ]);

        $tinta = new Tintas([
            'tipo' => $request->get('tipo'),
            'marca' => $request->get('marca'),
            'cor' => $request->get('cor'),
            'validade' => $request->get('validade'),
            'preço' => $request->get('preço'),
      
        ]);
        $tinta->save();
        return redirect('/tintas')->with('success', 'Tinta saved!');
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
        $tinta = Tintas::find($id);
        return view('tintas.edit', compact('tinta')); 
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
        $request->validate([
            'tipo'=>'required',
            'last_name'=>'required',
            'email'=>'required'
        ]);

        $tinta = Tinta::find($id);
        $tinta->tipo =  $request->get('marca');
        $tinta->last_name = $request->get('cor');
        $tinta->email = $request->get('tipo');
        $tinta->job_title = $request->get('preço');
        $tinta->city = $request->get('validade'); 
        $tinta->save();

        return redirect('/tintas')->with('success', 'Contact updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tinta = Tintas::find($id);
        $tinta->delete();

        return redirect('/tintas')->with('success', 'Tinta deleted!');
    }
}
