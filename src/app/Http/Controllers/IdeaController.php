<?php

namespace App\Http\Controllers;

use App\Models\Idea; 
use Illuminate\Http\Request;

class IdeaController extends Controller
{
    public function index()
    {
        $ideas = Idea::latest()->get();

        return view('welcome', ['ideas' => $ideas]);
    }

    public function store(Request $request)
    {
        $request->validate(['content' => 'required']);

        Idea::create($request->all());

        return redirect()->route('idea.index');
    }
}