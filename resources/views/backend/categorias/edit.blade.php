@extends('backend.layouts.main')
@section('title', 'Categorias')
@section('content')

<h1>Editar Usuario</h1>

<div class="links">
        {{ Form::model($categoria, ['method' => 'put', 'route' => ['categorias.update', $categoria->id], 'files' => true]) }}
        @csrf
        @if ($errors->any())
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </ul>
            </div>
        @endif
        <div class="form-group">
            {{ Form::label('descripcion', 'Descripcion', ['class' => 'control-label']) }}
            {{ Form::text('decripcion', old('descripcion'), ['class' => 'form-control', 'placeholder' => 'Ingrese descripcion']) }}
            @error('descripcion')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        
        </br><button type="submit" style="width: 100%;" class="btn btn-primary">Guardar</button>
    </div>
    {!! Form::close() !!}
@endsection