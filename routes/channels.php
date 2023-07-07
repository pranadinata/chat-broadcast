<?php

use Illuminate\Support\Facades\Broadcast;
use App\Events\sendMassage;
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

Broadcast::channel('user-channel', function () {
    return true;
});
Broadcast::event(function () {
    return new sendMassage();
})->toOthers()->onChannel('user-channel');