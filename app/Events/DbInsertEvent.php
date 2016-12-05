<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class DbInsertEvent
{
    use InteractsWithSockets, SerializesModels;

    public $dbInsertEvent;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($createdBy)
    {
        $this->dbInsertEvent = $createdBy;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('channel-name');
    }
}
