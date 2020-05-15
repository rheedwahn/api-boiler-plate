<?php

namespace App\Listeners;

use App\Events\NewUser;
use App\Notifications\NewUserNotification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendNewUserEmail
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
     * @param  NewUser  $event
     * @return void
     */
    public function handle(NewUser $event)
    {
        //send email to user
        $front_end_base = \config('app.fronend_url');
        if($front_end_base) {
            $confirmation_link = $front_end_base.'/auth?token='.$event->user->remember_token;
        }else {
            $confirmation_link = route('email.verify', ['token' => $event->user->remember_token]);
        }
        
        $event->user->notify(new NewUserNotification($event->user, $confirmation_link));
    }
}
