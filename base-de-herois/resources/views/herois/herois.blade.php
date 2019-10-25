@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Herois</div>
                
                <div class="card-body">
                    <table class="table"> 
                        <thead>
                            <tr>
                                <th>nome</th>
                                <th>E-mail</th>
                            </tr>                            
                        </thead> 
                        <tbody>                                
                            @foreach ($usuarios as $usuario)
                            <tr>
                                <td>{{$usuario->name}}</td>
                                <td> {{$usuario->email}}</td>
                            </tr>     
                            @endforeach                                
                        </tbody>
                    </table>
                 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection