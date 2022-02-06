<?php

namespace App\Http\Controllers;

use App\Models\Pokeability;
use App\Models\PokeType;
use App\Models\User;
use Inertia\Inertia;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $users = User::all();
        $poketypes = PokeType::all();
        $pokeabilities = Pokeability::with('poketype')->get();

        return Inertia::render('Dashboard', [
            'trainers' => $users,
            'poketypes' => $poketypes,
            'pokeabilities' => $pokeabilities,
        ]);
    }
}
