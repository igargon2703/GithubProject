@extends('template.base')


@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 mx-auto">
            <table class="table table-hove">

                @foreach($alumnos as $alumno)
                    <tr>
                        <td>{{$alumno->id}}</td>
                        <td>{{$alumno->nombre}}</td>
                        <td>{{$alumno->apellidos}}</td>
                        <td>{{$alumno->nacceso}}</td>
                        <td>{{$alumno->genero}}</td>
                        <td>{{Carbon / Carbon::parse($alumno->fnac)->locale('es')->translatedFormat('d/m/Y')}}</td>
                @endforeach
                    <td> <a href="{{route('index')}}" class="btn btn-secondary">View</a></td>
                    <td> <a href="{{route('index')}}" class="btn btn-secondary">Edit</a></td>
                    <td> <a href="{{route('index')}}" class="btn btn-secondary">Delete</a></td>
                </tr>

                </tr>
            </table>
        </div>
    </div>
</div>