<?php

namespace App\Dto;

readonly class SubmissionDto
{
    public function __construct(private array $data)
    {
    }

    public function getName(): string
    {
        return $this->data['name'] ?? '';
    }

    public function getEmail(): string
    {
        return $this->data['email'] ?? '';
    }

    public function getMessage(): string
    {
        return $this->data['message'] ?? '';
    }
}
