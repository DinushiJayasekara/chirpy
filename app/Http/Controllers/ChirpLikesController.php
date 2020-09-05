<?php

namespace App\Http\Controllers;

use App\Chirp;
use Illuminate\Http\Request;

class ChirpLikesController extends Controller
{
    
    public function store(Chirp $chirp)
    {
        $chirp->like(current_user());

        return back();
    }
    
    public function destroy(Chirp $chirp)
    {
        $chirp->dislike(current_user());
    
        return back();
    }

}
