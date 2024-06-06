<?php

return [
    // Other config options...

    'fields' => [
        'email' => [
            'type' => 'email',
            'label' => 'Email',
            'placeholder' => 'Email',
            'required' => false, // Set this to false to make the email field nullable
            'rules' => 'nullable|email|max:255',
        ],
        // Other fields...
    ]
];
