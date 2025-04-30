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
        
        return view('welcome', compact('images'));
    }
}
