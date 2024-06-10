<?php

namespace App\Jobs;

use App\Dto\SubmissionDto;
use App\Events\SubmissionSaved;
use App\Repository\SubmissionRepository;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;

class SubmissionCreatorJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public function __construct(private readonly SubmissionDto $submissionDto)
    {

    }

    public function handle(SubmissionRepository $submissionRepository): void
    {
        try {
            $submission = $submissionRepository->create($this->submissionDto);

            event(new SubmissionSaved($submission));
        } catch (\Throwable $e) {
            Log::error('[SubmissionCreatorJob] ' . $e->getMessage());
        }
    }
}
