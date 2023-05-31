@extends('backend.layouts.main')

@section('title', 'Categorias')

@section('menu')
@parent
<li class="nav-item">
    <a class="nav-link" href="{{ route('categorias.create') }}">Nueva Categoria</a>
</li>
@endsection

<h1>Index de categorias</h1>

 
@section('content')
    <h3 class="text-dark">Categorias</h3>
    @forelse($categorias as $categoria)
        @if ($loop->first)
            <table class="table table-dark">
                <tr>
                    <td>Id</td>
                    <td>Titulo</td>
                    
                    <td>
                        <a class="btn btn-success" href="{{ route('categorias.create') }}">
                            <img src="{{ asset('svg/new.svg') }}" width="120" height="20" alt="Crear" title="Crear">
                        </a>
                    </td>
                </tr>
        @endif
        <tr>
            <td>{{ $categoria->id }}</td>
            <td> {{ $categoria->descripcion }}</a></td>
            
            <td>
                {{ Form::model($categoria, ['method' => 'delete', 'route' => ['categorias.destroy', $categoria->id]]) }}
                @csrf
                <a href="{{ route('categorias.show', ['categoria' => $categoria->id]) }}" class="btn btn-info"><img
                        src="{{ asset('svg/show.svg') }}" width="20" height="20" alt="Mostrar" title="Mostrar"></a>
                <a href="{{ route('categorias.edit', ['categoria' => $categoria->id]) }}" class="btn btn-primary"><img
                        src="{{ asset('svg/edit.svg') }}" width="20" height="20" alt="Editar" title="Editar"></a>
                <button type="submit" class="btn btn-danger"
                    onclick="if (!confirm('Está seguro de borrar el usuario?')) return false;"><img
                        src="{{ asset('svg/delete.svg') }}" width="20" height="20" alt="Borrar"
                        title="Borrar"></button>
                {!! Form::close() !!}
            </td>
        </tr>
        @if ($loop->last)
            </table>
        @endif
    @empty
        <p class="text-capitalize"> No hay usuarios.</p>
    @endforelse
    </div>
    <hr>
    <!-- Paginación -->
    <div class="d-flex justify-content-center">
        <!--
          Agregar en App\Providers\AppServiceProvider:
          use Illuminate\Pagination\Paginator;
              public function boot() { Paginator::useBootstrap(); } -->
        {!! $categorias->links() !!}
    </div>
@endsection
