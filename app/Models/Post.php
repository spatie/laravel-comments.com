<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Prunable;
use Spatie\Comments\Models\Concerns\HasComments;

class Post extends Model
{
    use HasFactory;
    use HasComments;
    use Prunable;

    public $guarded = [];

    public static function createOrFindForSession(): self
    {
        return Post::query()->firstOrCreate(['session_id' => session()->getId()]);
    }

    public function commentableName(): string
    {
        return $this->name;
    }

    public function commentUrl(): string
    {
        return 'myUrl';
    }

    public function prunable()
    {
        return static::where('created_at', '<=', now()->subHour());
    }
}
