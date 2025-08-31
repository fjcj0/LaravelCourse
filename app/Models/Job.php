<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Job
{
    public static function all(): array
    {
        return [
            ['id' => 1, 'title' => 'Director', 'salary' => '$50,000'],
            ['id' => 2, 'title' => 'Software Engineer', 'salary' => '$70,000'],
            ['id' => 3, 'title' => 'Project Manager', 'salary' => '$60,000'],
            ['id' => 4, 'title' => 'Graphic Designer', 'salary' => '$40,000'],
            ['id' => 5, 'title' => 'Marketing Specialist', 'salary' => '$45,000'],
        ];
    }

    public static function find(int $id): array|null
    {
        return Arr::first(static::all(), fn($job) => $job['id'] == $id) ?: null;
    }
}