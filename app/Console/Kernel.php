<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use App\Console\Commands\ProcessNews;

class Kernel extends ConsoleKernel
{
    protected $commands = [
        ProcessNews::class,
    ];
    protected function schedule(Schedule $schedule)
    {

        $schedule->command('news:process')
            ->daily();
    }

    protected function commands(): void
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
