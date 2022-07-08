<?php
// config for Hellomayaagency/EnsoBugherd
return [

    /**
     * Whether to add the Bugherd JavaScript snippet to the page
     */
    'enabled' => env('BUGHERD_ENABLED', env('APP_ENV') !== 'production'),

    /**
     * Bugherd API key
     */
    'key' => env('BUGHERD_KEY'),

];
