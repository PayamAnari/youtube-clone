<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Video;
use Illuminate\Http\Request;
use Inertia\Inertia;

class VideosController extends Controller
{

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return Inertia::render('Video', [
            'video' => Video::find($id),
            'comments' => Comment::all(),
            'recommendedVideos' => video::inRandomOrder()->get(),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Video $video)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Video $video)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $video = Video::find($id);

        if (file_exists(public_path() . $video->video)) {
            unlink(public_path() . $video->video);
        }

        if (file_exists(public_path() . $video->thumbnail)) {
            unlink(public_path() . $video->thumbnail);
        }

        $video->delete();
        return redirect()->route('deleteVideo');
    }
}
