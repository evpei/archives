<?php

namespace Evpei\Archiver;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Evpei\Archiver\Commands\ArchiverCommand;

class ArchiverServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('archiver')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_archiver_table')
            ->hasCommand(ArchiverCommand::class);
    }
}
