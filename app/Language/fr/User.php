<?php

return [
    'email' => [
        'is_unique' => 'Cette adresse mail est déjà prise.'
    ],
    'password_confirmation' => [
        'required' => 'Veuiller confirmer votre mot de passe.',
        'matches' => 'Veuiller entrer le même mot de passe.'
    ]
];