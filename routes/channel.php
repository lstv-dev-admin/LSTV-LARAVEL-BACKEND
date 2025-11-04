<?php

use Illuminate\Support\Facades\Broadcast;

/*
|--------------------------------------------------------------------------
| Broadcast Channels
|--------------------------------------------------------------------------
|
| Here you may register all of the event broadcasting channels that your
| application supports. The given channel authorization callbacks are
| used to check if an authenticated user can listen to the channel.
|
*/



Broadcast::channel('websocket-loader-{userId}', function ($user, $userId) {
    // $user variable is kung sino naka log in
    // $userId variable is the user id from the JS
    return $user->user_id ===  $userId;
});
