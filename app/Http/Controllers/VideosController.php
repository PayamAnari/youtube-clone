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
        $image_file = null;
        $video_file = null;

        $video = new Video();

        $image_file = $request->file('image');
        $request->validate(['image' => 'required|mimes:jpg,jpeg,png|max:2048']);

        $video_file = $request->file('video');
        $request->validate(['video' => 'required|mimes:mp4,webm']);

        $thumbPath = '/videos/Thumbnails/';
        $videoPath = '/videos/';

        $time = time();

        $extension = $image_file->getClientOriginalExtension();
        $imageName = $time . '.' . $extension;

        $extension = $video_file->getClientOriginalExtension();
        $videoName = $time . '.' . $extension;

        $video->title = $request->input('title');
        $video->video = $videoPath . $videoName;
        $video->thumbnail = $thumbPath . $imageName;
        $userNames = ['John Doe', 'Alice Pit', 'Bob Marly', 'Eve Jane', 'Charlie Mark', 'Mallory Doe', 'Trent Pit', 'Oscar Marly', 'Victor Jane', 'Walter Mark'];
        $video->user = $userNames[array_rand($userNames)];
        $video->views = rand(10, 100) . 'k views - ' . rand(1, 6) . 'days ago';
        $image_file->move(public_path($thumbPath), $imageName);
        $video_file->move(public_path($videoPath), $videoName);

        if ($video->save()) {
            return redirect()->route('videos.show', $video['id']);
        }
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
