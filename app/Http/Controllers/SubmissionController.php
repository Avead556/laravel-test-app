<?php

namespace App\Http\Controllers;

use App\Dto\SubmissionDto;
use App\Http\Requests\CreateSubmissionRequest;
use App\Jobs\SubmissionCreatorJob;
use Illuminate\Http\JsonResponse;

class SubmissionController extends Controller
{
    public function submit(CreateSubmissionRequest $request): JsonResponse
    {
        SubmissionCreatorJob::dispatch(new SubmissionDto($request->validated()));

        return response()->json(['success' => true]);
    }
}
