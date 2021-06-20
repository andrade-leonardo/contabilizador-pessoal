@extends('layouts.app')

@section('content')
<div class="container"  >
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <nav>
                    <ul class="homelist listagem">
                        <li><a href="/despesas">Despesas</a></li>
                        <li><a href="/receitas">Receitas</a></li>
                    </ul>
                </nav>
                <div style="background: rgb(236, 236, 236)">
                    <h1 style="color: rgb(54, 20, 20); font-size: 40px;">Projeto </br> GCS</h1>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
