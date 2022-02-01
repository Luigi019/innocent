<?php

namespace App\Http\Controllers;

use App\Models\Enterprise;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class FormationProgramController extends Controller
{

    public function index()
    {
        \Meta::set('description', 'Todos los Programas de formacion');
        \Meta::set('description', 'All Programs');
        \Meta::set('og:type', 'articles');
        \Meta::set('og:type', 'articulos');
        $enterprise = Enterprise::all();
        return view('formationProgram',  compact('enterprise'));
    }
}
