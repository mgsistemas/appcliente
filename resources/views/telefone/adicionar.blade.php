@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10">
            <div class="panel panel-info">
                <ol class="breadcrumb panel-heading">
                    <li><a href="{{ route('cliente.index' )}}">Clientes</a></li>                    
                    <li><a href="{{ route('cliente.detalhe',$cliente->id)}}">Detalhe</a></li>                    
                    <li class="active">Adicionar</li>                    
                </ol>

                <div class="panel-body">
                    <p><b>Cliente : </b> {{$cliente->nome}}</p>

                    <form action="{{route('telefone.salvar',$cliente->id)}}" method="post">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
                        <div class="form-group {{ $errors->has('titulo') ? 'has-error' : ''}}">
                            <label for="titulo">Título</label>
                            <input type="text" name="titulo" class="form-control" placeholder="Título do telefone" />
                            @if($errors->has('titulo'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('titulo') }}</strong>
                                </span>
                            @endif

                        </div>
                        <div class="form-group {{ $errors->has('telefone') ? 'has-error' : ''}}">
                            <label for="telefone">E-mail</label>
                            <input type="text" name="telefone" class="form-control" placeholder="Telefone" />
                            @if($errors->has('telefone'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('telefone') }}</strong>
                                </span>
                            @endif

                        </div>
                        <button class="btn btn-info">Adicionar</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection