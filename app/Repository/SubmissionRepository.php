<?php

namespace App\Repository;

use App\Dto\SubmissionDto;
use App\Models\Submission;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class SubmissionRepository
{
    public function create(SubmissionDto $data): Builder|Model|Submission
    {
        return Submission::query()->create([
            'email' => $data->getEmail(),
            'name' => $data->getName(),
            'message' => $data->getMessage(),
        ]);
    }
}
