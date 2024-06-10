<?php

namespace App\Events;

use App\Models\Submission;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class SubmissionSaved
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public function __construct(public readonly Submission $submission)
    {

    }

    public function broadcastOn(): array
    {
        return [
            new PrivateChannel('submissions'),
        ];
    }
}
