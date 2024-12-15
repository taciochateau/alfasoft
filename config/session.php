<?php

return [
    'driver' => env('SESSION_DRIVER', 'file'),
    'lifetime' => 120,
    'encrypt' => false,
    'files' => storage_path('framework/sessions'),
];
