<?php

namespace App\Listeners;

use App\Events\NewLocationAddedSend;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendLocationNotification
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(NewLocationAddedSend $event): void
    {
        //
    }
}
