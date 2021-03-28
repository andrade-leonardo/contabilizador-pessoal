@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <navbar>
                    <ul class="homelist">
                        <li><a href="/despesas">Despesas</a></li>
                        <li><a href="/receitas">Receitas</a></li>
                    </ul>
                </navbar>
                <div>
                    <h1 class="header" style="text-align: center; text-shadow:2px 2px 5px gray; font-family:Arial, Helvetica, sans-serif; color:#0048BA; margin-top: 15px;">Home</h1>
                    <hr>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection