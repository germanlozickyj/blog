<?php

use Illuminate\Support\Facades\Schedule;

Schedule::call(function () {
    \App\Jobs\GithubRepositoriesJob::dispatch();
})->daily();