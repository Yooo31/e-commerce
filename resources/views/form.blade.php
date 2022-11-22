@extends('master')

@section('content')

<h2>Créer Produit</h2>

<form action="{{ route('store') }}" method="post">
  {{ csrf_field() }}
  <input type="text" name="title" id="">
  <input type="text" name="slug" id="">
  <input type="text" name="description" id="">
  <input type="number" name="page" id="">
  <button type="submit">Valider</button>
</form>

@if ($errors->any())

<ul>
  @foreach($errors->all() as $error)
    <li>{{$error}}</li>
  @endforeach
</ul>

@endif

@stop