<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class AlumnoController extends Controller
{
    public function create(): View
    {
        return view('alumno.create', []);
    }
    
    public function destroy(Alumno $alumno): RedirectResponse
    {
        return redirect()->route('index');
    }

    public function edit(Alumno $alumno): View
    {
        return view('alumno.edit', []);

    }

    public function index(): View
    {
        return view('index', []);

    }

    public function show(Alumno $alumno): View
    {
        return view('index', []);
    }

    /*public function store(Request $request): RedirectResponse
    {
        return redirect()->route('index');
    }*/

    function store(Request $request) {
        //dd($request->all());
        $alumno = new Alumno();
        $alumno->nombre = $request->nombre;
        $alumno->apellidos = $request->apellidos;
        $alumno->fecha_nacimiento = $request->fecha_nacimiento;
        $alumno->genero = $request->genero;
        $alumno->nota_acceso = $request->nota_acceso;
        dd($alumno);
    }

    public function update(Request $request, Alumno $alumno): RedirectResponse
    {
        return redirect()->route('index');
    }

}
