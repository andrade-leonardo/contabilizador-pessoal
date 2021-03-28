@extends('layouts.app')

@section('content')

<div class="card border">
    <div class="card-body">
        <form action="/despesas/{{$des->id}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="tipoDespesa">Tipo de Despesa</label>
                <input type="text" class="form-control" name="tipoDespesa" 
                       id="tipoDespesa" placeholder="Tipo de despesa" value="{{$des->tipo_despesa}}">
                <label for="valorDespesa">Valor</label>
                 <input type="text" class="form-control" name="valorDespesa" 
                     id="valorDespesa" placeholder="Valor da Despesa" value="{{$des->valor}}">
            </div>
            <button type="submit" class="btn btn-primary btn-sm" style="margin-top:  20px;">Salvar</button>
            <button type="cancel" class="btn btn-danger btn-sm" style="margin-top:  20px;">Cancel</button>
        </form>
    </div>
</div>

@endsection