@extends('backend.layouts.main')

@section('title', 'Categorias')

@section('menu')
@parent
<li class="nav-item">
    <a class="nav-link" href="{{ route('categorias.index') }}">Volver</a>
</li>
@endsection

@section('content')
    <h1>Nueva Categoria</h1>
    <div>
       
    </div>
    <div>
     {{ Form::open(['route' => 'categorias.store', 'files' => true]) }}
        @csrf
        <div class="mb-3">
        {{ Form::label('titulo', 'Título', ['class' => 'control-label']) }}
        @php $class = "form-control is-valid";
        if ($errors->has('titulo')) { $class = "form-control is-invalid"; }
        @endphp
        {{ Form::text('titulo',null, ['class' => $class, 'placeholder' => 'Ingrese el Título']) }}
        @error('titulo')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div>
      {!! Form::submit("Guardar", ['class' => 'form-control btn btn-success']) !!}
    </div>
{!! Form::close() !!}
@endsection