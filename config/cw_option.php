<?php

return [
    'layout' => env('CW_LAYOUT', 'meridien::layouts.app'),
    'views' => env('CW_VIEWS', 'option::'),
    'types' => [
        "text" => "Texto",
        "checkbox" => "Checkbox",
        "email" => "E-mail",
        "textarea" => "Texto",
    ],
    'models' => [
        'Metric',
        'Metric::multiple',
        'Status',
        'Status::multiple',
        'Task',
        'Task::multiple',
        'TaskType',
        'TaskType::multiple',
        'User',
        'User::multiple'
    ],
];
