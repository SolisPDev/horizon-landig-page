<?php

namespace App\Http\Controllers;

use App\Models\Subscriber;
use Illuminate\Http\Request;

class SubscriberController extends Controller
{
    public function store(Request $request)
    {
        // Valida el correo electrónico
        $request->validate([
            'email' => 'required|email|unique:subscribers,email',
        ]);

        // Crea un nuevo suscriptor en la base de datos
        Subscriber::create([
            'email' => $request->email,
        ]);

        return response()->json(['message' => '¡Te has suscrito con éxito!'], 201);
    }
}