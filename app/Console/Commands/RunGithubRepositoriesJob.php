<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class RunGithubRepositoriesJob extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:run-github-repositories-job';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        \App\Jobs\GithubRepositoriesJob::dispatch();
    }
}
