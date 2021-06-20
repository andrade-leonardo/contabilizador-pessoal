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
        return view('homepage', compact('user'));
    }
}
