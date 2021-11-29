<?php

namespace App\Listeners;

use Italia\SPIDAuth\Events\LoginEvent;
use Italia\SPIDAuth\Events\LogoutEvent;
use Log;

class SPIDEventSubscriber
{
    /**
     * Handle SPID login events.
     */
    public function onSPIDLogin($event) {
        Log::info('SPID User ' . $event->getSPIDUser()->name . ' ' . $event->getSPIDUser()->familyName .' logged in using ' . $event->getIdp() . ' Identity Provider.');
    }

    /**
     * Handle SPID logout events.
     */
    public function onSPIDLogout($event) {
        Log::info('SPID User ' . $event->getSPIDUser()->name . ' ' . $event->getSPIDUser()->familyName . ' logged out using ' . $event->getIdp() . ' Identity Provider.');
    }

    /**
     * Register the listeners for the subscriber.
     *
     * @param  Illuminate\Events\Dispatcher $events
     */
    public function subscribe($events)
    {
        $events->listen(
            'Italia\SPIDAuth\Events\LoginEvent',
            'App\Listeners\SPIDEventSubscriber@onSPIDLogin'
        );

        $events->listen(
            'Italia\SPIDAuth\Events\LogoutEvent',
            'App\Listeners\SPIDEventSubscriber@onSPIDLogout'
        );
    }
}
