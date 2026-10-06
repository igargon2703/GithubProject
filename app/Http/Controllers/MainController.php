<?php

namespace App\Http\Controllers;

class MainController extends Controller
{
<<<<<<< HEAD
    public function index()
    {
        return view('index');
    }

    public function about()
=======
    function about()
>>>>>>> refs/remotes/origin/main
    {
        return view('about');
    }

<<<<<<< HEAD
    function array()
=======
<<<<<<< HEAD
    public function aboutMetodo()
    {
        return view('about');
    }
}
=======
    function array(): View
>>>>>>> refs/remotes/origin/main
    {
        $array = array();
        $array = [];

        $array2 = 'Juan';
        $array2 = 'Pepe';
        $array2 = 'Maria';
        $array2 = 'Maria';

        $array3 = ['Juan', 'Pepe', 'Maria'];

        $alumnos = [
            ['nombre' => 'Ajarif Saika, Fátima', 'edad' => 20],
            ['nombre' => 'Albarrán Joya, Antonio', 'edad' => 21],
            ['nombre' => 'Burgos Tomé, Adrián', 'edad' => 20],
            ['nombre' => 'Castillo García, Joaquín', 'edad' => 20],
            ['nombre' => 'Carrascosa Delgado, Pablo', 'edad' => 20],
            ['nombre' => 'Fernández Álvarez, Adrián', 'edad' => 19],
            ['nombre' => 'El Issmail Al Assaf, Amara', 'edad' => 20],
            ['nombre' => 'García González, Ignacio', 'edad' => 19],
            ['nombre' => 'Galdón Fernández, Abraham', 'edad' => 20],
            ['nombre' => 'Gorlat Castro, Raúl', 'edad' => 19],
            ['nombre' => 'Hernández Recio, Iván', 'edad' => 29],
            ['nombre' => 'Kordass Rjaf-Allah, Noussayr', 'edad' => 19],
            ['nombre' => 'Maldonado Navarro, Manuel', 'edad' => 20],
            ['nombre' => 'Montero Pelegrina, Pedro', 'edad' => 21],
            ['nombre' => 'Montoro Ruiz, Alba', 'edad' => 19],
            ['nombre' => 'Pérez Montalbán, Christian', 'edad' => 19],
            ['nombre' => 'Sánchez Sorroche, José', 'edad' => 19],
            ['nombre' => 'Serrano Rodríguez, Pablo', 'edad' => 21],
            ['nombre' => 'Vereda Orozco, Gonzalo Jesús', 'edad' => 19],
            ['nombre' => 'Vicaria García, Francisco Javier', 'edad' => 24],
            ['nombre' => 'Vilar Martín, Blas', 'edad' => 18],
            ['nombre' => 'Villegas Rivera, Luis', 'edad' => 20],
            ['nombre' => 'García López, Pilar', 'edad' => 19],
        ];

        $grupo = 'Segundo de Desarrollo de Aplicaciones Web A';

        return view('array', [
            'grupo' => $grupo,
            'alumnos' => $alumnos,
            'profesor' => 'Carmelo Vega'
        ]);
    }

    function index()
    {
        return view('index');
    }

    function portfolio()
    {
        return view('portfolio');
    }
<<<<<<< HEAD
}
=======
}
>>>>>>> refs/remotes/origin/main
>>>>>>> refs/remotes/origin/main
