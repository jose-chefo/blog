@extends('adminlte::page')

@section('title', 'Chefo')

@section('content_header')

    <a class="float-right btn btn-secondary btn-sm" href="{{route('admin.posts.create')}}">Nuevo post</a>
    <h1>Listado de post</h1>
@stop

@section('content')
    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{session('info')}}</strong>
        </div>
    @endif
    
    @livewire('admin.posts-index')
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop







