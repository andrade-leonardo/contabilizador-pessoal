@extends('layouts.app')

@section('content')
<div class="card border">
    <div class="card-body">
        <h5 class="card-title" style="text-align: center">Cadastro de Despesas</h5>

@if(count($des) > 0)
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
    @foreach($des as $des)
                <tr>
                    <td>{{$des->id}}</td>
                    <td>{{$des->tipo_despesa}}</td>
                    <td>{{$des->valor}}</td>
                    <td>
                        <a href="/despesas/editar/{{$des->id}}" class="btn btn-sm btn-primary">Editar</a>
                        <a href="/despesas/apagar/{{$des->id}}" class="btn btn-sm btn-danger">Apagar</a>
                    </td>
                </tr>
    @endforeach                
            </tbody>
        </table>
@endif        
    </div>
    <div class="card-footer">
        <a href="/despesas/novo" class="btn btn-sm btn-primary" role="button">Nova despesa</a>
    </div>
</div>


@endsection