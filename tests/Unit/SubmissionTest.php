<?php

namespace Tests\Unit;

use App\Dto\SubmissionDto;

use PHPUnit\Framework\TestCase;

class SubmissionTest extends TestCase
{

    public function test_create_submission()
    {
        $submissionDto = new SubmissionDto([
            'email' => 'test@example.com',
            'name' => 'Test Name',
            'message' => 'Test Message',
        ]);

        $this->assertSame('test@example.com', $submissionDto->getEmail());
        $this->assertSame('Test Name', $submissionDto->getName());
        $this->assertSame('Test Message', $submissionDto->getMessage());
    }

}
