@extends('layouts.app')

@section('content')

<div class="card border">
    <div class="card-body">
        <form action="/despesas/{{$res->id}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="tipoReceita">Tipo de Receita</label>
                <input type="text" class="form-control" name="tipoReceita"
                       id="tipoReceita" placeholder="Digite o tipo de receita" required>
                <label for="valorReceita">Valor</label>
                 <input type="text" class="form-control" name="valorReceita"
                     id="valorReceita" placeholder="Digite valor da receita" required>
            </div>
            <button type="submit" class="btn btn-primary btn-sm" style="margin-top: 10px;">Salvar</button>
            <button type="cancel" class="btn btn-danger btn-sm" style="margin-top: 10px;">Cancel</button>
        </form>
    </div>
</div>

@endsection
