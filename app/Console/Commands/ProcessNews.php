<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Jobs\ClearCache;

class ProcessNews extends Command
{
    protected $signature = 'news:process';
    protected $description = 'Processes news articles';

    public function handle()
    {

        dispatch(new ClearCache());

        $this->info('отправлено');
    }
}
