<?php

use App\Console\Commands\DeleteOldComments;
use App\Models\Post;
use App\Models\User;
use App\Support\DemoDatabase;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Schema;

beforeEach(function () {
    $this->databaseDirectory = storage_path('framework/testing/demo-database-'.uniqid());
    $this->databasePath = "{$this->databaseDirectory}/database.sqlite";

    config(['database.connections.demo' => array_merge(
        config('database.connections.sqlite'),
        ['database' => $this->databasePath],
    )]);

    $this->originalConnection = config('database.default');

    config(['database.default' => 'demo']);
});

afterEach(function () {
    config(['database.default' => $this->originalConnection]);

    DB::purge('demo');

    File::deleteDirectory($this->databaseDirectory);
});

it('creates, migrates and seeds the sqlite database when it is missing', function () {
    expect(file_exists($this->databasePath))->toBeFalse();

    DemoDatabase::ensureExists();

    expect(file_exists($this->databasePath))->toBeTrue();
    expect(Schema::hasTable('comments'))->toBeTrue();
    expect(Schema::hasTable('posts'))->toBeTrue();
    expect(User::where('email', 'guest@example.com')->exists())->toBeTrue();
    expect(User::where('email', 'freek@spatie.be')->exists())->toBeTrue();
    expect(User::where('email', 'taylor@example.com')->exists())->toBeTrue();
    expect(User::count())->toBe(29);
});

it('leaves an existing demo database alone', function () {
    DemoDatabase::ensureExists();

    User::create(['name' => 'Visitor', 'email' => 'visitor@example.com', 'password' => '']);

    DemoDatabase::ensureExists();

    expect(User::count())->toBe(30);
});

it('recreates the database after the disk was wiped', function () {
    DemoDatabase::ensureExists();

    DB::purge('demo');
    File::deleteDirectory($this->databaseDirectory);

    DemoDatabase::ensureExists();

    expect(User::count())->toBe(29);
});

it('rebuilds a database that was only partially created', function () {
    File::ensureDirectoryExists($this->databaseDirectory);
    touch($this->databasePath);

    DemoDatabase::ensureExists();

    expect(Schema::hasTable('comments'))->toBeTrue();
    expect(User::count())->toBe(29);
});

it('creates the database on the first web request', function () {
    $this->withoutMix();

    Http::fake(['spatie.be/api/price/*' => Http::response(status: 500)]);

    expect(file_exists($this->databasePath))->toBeFalse();

    $this->get('/')->assertOk()->assertSee('Feel free to try out this component', false);

    expect(file_exists($this->databasePath))->toBeTrue();
    expect(Post::count())->toBe(1);
});

it('does not need a database for the health check', function () {
    $this->get('up')->assertOk();

    expect(file_exists($this->databasePath))->toBeFalse();
});

it('creates the database before cleaning up old comments', function () {
    $this->artisan(DeleteOldComments::class)->assertSuccessful();

    expect(file_exists($this->databasePath))->toBeTrue();
    expect(User::count())->toBe(29);
});
