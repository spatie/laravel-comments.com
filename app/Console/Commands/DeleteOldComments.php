<?php

namespace App\Console\Commands;

use App\Models\Post;
use Illuminate\Console\Command;
use Spatie\Comments\Models\Comment;

class DeleteOldComments extends Command
{
    protected $signature = 'delete-old-comments-and-posts';

    public function handle()
    {
        Comment::query()->where('created_at','<=', now()->subHour())->delete();
        Post::query()->where('created_at','<=', now()->subHour())->delete();

        $this->info('All done!');
    }
}
