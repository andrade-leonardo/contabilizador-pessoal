<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Receita;

class ControladorReceita extends Controller
{
    public function index()
    {
        $rec = Receita::where('users_id', '=', Auth::user()->id)->get();
        return view('receitas', compact('rec'));
    }

    public function create()
    {
        return view('novareceita');
    }

    public function store(Request $request)
    {
        $receita = new Receita();
        $receita->valor = $request->input('valorReceita');
        $receita->tipo_receita = $request->input('tipoReceita');
        $receita->users_id = Auth::id();
        $receita->save();

        return redirect('/receitas');
    }

    public function edit($id)
    {
        $receita = Receita::find($id);
        if (isset($receita)) {
            return view('editarreceita', compact('receita'));
        }
        return redirect('/receitas');
    }

    public function update(Request $request, $id)
    {
        $receita = Receita::find($id);
        if (isset($receita)) {
            $receita->valor = $request->input('valorReceita');
            $receita->tipo_receita = $request->input('tipoReceita');
            $receita->users_id = Auth::id();
            $receita->save();
        }
        return redirect('/receitas');
    }

    public function destroy($id)
    {
        $rec = Receita::find($id);
        if (isset($rec)) {
            $rec->delete();
        }
        return redirect('/receitas');
    }
}
