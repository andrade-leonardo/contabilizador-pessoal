@extends('layouts.app')

@section('content')

<div class="card border">
    <div class="card-body">
        <form action="/despesas/{{$des->id}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="tipoDespesa">Tipo de Despesa</label>
                <input type="text" class="form-control" name="tipoDespesa"
                       id="tipoDespesa" placeholder="Digite o tipo de despesa" required>
                <label for="valorDespesa">Valor</label>
                 <input type="text" class="form-control" name="valorDespesa"
                     id="valorDespesa" placeholder="Digite valor da despesa" required>
            </div>
            <button type="submit" class="btn btn-primary btn-sm" style="margin-top: 10px;">Salvar</button>
            <button type="cancel" class="btn btn-danger btn-sm" style="margin-top: 10px;">Cancel</button>
        </form>
    </div>
</div>

@endsection
