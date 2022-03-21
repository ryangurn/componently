<?php
// config for ryangurn/Componently
return [
    /**
     * Currently supported: leaflet, google
     */
    'map_driver' => env('COMPONENTLY_MAP_DRIVER', 'leaflet'),

    /**
     * Access tokens for either mapbox or Google Maps
     */
    'mapbox' => [
        'access_token' => env('MAPS_MAPBOX_ACCESS_TOKEN', null),
    ],
    'google_maps' => [
        'access_token' => env('MAPS_GOOGLE_MAPS_ACCESS_TOKEN', null)
    ]
];
