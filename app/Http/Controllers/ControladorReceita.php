<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Receita;
use App\Models\Pessoa;
use Illuminate\Support\Facades\DB;

class ControladorReceita extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rec= Receita::where('pessoas_id', '=', Auth::user()->id)->get();
        return view('receitas', compact('rec'));
    }

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('novareceita');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->input('valorReceita') != null && $request->input('tipoReceita') != null) {
            $receita = new Receita();
            $receita->valor = $request->input('valorReceita');
            $receita->tipo_receita = $request->input('tipoReceita');
            $receita->pessoas_id =  Pessoa::where('users_id',  Auth::user()->id)->get('id')->integer();
            $receita->save();
        }
        return redirect('/receitas');
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
     $receita = Receita::find($id);
     if(isset($receita)){
        return view('editarreceita', compact('receita'));
     }
     return redirect('/receitas');
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
        $receita = Receita::find($id);
        if(isset($receita) && $request->input('valorReceita') != null && $request->input('tipoReceita') != null) {
            $receita->valor = $request->input('valorReceita');
            $receita->tipo_receita = $request->input('tipoReceita');
            $receita->pessoas_id = Auth::user()->id;
            $receita->save();
        }
        return redirect('/receitas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $rec = Receita::find($id);
        if(isset($rec)) {
            $rec->delete();
        }
        return redirect('/receitas');
    }
}
