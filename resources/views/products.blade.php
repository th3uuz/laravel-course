@extends('layouts.main')

@section('title', 'Produto')

@section('content')
<h1>Tela de produtos</h1>
@if($busca != '')
    <p>O usuário está bucando por: {{ search }}</p>
@endif

@endsection