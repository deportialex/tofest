@extends('layouts.app') <!--Cual es el layouts que vamos a usar-->

@section('content')
<div clas="row">
  <div clas="row">
    <h1>Terrazas</h1>
    <table class="table">
      <thead>
        <tr>
          <th>id</th>
          <th>nombre</th>
          <th>direccion</th>
          <th>codigo</th>
        <tr>
      </thead>
      <tbody>
        @foreach($terr as $ter)
          <tr>
            <td>{{$ter->id}}</td>
            <td>{{$ter->nombre}}</td>
            <td>{{$ter->direccion}}</td>
            <td>{{$ter->codigo}}</td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection
