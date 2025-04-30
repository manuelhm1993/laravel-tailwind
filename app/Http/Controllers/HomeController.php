<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request): View
    {
        // Devuelve todos los archivos de un directorio
        $images = Storage::files('img');

        // Contenido de prueba
        $content = [
            'font-montserrat font-thin' => fake()->paragraph(random_int(5, 15)),
            'font-montserrat font-regular' => fake()->paragraph(random_int(5, 15)),
            'font-montserrat font-bold' => fake()->paragraph(random_int(5, 15)),
            'font-montserrat font-extrabold' => fake()->paragraph(random_int(5, 15)),
            'font-montserrat font-black' => fake()->paragraph(random_int(5, 15))
        ];
        
        return view('welcome', compact('images', 'content'));
    }
}
