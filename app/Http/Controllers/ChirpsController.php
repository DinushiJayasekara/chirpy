<?php

namespace App\Http\Controllers;

use App\Chirp;
use Illuminate\Http\Request;

class ChirpsController extends Controller
{
    public function store()
    {
        $attributes = request()->validate([
            'body' => ['required', 'max:255']
        ]);

        Chirp::create([
            'user_id' => auth()->id(),
            'body' => $attributes['body']
        ]);

        return redirect()->route('home');
    }

    public function index()
    {

        // return auth()->user()->timeline();

        return view('chirps.index', [
            'chirps' => auth()->user()->timeline()
        ]);
    }
}
