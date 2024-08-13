<?php

namespace App\Events;

use BeyondCode\LaravelWebSockets\WebSockets\Channels\PrivateChannel;
use Illuminate\Broadcasting\Channel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Queue\SerializesModels;

class RealTimeMessage implements ShouldBroadcast
{
    use SerializesModels;

    public string $message;

    public function __construct(string $message)
    {
        $this->message = $message;
    }

    //private Channel
    public function broadcastOn()
    {
        return new PrivateChannel('events');
    }

    //public Channel
    // public function broadcastOn(): Channel
    // {
    //     return new Channel('events');
    // }
}

