<?php

namespace App\Http\Controllers;

use App\Services\GithubService;

class HomeController extends Controller
{
    public function __invoke() {
        $repositories = (
            new GithubService()
        )->getOrderedRepositories()
        ->get();

        return view('home', [
            'repositories' => $repositories
        ]);
    }
}
