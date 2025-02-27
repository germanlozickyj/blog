<?php

namespace App\Jobs;

use App\Services\GithubService;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;

class GithubRepositoriesJob implements ShouldQueue
{
    use Queueable;

    public function handle(): void
    {
        (new GithubService())->updateRepositories();
    }
}
