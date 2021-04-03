@extends('layouts.app')

@section('content')
<div class="card border">
    <div class="card-body">
        <form action="/home" method="POST">
            @csrf
                <div class="form-group">
                    <label for="SaldoPessoa"> 
                        <input type="text" placeholder="Adicione o seu saldo" id="SaldoPessoa" name="SaldoPessoa" >
                    </label>
                </div>
            <button type="submit" class="btn btn-primary">Salvar</button>
            <button type="reset" class="btn button-red">limpar</button>
        </form>
    </div>
</div>    
@endsection