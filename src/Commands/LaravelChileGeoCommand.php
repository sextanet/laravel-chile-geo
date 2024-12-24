<?php

namespace SextaNet\LaravelChileGeo\Commands;

use Illuminate\Console\Command;

class LaravelChileGeoCommand extends Command
{
    public $signature = 'laravel-chile-geo';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
