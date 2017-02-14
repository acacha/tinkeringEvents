<?php

namespace App\Listeners;

use App\Events\ProvaEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class ProvaListener
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
     * @param  ProvaEvent  $event
     * @return void
     */
    public function handle(ProvaEvent $event)
    {
        //
    }
}
