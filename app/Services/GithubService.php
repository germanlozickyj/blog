<?php

namespace App\Services;

use App\Models\Repository;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Database\Eloquent\Builder;
use Exception;

class GithubService {
    public function updateRepositories() : Repository | bool
    {
        try {
            $url = config('github.api.url');
            $token = config('github.api.token');
            
            $response = Http::withHeaders([
                'Accept' => 'application/vnd.github+json',
                'Authorization' => "token $token",
            ])->get("$url/user/repos", [
                'sort' => 'updated'
            ]);

            if(! $response->successful()) {
                return false;
            }
        
            $repositories = collect($response->json())->map(function ($repository) {
                return [
                    'github_id' => $repository['id'],
                    'url' => $repository['html_url'],
                    'name' => $repository['name'],
                    'description' => $repository['description'],
                    'stars' => $repository['stargazers_count'],
                    'forks' => $repository['forks_count'],
                    'language' => $repository['language'],
                    'repository_updated_at' => $repository['updated_at'],
                ];
            })->toArray();
            
            return Repository::upsert(
                $repositories, 
                ['github_id'], 
                [
                    'url', 
                    'name', 
                    'description', 
                    'stars', 
                    'forks', 
                    'language', 
                    'repository_updated_at'
                ]
            );
        } catch(Exception $error) {
            Log::error('ERROR [GitHubService] [UpdateRepositories]', [
                'message' => $error->getMessage(),
                'at' => $error->getLine()
            ]);

            return false;
        }

    }

    public function getOrderedRepositories(
        string $order_column = 'repository_updated_at',
        string $direction = 'desc'
    ) : Builder
    {
        return Repository::select([
            'url',
            'name',
            'description',
            'stars',
            'forks',
            'language',
            'repository_updated_at'
        ])->orderBy(
            $order_column, 
            $direction
        );
    }

}