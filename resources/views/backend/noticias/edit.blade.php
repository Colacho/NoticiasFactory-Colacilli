@extends('backend.layouts.main')

@section('title', 'Editar Noticia')

@section('content')
<h1>Editar Noticia</h1>
<div>
    @if (Session::has('status'))
    <div class="alert alert-success">{{ Session('status') }}</div>
    @endif
</div>
<div>
    {{ Form::model($noticia, ['method' => 'put', 'route' => ['noticias.update', $noticia->id], 'files' => true, 'class' => 'was-validated']) }}
    @csrf
    <div class="mb-3">
        {{ Form::label('titulo', 'Título', ['class' => 'control-label']) }}
        @php $class = "form-control is-valid";
        if ($errors->has('titulo')) { $class = "form-control is-invalid"; }
        @endphp
        {{ Form::text('titulo', old('titulo'), ['class' => $class, 'placeholder' => 'Ingrese el Título']) }}
        @error('titulo')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        {{ Form::label('cuerpo', 'Cuerpo', ['class' => 'control-label']) }}
        @php $class = "form-control is-valid";
        if ($errors->has('cuerpo')) { $class = "form-control is-invalid"; }
        @endphp
        {{ Form::textarea('cuerpo', old('cuerpo'), ['class' => $class, 'placeholder' => 'Ingrese el Cuerpo']) }}
        @error('cuerpo')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        {{ Form::label('imagen', 'Imagen', ['class' => 'control-label']) }}
        @php $class = "form-control is-valid";
        if ($errors->has('imagen')) { $class = "form-control is-invalid"; }
        @endphp        
        {{ Form::file('imagen', ['class' => $class]) }}
        @error('imagen')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        {{ Form::label('autor', 'Autor', ['class' => 'control-label']) }}
        @php $class = "form-control is-valid";
        if ($errors->has('autor')) { $class = "form-control is-invalid"; }
        @endphp            
        {{ Form::select('autor', $users, null, ['class' =>$class, 'placeholder' => 'Seleccione un autor']) }}
         @error('autor')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

</div>

    {!! Form::submit("Guardar", ['class' => 'form-control btn btn-success']) !!}
</div>
{!! Form::close() !!}
@endsection