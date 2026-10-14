@extends('template.base')

@section('content')
<div class="container">
    <h1>Lista de alumnos</h1>
    <h2>{{ $grupo }}</h2>
    <p>Profesor: {{ $profesor }}</p>

    <table class="table table-hover">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Edad</th>
            </tr>
        </thead>
        <tbody>
            @foreach($alumnos as $alumno)
                <tr>
                    <td>{{ $alumno['nombre'] }}</td>
                    <td>{{ $alumno['edad'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection