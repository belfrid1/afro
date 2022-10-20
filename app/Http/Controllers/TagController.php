<?php

namespace App\Http\Controllers;

use App\Models\PopupGroup;
use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tags = Tag::all();

        return view('back.tag.index',compact('tags'));
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
        //        $check = checkdnsrr($request->name , "A");
        //        dd($check);

        $request->validate([
            'tagName' => 'required|unique:tags',
        ]);

        Tag::create(
            [
                'tagName' => $request->tagName,
            ]
        );
        return redirect()->route('tag.index')
            ->with(['success' => "Tag created successfully."]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function show(Tag $tag)
    {dd('delete');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tag  $tag
     */
    public function edit(Tag $tag)
    {
        $tag = Tag::find($tag)->first();


        if($tag){
            return view('back.tag.edit',compact('tag'));
        }else{
            return redirect()->back()->with(['error' => "This tag doesn't exist"]);
        }

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tag  $tag

     */
    public function update(Request $request, Tag $tag)
    {

        $request->validate([
            'tagName' => 'required|unique:tags',
        ]);

        $tag = Tag::find($tag)->first();

        $tagEdit = $tag->update(
            [
                'tagName' => $request->tagName,
            ]
        );
       if($tagEdit){
           return redirect()->route('tag.index')
               ->with(['success' => "Tag edited successfully."]);
       }else{
           return redirect()->back()->with(['error' => "Unable to edit tag"]);
       }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tag $tag)
    {
        $tagToDelete = Tag::find($tag->id);
        $tagToDelete->delete();
        // Redirection route "posts.index"
        return redirect()->back()->with(['success' => "Deletion successfully completed"]);
    }
}
