<?php

namespace SextaNet\LaravelChileGeo;

use SextaNet\LaravelChileGeo\Commands\LaravelChileGeoCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LaravelChileGeoServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-chile-geo')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel_chile_geo_table')
            ->hasCommand(LaravelChileGeoCommand::class);
    }
}
