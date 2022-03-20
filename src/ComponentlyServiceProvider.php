<?php

namespace Ryangurn\Componently;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Ryangurn\Componently\Commands\ComponentlyCommand;

class ComponentlyServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('componently')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_componently_table')
            ->hasCommand(ComponentlyCommand::class);
    }
}
