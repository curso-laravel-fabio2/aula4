@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="alert alert-dange">
                @foreach ($errors ->all() as $erro)
                    <p>{{$errors}}</p>
                @endforeach
         
            </div>
            <div class="card">
                <div class="card-header">Novo Heroi/div>

                <div class="card-body">
                    <form action="{{route("herois.salvanovo")}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <p>Nome:</p>
                        <input type="text" name="nome">
                        <p>Identidade Secreta:</p>
                        <input type="text" name="identidade_secreta">
                        <p>Origem:</p>
                        <input type="text" name="origem">
                        <p>Força:</p>
                        <select name="forca" id="forca">
                            <option value="forte">Forte</option>
                            <option value="forte">Media</option>
                            <option value="forte">Fraca</option>
                        </select>

                        <p>Terráqueo?
                            <input type="checkbox" name="terraqueo">
                        </p>
                        <p>Pode voar?
                                <input type="checkbox" name="pode_voar">
                            </p>
                        <p>Foto:</p>
                         <p>
                             <input type="file" name="foto" id="foto">
                         </p>
                        <input type="submit" value="Salvar">

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
