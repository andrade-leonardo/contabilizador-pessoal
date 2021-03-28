@extends('layouts.app')

@section('content')

<div class="card border">
    <div class="card-body">
        <form action="/despesas" method="POST">
            @csrf
            <div class="form-group">
                <label for="tipoDespesa">Tipo de Despesa</label>
                <input type="text" class="form-control" name="tipoDespesa" 
                       id="tipoDespesa" placeholder="Tipo de despesa">
                <label for="valorDespesa">Valor</label>
                 <input type="text" class="form-control" name="valorDespesa" 
                     id="valorDespesa" placeholder="Valor da Despesa">
            </div>
            <button type="submit" class="btn btn-primary btn-sm" style="margin-top:10px;">Salvar</button>
            <button type="cancel" class="btn btn-danger btn-sm" style="margin-top:10px;">Cancelar</button>
        </form>
    </div>
</div>

@endsection