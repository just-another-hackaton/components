<?php

namespace Jah\Components;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Jah\Components\Commands\ComponentsCommand;

class ComponentsServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('components')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_components_table')
            ->hasCommand(ComponentsCommand::class);
    }
}
