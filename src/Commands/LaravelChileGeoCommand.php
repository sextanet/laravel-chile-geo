<?php

namespace SextaNet\LaravelChileGeo\Commands;

use Illuminate\Console\Command;
use SextaNet\LaravelChileGeo\CheckTablesStructure;
use SextaNet\LaravelChileGeo\Database\Seeders\ChileGeoSeeder;

class LaravelChileGeoCommand extends Command
{
    public $signature = 'chile-geo:seed';

    public $description = 'Seed Chile Geo data';

    public function handle(): int
    {
        $this->comment('Seeding Chile Geo data...');

        try {
            (new CheckTablesStructure)->perform();
            $this->call(ChileGeoSeeder::class);

            return self::SUCCESS;
        } catch (\Exception $e) {
            $this->error($e->getMessage());

            return self::FAILURE;
        }
    }
}
