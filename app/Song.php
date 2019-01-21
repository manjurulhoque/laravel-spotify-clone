<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    public function album()
    {
        return $this->belongsTo(Album::class);
    }

//    public function getDurationAttribute()
//    {
//        return $this->value('duration');
////        $mp3 = new MP3File($this->path);
////        return $mp3->getDurationEstimate();
////        try {
////            $audio = FFProbe::create([
////                'ffmpeg.binaries' => 'C:\FFmpeg\bin\ffmpeg.exe', // the path to the FFMpeg binary
////                'ffprobe.binaries' => 'C:\FFmpeg\bin\ffprobe.exe', // the path to the FFProbe binary
////                'timeout' => 3600, // the timeout for the underlying process
////                'ffmpeg.threads' => 12,   // the number of threads that FFMpeg should use
////            ]);
////            $duration = $audio->format($this->path)->get('duration');
////            return $duration;
////        } catch (\Exception $e) {
////            throw new Exception($e);
////        }
//    }
}
