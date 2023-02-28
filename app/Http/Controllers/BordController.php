<?php

namespace App\Http\Controllers;

use App\Models\Bord;
use Illuminate\Http\Request;

class BordController extends Controller
{
    public function index()
    {
        $bords = Bord::all();

        return view('bord.index', compact('bords') );
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

    public function dashbord()
    {
        $bords = Bord::all();

        return view('dashboard', compact('bords') );
    }

    public function edit($id)
    {
        $bord = Bord::find($id);

        return view('bord.edit', compact('bord'));
    }

    public function update(Request $req)
    {
        $bord = Bord::find($req->id);

        $bord->title = $req->title;
        $bord->contents = $req->contents;
        $bord->save();

        return redirect('/dashboard');
    }

    public function delete($id)
    {
        $bord = Bord::find($id);
        $bord->delete();

        return redirect('/dashboard');
    }
}