<?php

namespace App\Listeners;

use App\Events\NewRegisteredUserEvent;
use Illuminate\Auth\Events\Registered;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class MonitorListener
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
     * @param  NewRegisteredUserEvent  $event
     * @return void
     */
    public function handle(Registered $event)
    {
//        dump("monitor listener executed!");
    }
}
