<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Receita;
use App\Models\Despesa;

class HomeController extends Controller
{

    public function index()
    {
        $user = User::find(Auth::id());
      //  $des = Despesa::where('users_id',Auth::id())->count();

//    $rec = Receita::where('users_id',Auth::id())->count();

        return view('homepage', compact('user'));
    }
}
