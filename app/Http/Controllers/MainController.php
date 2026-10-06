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
    public function aboutMetodo()
    {
        return view('about');
    }
}
=======
    function array(): View
    {
        $array = array();
        $array = [];
        $array2 = 'Juan';
        $array2 = 'Pepe';
        $array2 = 'Maria';
        $array2[10] = 'Elisabeth';
        $array2 = 'Maria';
        $array3 = ['Juan', 'Pepe', 'Maria'];
        $alumnos = [   
            'Ajarif Saika, Fátima',
            'Albarrán Joya, Antonio',
            'Burgos Tomé, Adrián',
            'Castillo García, Joaquín',
            'Carrascosa Delgado, Pablo',
            'Fernández Álvarez, Adrián',
            'El Issmail Al Assaf, Amara',
            'García González, Ignacio',
            'Galdón Fernández, Abraham',
            'Gorlat Castro, Raúl',
            'Hernández Recio, Iván',
            'Kordass Rjaf-Allah, Noussayr',
            'Maldonado Navarro, Manuel',
            'Montero Pelegrina, Pedro',
            'Montoro Ruiz, Alba',
            'Pérez Montalbán, Christian',
            'Sánchez Sorroche, José',
            'Serrano Rodríguez, Pablo',
            'Vereda Orozco, Gonzalo Jesús',
            'Vicaria García, Francisco Javier',
            'Vilar Martín, Blas',
            'Villegas Rivera, Luis',
            'García López, Pilar',
        ];
        $grupo = 'Segundo de Desarrollo de Aplicaciones Web A';

    }




    function index()
    {
        return view('index');
    }

    function portfolio()
    {
        return view('portfolio');
    }
}
>>>>>>> refs/remotes/origin/main
