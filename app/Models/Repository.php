<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $github_id
 * @property string $url
 * @property string $name
 * @property string|null $description
 * @property int $stars
 * @property int $forks
 * @property string|null $language
 * @property string|null $repository_updated_at
 */
class Repository extends Model
{
    use HasFactory;

    protected $fillable = [
        'github_id',
        'url',
        'name',
        'description',
        'stars',
        'forks',
        'language',
        'repository_updated_at'
    ];
}