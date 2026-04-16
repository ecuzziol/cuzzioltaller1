<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;


class ContactoController extends Controller
{
    public function procesar(Request $request) { 
        // dd($request->input('nombre'));
        // dd($request->input('email'));
        // dd($request->input('mensaje'));
        // Log::error('Something went wron2!');
        $nombre = $request->input('nombre'); 
        $email = $request->input('email'); 
        $mensaje = $request->input('mensaje');
        return view('exito', [
            'nombre' => $nombre, 
            'email' => $email
        ]); 
    }
}
