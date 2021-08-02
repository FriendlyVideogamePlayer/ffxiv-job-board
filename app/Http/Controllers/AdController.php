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
        // Filter through the titles and add in role colours
        foreach($ads as $ad) {
            $ad->title = str_replace('healer', '<span class="text-green-400">healer</span>', $ad->title);
            $ad->title = str_replace('tank', '<span class="text-blue-400">tank</span>', $ad->title);
            $ad->title = str_replace('dps', '<span class="text-red-400">dps</span>', $ad->title);
        }
        return view('browseads')->with('ads',$ads);
    }



}
