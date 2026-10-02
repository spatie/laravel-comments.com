<?php

namespace App\Support;

use Database\Seeders\DatabaseSeeder;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class DemoDatabase
{
    public static function ensureExists(): void
    {
        $connection = config('database.default');

        if (config("database.connections.{$connection}.driver") !== 'sqlite') {
            return;
        }

        $path = config("database.connections.{$connection}.database");

        if ($path === ':memory:') {
            return;
        }

        if (static::isReady($path)) {
            return;
        }

        File::ensureDirectoryExists(dirname($path));

        $lock = fopen("{$path}.lock", 'c');

        flock($lock, LOCK_EX);

        try {
            if (static::isReady($path)) {
                return;
            }

            File::delete([$path, "{$path}-wal", "{$path}-shm"]);

            touch($path);

            DB::purge($connection);

            Artisan::call('migrate', ['--force' => true]);
            Artisan::call('db:seed', ['--class' => DatabaseSeeder::class, '--force' => true]);

            touch("{$path}.ready");
        } finally {
            flock($lock, LOCK_UN);
            fclose($lock);
        }
    }

    protected static function isReady(string $path): bool
    {
        if (! file_exists($path)) {
            return false;
        }

        return file_exists("{$path}.ready");
    }
}
