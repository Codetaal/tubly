<?php

class Convert
{
    /**
     * @var string
     */
    private $ffmpeg_path;

    private $storage_path;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->ffmpeg_path = base_path() . "/resources/ffmpeg/ffmpeg";
        $this->storage_path = storage_path() . "/mp4";
    }

    public function convertMp3ToMp4($audio, $image)
    {
        echo shell_exec('"' . $this->ffmpeg_path . '" -loop 1 -i "' . base_path() . '/_materiaal/vinyl.jpg" -i "' . base_path() . '/_materiaal/song.mp3" -shortest -c:v libx264 -c:a copy "' . base_path() . '/_materiaal/test.mp4" 2>&1');
    }

}