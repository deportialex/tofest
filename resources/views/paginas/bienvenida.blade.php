@extends('layouts.app') <!--Cual es el layouts que vamos a usar-->

@section('content')
<h1>Bienvenida</h1>
<body>
hola
{{$nombre}} {{$apellido}}
<br>

Nombre completo: {{$nombre_completo}}

</body>
@endsection
