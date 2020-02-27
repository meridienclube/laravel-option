<?php

return [
    'layout' => env('CW_ADMIN_LAYOUT', 'layouts.app'),
    'views' => env('CW_ADMIN_VIEWS', ''),

    'types' => [
        "text" => "Texto",
        "checkbox" => "Checkbox",
        "email" => "E-mail",
        "textarea" => "Texto",
    ],
    'models' => [
        'User',
    ],
];
