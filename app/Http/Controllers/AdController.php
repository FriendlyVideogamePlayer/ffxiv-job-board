<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdController extends Controller
{

    //Takes all of the ads from the DB and returns the browse view
    public function index() {
        $ads = DB::table('ads')->orderByDesc('id');
        return view('browseads')->with('ads',$ads);
    }

}
