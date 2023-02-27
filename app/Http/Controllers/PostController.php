<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
/**
 * @return view
 */

class PostController extends Controller
{
    public function create()
    {
        return view('post/create');
    }

}

?>

