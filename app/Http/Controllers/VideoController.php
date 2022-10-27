<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Video;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $videos = Video::all();
        $tags = Tag::all();

        return view('back.video.index', compact('videos', 'tags'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     */
    public function store(Request $request)
    {

        $uploadPath = 'uploads';

        if (!File::isDirectory($uploadPath)) {

            $videoPath =  File::makeDirectory($uploadPath . '/vid', 0777, true, true);
            $thumbnailPath =  File::makeDirectory($uploadPath . '/thumb', 0777, true, true);
            $trailerPat =  File::makeDirectory($uploadPath . '/trail', 0777, true, true);
        }
        $request->validate([
            'videoTitle' => 'required|string|unique:videos',
            'trailer_file' => 'required|mimes:ogg,mp4,3gp,avi,mpg,wmv,mpeg,mov,webm,flv',
            'video_file' => 'required|mimes:ogg,mp4,3gp,avi,mpg,wmv,mpeg,mov,webm,flv',
            'thumbnail_file' => 'required|mimes:jpeg,png,bmp,tiff',
            'tag_id' => 'required',
        ]);

        $dateFormated = Carbon::today() . time();

        if ($request->hasFile('video_file')  && $request->hasFile('trailer_file') && $request->hasFile('thumbnail_file')) {
            $videoFile = $request->file('video_file');
            $trailer_file = $request->file('trailer_file');
            $thumbnailFile = $request->file('thumbnail_file');

            $extVideo = $request->video_file->getClientOriginalExtension();
            $extTrailer = $request->trailer_file->getClientOriginalExtension();
            $extThumbnail = $request->thumbnail_file->getClientOriginalExtension();

            $filenameVideo = 'vid' . $dateFormated . '.' . $extVideo;
            $filenameTrailer = 'trail' . $dateFormated . '.' . $extTrailer;
            $filenameThumbnail = 'thumb' . $dateFormated . '.' . $extThumbnail;

            $newFilename = 'VID_' . $dateFormated;

            //            $img = Image::make($thumbnailFile)->resize(320, 240)->insert($uploadPath.'/thumb');
            $img = Image::make($thumbnailFile)->resize(320, 240);
            $fullPathVideo = $uploadPath . '/vid/' . $filenameVideo;
            $fullPathTrailer = $uploadPath . '/trail/' . $filenameTrailer;
            $fullPathThumbnail = $uploadPath . '/thumb/' . $filenameThumbnail;

            $videoFile =  $videoFile->move($uploadPath . '/vid', $filenameVideo);
            $trailerFile =  $trailer_file->move($uploadPath . '/trail', $filenameTrailer);
            $thumbnailFile = Image::make($thumbnailFile)->resize(320, 240)->save($uploadPath . '/thumb/' . $filenameThumbnail);
            //           $thumbnailFile =  $thumbnailFile->move($uploadPath.'/thumb', $filenameThumbnail);

            // save picture into folder
            //            return $file->move($path, $filename);

            $video =  Video::create(
                [
                    'videoTitle' => $request->videoTitle,
                    'video_file' => $fullPathVideo,
                    'trailer_file' => $fullPathTrailer,
                    'thumbnail_file' => $fullPathThumbnail,
                    'tag_id' => $request->tag_id,
                ]
            );
            if (!$video) {
                return back()->with(['error' => "unable to record video"]);
            }
            if (!$videoFile) {
                return back()->with(['error' => "unable to save video in folder"]);
            }
            if (!$trailerFile) {
                return back()->with(['error' => "unable to save trailer in folder"]);
            }
            if (!$thumbnailFile) {
                return back()->with(['error' => "unable to save Thumbnail in folder"]);
            }
        } else {
            return back()->with(['error' => "Please select a correct video file"]);
        }

        return redirect()->route('video.index')
            ->with(['success' => "video created successfully."]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $user = Auth::user();
        // no auth user
        if (!$user) {
            return  redirect('/register');
        }

        $tags = Tag::all();
        $videos = Video::all();
        $video = Video::where('slug', $slug)->first();

        // Video local path
        $dirname = dirname(__FILE__, 4);
        // Determination de la durée de chaque video
        foreach ($videos as $video) {
            $getID3 = new \getID3;
            $detectedDuration = $getID3->analyze($dirname . "/public/" . $video->video_file)["playtime_string"];
            if (strpos($detectedDuration, ":") !== false && strlen($detectedDuration) % 3 == 1) {
                $detectedDuration = "0" . $detectedDuration;
            }
            $duration[$video->id] = $detectedDuration;
        }

        if ($user->payment_status == true) {
            return view('front.video.show', compact('videos', 'tags', 'video', 'duration'));
        } else {
            if ($user->role == 'admin') {
                return view('front.video.show', compact('videos', 'tags', 'video', 'duration'));
            } else {
                return  redirect('/register');
            }
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Video  $video
     */
    public function edit(Video $video)
    {
        $video = Video::find($video)->first();
        $tags = Tag::all();
        if ($video) {
            return view('back.video.edit', compact('video', 'tags'));
        } else {
            return redirect()->back()->with(['error' => "This Video doesn't exist"]);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Video $video)
    {
        $uploadPath = 'uploads';
        $fullPathVideo = $video->video_file;
        $fullPathTrailer = $video->trailer_file;
        $fullPathThumbnail = $video->thumbnail_file;
        $dateFormated = Carbon::today() . time();
        // if video file has changer
        // remove the old and take the new
        if ($request->video_file) {
            if (Storage::exists($fullPathVideo)) {
                Storage::delete($fullPathVideo);
            }
            $videoFile = $request->file('video_file');
            $extVideo = $request->video_file->getClientOriginalExtension();
            $filenameVideo = 'vid' . $dateFormated . '.' . $extVideo;
            $fullPathVideo = $uploadPath . '/vid/' . $filenameVideo;
            $videoFile =  $videoFile->move($uploadPath . '/vid', $filenameVideo);
            if (!$videoFile) {
                return back()->with(['error' => "unable to save video in folder"]);
            }
        }
        if ($request->trailer_file) {
            if (Storage::exists($fullPathTrailer)) {
                Storage::delete($fullPathTrailer);
            }
            $trailer_file = $request->file('trailer_file');
            $extTrailer = $request->trailer_file->getClientOriginalExtension();
            $filenameTrailer = 'trail' . $dateFormated . '.' . $extTrailer;
            $fullPathTrailer = $uploadPath . '/trail/' . $filenameTrailer;
            $trailerFile =  $trailer_file->move($uploadPath . '/trail', $filenameTrailer);
            if (!$trailerFile) {
                return back()->with(['error' => "unable to save trailer in folder"]);
            }
        }
        if ($request->thumbnail_file) {
            if (Storage::exists($fullPathThumbnail)) {
                Storage::delete($fullPathThumbnail);
            }
            $thumbnailFile = $request->file('thumbnail_file');
            $extThumbnail = $request->thumbnail_file->getClientOriginalExtension();
            $filenameThumbnail = 'thumb' . $dateFormated . '.' . $extThumbnail;
            $fullPathThumbnail = $uploadPath . '/thumb/' . $filenameThumbnail;
            $thumbnailFile = Image::make($thumbnailFile)->resize(320, 240)->save($uploadPath . '/thumb/' . $filenameThumbnail);
            if (!$thumbnailFile) {
                return back()->with(['error' => "unable to save Thumbnail in folder"]);
            }
        }



        $videoToUpdate = Video::find($video)->first();
        if ($videoToUpdate) {
            $videoUpdated = $videoToUpdate->update([
                'videoTitle' => $request->videoTitle,
                'video_file' => $fullPathVideo,
                'trailer_file' => $fullPathTrailer,
                'thumbnail_file' => $fullPathThumbnail,
                'tag_id' => $request->tag_id,

            ]);

            if (!$videoUpdated) {
                return back()->with(['error' => "unable to record video"]);
            }
            return redirect()->route('video.index')
                ->with(['success' => "video edited successfully."]);
        } else {
            return redirect()->back()->with(['error' => "unable to find the video"]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function destroy(Video $video)
    {

        //dd($video);
        $videoToDelete = Video::find($video->id);
        $videoToDelete->delete();

        $videoFile  = $video->video_file;
        $traillerFile = $video->trailer_file;
        $thumbnailFile = $video->thumbnail_file;


        if (file_exists($videoFile)) {
            unlink($videoFile);
        }
        if (file_exists($traillerFile)) {
            unlink($traillerFile);
        }
        if (file_exists($thumbnailFile)) {
            unlink($thumbnailFile);
        }

        // Redirection route "posts.index"
        return redirect()->back()->with(['success' => "Deletion successfully completed"]);
    }


    /**
     * Increment video View
     */
    public function incrementView($slug)
    {
        $targetVideo = Video::where(["slug" => $slug]);
        if ($targetVideo->count() > 0) {
            $newViewCount = $targetVideo->first()->view_counter + 1;
            $targetVideo->update(["view_counter" => $newViewCount]);
        }
    }
}
