@section('css')
<link href="{{asset('assets/style/show.css')}}" rel="stylesheet">
@endsection

@section('content')
<div class="row g-4">
    <div class="col-12 col-md-4">
        <div class="card text-center">
            <img src="{{  asset('assets/img/alumno.jpg') }}" class="card-img-top" alt="Juan">
            <div class="card-body">
                <h5 class="card-title">Juan Garcia</h5>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-6">
        <div class="card text-center">
            <div class="card-body">
                <h6 class="card-title">{{Carbon / Carbon::parse($alumno->fnac)->locale('es')->translatedFormat('d/m/Y')}}</h6>
                <h6 class="card-title">{{ $alumno->genero }}</h6>
                <h6 class="card-title">{{ $alumno->nacceso }}</h6>
            </div>
        </div>
    </div>
</div>

@endsection