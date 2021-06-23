@extends('layouts.app')

@section('content')
<div class="card border">
    <div class="card-body">
        <h5 class="card-title" style="text-align: center">Cadastro de Receitas - Modificado</h5>

        <table class="table table-ordered table-hover" style="border-top: 1px ridge black">
            <thead>
                <tr>
                    <th>Código</th>
                    <th>Tipo</th>
                    <th>Valor</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
    @foreach($rec as $r)
                <tr>
                    <td>{{$r->id}}</td>
                    <td>{{$r->tipo_receita}}</td>
                    <td>{{$r->valor}}</td>
                    <td>
                        <a href="/receitas/editar/{{$r->id}}" class="btn btn-sm btn-primary">Editar</a>
                        <a href="/receitas/apagar/{{$r->id}}" class="btn btn-sm btn-danger">Apagar</a>
                    </td>
                </tr>
    @endforeach
            </tbody>
        </table>
    </div>
    <div class="card-footer">
        <a href="/receitas/novo" class="btn btn-sm btn-primary" role="button">Nova receita</a>
    </div>
</div>


@endsection
