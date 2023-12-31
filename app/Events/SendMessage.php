<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class SendMessage implements ShouldBroadcast

{
    use Dispatchable, InteractsWithSockets, SerializesModels;

   
    public function __construct($message)
    {
        $this->message = $message;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return ['user-channel'];
    }

    public function broadcastAs()
    {
        return 'UserEvent';
    }
    /**
    * The event's broadcast name.
    *
    * @return string
    */
    public function broadcastWith()
    {
        
        return ['title'=>'This notification from ItSolutionStuff.com'];
    }
}
