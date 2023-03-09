<?php

namespace App\Http\Controllers;

use App\Models\Bord;
use App\Models\Comment;
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
        $bords = Bord::latest()->first();
        $bords_id = $bords->id;

        $file_name = $req->file('image')->getClientOriginalName();
        $req->file('image')->storeAs('public/' , $file_name);

        Bord::create([
            'title' => $req->title,
            'contents' => $req->contents,
            'image' => $file_name

        ]);

        // Storage::makeDirectory('public/upload/bord/'. $bords_id);
        $req->file('image')->store('imgs', 'public');

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

    public function keyword(Request $req)
    {
        $keyword = $req->input('keyword');
        $query = Bord::query();

        if(!empty($keyword)) {
            $query->orWhere('title', 'LIKE', "%{$keyword}%")
            ->orWhere('contents', 'LIKE', "%{$keyword}%");
        }
        $bords = $query->orderBy('created_at', 'asc')->get();
        return view('dashboard', compact('bords'));
    }

    public function comment()
    {
        $comments = Comment::all();

        return view('bord.comment', compact('comments') );
    }

    public function comment_ins(Request $req)
    {
        Comment::create([
            'bord_id' => $req->id,
            'comment' => $req->comment,
        ]);

        return redirect('/dashboard');
    }

    public function writein(Request $req)
    {
        $bord = Bord::find($req->id);

        return view('bord.writein', compact('bord') );
    }
}
