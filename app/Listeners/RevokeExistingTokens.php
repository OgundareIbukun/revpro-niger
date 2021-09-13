<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\User;
// use App\Listeners\RevokeExistingTokens as RevokeToken;
class RevokeExistingTokens
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
    public function handle($event)
    {
        //

        $user = User::find($event->userId);

//        $user->tokens()->offset(1)->get()->map(function ($token) {
//            $token->revoke();
//        });

        $user->tokens()->limit(PHP_INT_MAX)->offset(1)->get()->map(function ($token) {
            $token->revoke();
        });
    }
}
