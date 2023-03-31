@extends('dashboard.master')
@section('titulo', ' AgregarPost')
@section('contenido')
@include('dashboard.partials.validation-error')
<h1>Registrar Post</h1>

<form action="{{route('post.store')}}" method="post">
    @csrf
    <main>
        <div class="row">
            <div class="from-group">
                <label for="name">Articulo</label>
                <input type="text" class="form-control" name="name" id="name">
                <div class="row form-group">
                    <label for="description">contenido</label>
                    <textarea class="form-control" name="description" id="description" cols="30" rows="10"></textarea>
                </div>

                <div class="row form-group">
                    <label for="description">categoria</label>
                    <select name="category" id="category">
                        <option value="">Seleccionar una categoria</option>
                        @foreach ($category as $category )
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                    
                </div>

                <div class="row center">
                    <div class="col s6">
                        <button class="btn btn-success btn sm" type="submit">Publicar</button>
                        <a href="{{url('dashboard/post') }}" class="btn btn-secundary btn-sm">Cancelar</a>

                    </div>
                   

                </div>

            </div>

        </div>
    </main>
</form>


@endsection