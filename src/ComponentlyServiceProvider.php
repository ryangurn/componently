<?php

namespace Ryangurn\Componently;

use Illuminate\Support\Facades\Blade;
use Ryangurn\Componently\View\Components\maps\Map;
use Ryangurn\Componently\View\Components\modals\Input;
use Ryangurn\Componently\View\Components\modals\InputContainer;
use Ryangurn\Componently\View\Components\Modals\Modal;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

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
            ->hasViewComponents('componently', [
                // modals
                Input::class,
                InputContainer::class,
                Modal::class,

            ])
            ->hasConfigFile('../config/componently.php');
    }

    public function boot()
    {
        parent::boot();

        Blade::directive('mapStyle', function () {
            return '<link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin=""/>';
        });

        Blade::directive('mapScript', function() {
            return '<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>';
        });

        Blade::directive('mapUrl', function() {
            $url = '';
            switch (config('componently.map_driver'))
            {
                case 'mapbox':
                    $url = "let url = 'https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=".config('maps.mapbox.access_token', null)."';";
                    break;
                case 'openstreetmap':
                    $url = "let url = 'https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png';";
                    break;
                default:
                    $url = "let url = '".$tileHost."';";
                    break;
            }

            return '<script>'.$url.'</script>';
        });
    }
}
