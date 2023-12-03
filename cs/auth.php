<?php

return [
    'sign_in' => 'Přihlásit se',
    'go_to_login' => 'Přejít na přihlášení',
    'failed' => 'Nebyl nalezen účet odpovídající těmto přihlašovacím údajům.',

    'forgot_password' => [
        'label' => 'Zapomněli jste heslo?',
        'label_help' => 'Zadejte e-mailovou adresu vašeho účtu pro zaslání pokynů k obnovení hesla.',
        'button' => 'Obnovit účet',
    ],

    'reset_password' => [
        'button' => 'Obnovit a přihlásit se',
    ],

    'two_factor' => [
        'label' => 'Token 2-faktorové autentizace',
        'label_help' => 'Tento účet vyžaduje druhou vrstvu ověření pro pokračování. Prosím, zadejte kód vygenerovaný vaším zařízením pro dokončení tohoto přihlášení.',
        'checkpoint_failed' => 'Token pro dvoufaktorovou autentizaci byl neplatný.',
    ],

    'throttle' => 'Příliš mnoho pokusů o přihlášení. Prosím, zkuste to znovu za :seconds sekund.',
    'password_requirements' => 'Heslo musí mít alespoň 8 znaků a mělo by být jedinečné pro tuto stránku.',
    '2fa_must_be_enabled' => 'Správce vyžaduje, aby byla pro váš účet povolena dvoufaktorová autentizace pro použití Panelu.',
];
