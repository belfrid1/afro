<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Tag;
use App\Models\Video;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $tags = Tag::all();
        $videos = Video::All();
        $duration = [];

        // Video local path
        $dirname = dirname(__FILE__, 5);
        // Determination de la durée de chaque video
        foreach ($videos as $video) {
            $getID3 = new \getID3;
            $detectedDuration = $getID3->analyze($dirname . "/public/" . $video->video_file)["playtime_string"];
            if (strpos($detectedDuration, ":") !== false && strlen($detectedDuration) % 3 == 1) {
                $detectedDuration = "0" . $detectedDuration;
            }
            $duration[$video->id] = $detectedDuration;
        }

        return view('front.home', compact('tags', 'videos', 'duration'));
    }
}
