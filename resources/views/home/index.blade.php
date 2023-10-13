@extends('layouts\app-master')

@section('content')
<link rel="stylesheet" href="{{url('assets/css/nav.css')}}">

<h1  >Inicio</h1>

        @auth
                <p>Bienvenido  {{auth()->user()->nombre}}, autenticado </p>
                 <p> <a href="/logout">cerrar seccion</a></p>

        @endauth

        @guest
                 para ver el contenido <a href="/login">Inicia seccion</a>
        @endguest

      
@endsection

        