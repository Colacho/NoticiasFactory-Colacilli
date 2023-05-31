@extends('backend.layouts.main')

@section('title', 'Noticias')

@section('content')
    <div class="card mb-3">
        <div class="row no-gutters">
            <div class="col-md-5">
                @if ($noticia->imagen)
                    @if (Str::startsWith($noticia->imagen, 'http'))
                        <img src="{{ $noticia->imagen }}" class="card-img-top" alt="...">
                    @else
                        <img src="{{ asset('/storage/' . $noticia->imagen) }}" class="card-img-top" alt="...">
                    @endif
                @else
                    <img src="../img/no_image.png" alt="no image">
                @endif
            </div>
            <div class="col-md-7">
                <div class="card-body">
                    <h5 class="card-title">{{ $noticia->titulo }}</h5>
                    <p class="card-text">{!! $noticia->cuerpo !!}</p>
                </div>
            </div>
        </div>
    </div>
@endsection
