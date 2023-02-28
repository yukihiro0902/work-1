<?php

namespace App\Http\Controllers;

use App\Models\Bord;
use Illuminate\Http\Request;

class BordController extends Controller
{
    public function index()
    {
        $bords = Bord::all();

        return view('bord.index', compact ('bords') );
    }

    public function create()
    {
        return view('bord.create');
    }

    public function insert(Request $req)
    {
        Bord::create([
            'title' => $req->title,
            'contents' => $req->contents,
        ]);
        return redirect('/dashboard');
    }
}
