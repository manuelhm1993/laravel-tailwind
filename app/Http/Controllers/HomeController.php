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
        $content = $this->getContent(16);
        
        return view('welcome', compact('images', 'content'));
    }

    // Contenido de prueba
    private function getContent(int $parrafos = 5, $min = 5, $max = 10): array
    {
        $content = [];

        for($i = 0; $i < $parrafos; $i++)
        {
            $content[$i] = fake()->paragraph(random_int($min, $max));
        }

        return $content;
    }
}
