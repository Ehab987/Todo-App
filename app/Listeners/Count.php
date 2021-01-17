<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Events\videoView;

class Count
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle(videoView $event)
    {
        if(!session()->has('videoIsVisited')){
            $this -> Counter($event -> video);
        }else{
            return true;
        }
       
    }
    public function Counter($video){

        $video -> viewers = $video -> viewers + 1;
         $video -> save();

        session()->put('videoIsVisited',$video -> id);
    }
}
