<?php

namespace App\Http\Controllers;
use App\Http\Requests\CreateAdRequest;
use App\Http\Requests\SearchAdRequest;
use Illuminate\Http\Request;
use App\Models\Ads;
use Illuminate\Support\Facades\DB;

class AdController extends Controller
{

    // takes all of the ads from the DB and returns the browse view
    public function index() {
        $ads = DB::table('ads')->orderBy('ad_id', 'desc')->get();
        // Filter through the titles and add in role colours
        foreach($ads as $ad) {
            $ad->title = str_replace('healer', '<span class="text-green-400">healer</span>', $ad->title);
            $ad->title = str_replace('tank', '<span class="text-blue-400">tank</span>', $ad->title);
            $ad->title = str_replace('dps', '<span class="text-red-400">dps</span>', $ad->title);
            $ad->ad_tags = json_decode($ad->ad_tags);
        }
        return view('browseads')->with('ads',$ads);
    }

    // stores a new record in the db
    public function store(CreateAdRequest $request) {
        $validated = $request->validated();

        $ad_tags = $request->input('tags');
        array_push($ad_tags, $request->input('ad_type'));

        $ad = new Ads;
        $ad->title = $request->input('title');
        $ad->description = $request->input('description');
        $ad->discord_contact = $request->input('discord_contact');
        $ad->ad_type = $request->input('ad_type');
        $ad->ad_tags = json_encode($ad_tags);

        $ad->save();
        return view('/postad')->with('postSuccess', 'your ad has been posted!');
    }

    // searches for ads matching the criteria and returns the browse view
    public function search(SearchAdRequest $request) {
        $validated = $request->validated();

        if($request->input('tags')) {
            $tags = $request->input('tags');

            $ads = DB::table('ads')
                        ->where('ad_type', $request->input('ad_type'))
                        ->where(function ($query) use($tags) {
                            foreach($tags as $tag) {
                                $query->where('ad_tags', 'like', '%'.$tag.'%');
                            }
                        })
                        ->get();

            foreach($ads as $ad) {
                $ad->title = str_replace('healer', '<span class="text-green-400">healer</span>', $ad->title);
                $ad->title = str_replace('tank', '<span class="text-blue-400">tank</span>', $ad->title);
                $ad->title = str_replace('dps', '<span class="text-red-400">dps</span>', $ad->title);
                $ad->ad_tags = json_decode($ad->ad_tags);
            }

            return view('browseads')->with('ads',$ads);

        } else {
            $ads = DB::table('ads')->where('ad_type', $request->input('ad_type'))->get();
            foreach($ads as $ad) {
                $ad->title = str_replace('healer', '<span class="text-green-400">healer</span>', $ad->title);
                $ad->title = str_replace('tank', '<span class="text-blue-400">tank</span>', $ad->title);
                $ad->title = str_replace('dps', '<span class="text-red-400">dps</span>', $ad->title);
                $ad->ad_tags = json_decode($ad->ad_tags);
            }
            return view('browseads')->with('ads',$ads);
        }

        
    }

}
