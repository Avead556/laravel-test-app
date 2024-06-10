<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class SubmissionTest extends TestCase
{
    use RefreshDatabase;

    public function test_submission_endpoint()
    {
        $response = $this->postJson('/api/submit', [
            'name' => 'John Doe',
            'email' => 'john.doe@example.com',
            'message' => 'This is a test message.',
        ]);

        $response->assertStatus(200)
            ->assertJson(['success' => true]);
    }

    public function test_submission_validation()
    {
        $response = $this->postJson('/api/submit', [
            'name' => '',
            'email' => 'email',
            'message' => '',
        ]);

        $response->assertStatus(422)
            ->assertJsonStructure(['errors']);
    }
}
