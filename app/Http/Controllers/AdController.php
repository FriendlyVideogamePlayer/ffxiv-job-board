<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ads;
use Illuminate\Support\Facades\DB;

class AdController extends Controller
{

    //Takes all of the ads from the DB and returns the browse view
    public function index() {
        $ads = DB::table('ads')->orderBy('ad_id', 'desc')->get();
        return view('browseads')->with('ads',$ads);
    }

}
