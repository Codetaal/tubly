<?php

namespace App\Http\Controllers;

use Youtube;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    public function index()
    {
        if (!Youtube::accessTokenExists()) {
            return redirect('youtube/auth');
        }

        $playlist_list = Youtube::channelList();

//        echo shell_exec(base_path().'/resources/ffmpeg/ffmpeg -loop 1 -i "'.base_path().'/_materiaal/vinyl.jpg" -i "'.base_path().'/_materiaal/song.mp3" -shortest -c:v libx264 -c:a copy "'.base_path().'/_materiaal/test.mp4" 2>&1');

        return view('home.show', compact("playlist_list"));

    }

    public function upload(Request $request)
    {
        // validate, store files, upload to youtube, done

        /**
         * convert mp3 to mp4 and store immidiately when chosen
         * validate post
         * upload to youtube
         */

        $request->validate([
            'title' => 'required'
        ]);

        $params = [
            'title' => $request->title,
            'description' => $request->description,
            'category_id' => 10,
            'tags' => $request->tags
        ];

//        $id = Youtube::upload('file.mp4', $params);

        dd($params);
    }

}
