<?php

return [
    // Other config options...

    'fields' => [
        'email' => [
            'type' => 'email',
            'label' => 'Email',
            'placeholder' => 'Email',
            'required' => false,
            'rules' => 'nullable|email|max:255',
        ],
    ]
];
