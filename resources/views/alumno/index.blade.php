@extends('template.base')

@section('title', 'Lista de alumnos')

@section('content')
    <div class="container py-5">
        <h1 class="text-center mb-4">Lista de alumnos</h1>

        <div class="table-responsive">
            <table class="table table-hover table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Apellidos</th>
                        <th>N.º acceso</th>
                        <th>Género</th>
                        <th>Fecha de nacimiento</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse ($alumnos as $alumno)
                                <tr>
                                    <td>{{ $alumno->id }}</td>
                                    <td>{{ $alumno->nombre }}</td>
                                    <td>{{ $alumno->apellidos }}</td>
                                    <td>{{ $alumno->nacceso }}</td>
                                    <td>{{ $alumno->genero }}</td>
                                    <td>
                                        {{ $alumno->fnac
                        ? \Carbon\Carbon::parse($alumno->fnac)->format('d/m/Y')
                        : 'Sin fecha' }}
                                    </td>
                                </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="text-center">
                                No hay alumnos registrados.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection