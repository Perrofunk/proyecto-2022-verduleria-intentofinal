@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
{{ Breadcrumbs::render() }}
<hr>
<h2 class="display-4">Perfil de Administrador</h2>
@stop


@section('content')
    {{-- Header --}}

    {{-- Alpine JS --}}
    <script defer src="https://unpkg.com/@alpinejs/persist@3.x.x/dist/cdn.min.js"></script>
    <script src="//unpkg.com/alpinejs" defer></script>
    @if ($errors->any())
            {{($errors->first())}} <a href="{{route('admin.index')}}" class="btn btn-primary" type="button">Volver</a>
    @else
        
    @endif
@stop

@section('css')
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
@stop

@section('js')
    <script>
        console.log('Hi!');
    </script>
@stop