<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

        // $video = Video::with('comments')->find(1);

    //    return $video;


    // echo "<h1> $video->title</h1>";
    // echo "<h4> $video->url</h4>";


    // foreach ($video->comments as $key => $comment) {
    //     echo $comment->detail;
    //     echo "<hr>";
    // }

    // $video = Video::with('latestComment')->find(1);

        // $video = Video::with('oldestComment')->find(1);

    // $video = Video::find(1);

    // return $video->BestComment;


        // $video = Video::with('BestComment')->find(2);

        $video = Video::find(1);


        return $video->BestComment;



    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //

        $video = Video::find(2);

        $video->comments()->create([
            'detail' => "good video"
        ]);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
