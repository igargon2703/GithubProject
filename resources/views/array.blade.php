@extends('index')

@section('content')
    <div class="container d-flex align-items-center flex-column">
        <h1>Lista de alumnos</h1>
        <h2>{{ $grupo }}, {{ $profesor }}</h2>
    </div>
@endsection

@section('blanco')

<section class="page-section portfolio" id="portfolio">
    <div class="container">

        <div class="row justify-content-center">

            @foreach ($alumnos as $alumno)

                <div class="col-md-6 col-lg-4 mb-4">

                    <div class="portfolio-item mx-auto">

                        @if ($alumno['edad'] < 20)
                            <img class="img-fluid"
                                 src="{{ asset('assets/img/portfolio/cabin.png') }}"
                                 alt="...">
                        @else
                            <img class="img-fluid"
                                 src="{{ asset('assets/img/portfolio/submarine.png') }}"
                                 alt="...">
                        @endif

                        <div class="text-center mt-2">
                            {{ $alumno['nombre'] }}
                        </div>

                    </div>

                </div>

            @endforeach

        </div>

    </div>
</section>

@endsection