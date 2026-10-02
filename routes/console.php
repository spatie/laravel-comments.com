<?php

use App\Console\Commands\DeleteOldComments;
use Illuminate\Support\Facades\Schedule;

Schedule::command(DeleteOldComments::class)->hourly();
