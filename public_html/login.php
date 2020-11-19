<?php
require '../bootloader.php';

if (is_logged_in()) {
    header("Location:index.php");
}

$form = [
    'attr' => [
        'method' => 'POST'
    ],
    'fields' => [
        'email' => [
            'label' => 'Įveskite email',
            'type' => 'email',
            'value' => '',
            'validators' => [
                'validate_field_not_empty',
                'validate_email'
            ],
            'extra' => [
                'attr' => [
                    'placeholder' => '@mail',
                    'class' => 'input-field'
                ]
            ]
        ],
        'password' => [
            'label' => 'Įveskite slaptažodį',
            'type' => 'password',
            'value' => '',
            'validators' => [
                'validate_field_not_empty',
            ],
            'extra' => [
                'attr' => [
                    'placeholder' => 'password',
                    'class' => 'input-field'
                ]
            ]
        ],
    ],
    'buttons' => [
        'submit' => [
            'title' => 'Loginkis',
            'type' => 'submit',
            'extra' => [
                'attr' => [
                    'class' => 'btn'
                ]
            ]
        ],
    ],
    'validators' => [
        'validate_login' => [
            'email',
            'password'
        ]
    ]
];

$filtered = get_clean_input($form);

if ($filtered) {
    $success = validate_form($form, $filtered);

    if ($success) {
        $_SESSION['email'] = $filtered['email'];
        $_SESSION['password'] = $filtered['password'];
        $p = 'Sveikinu prisiloginus';
        header("Location:/admin/add.php");
    } else {
        $p = 'Eik regintis';
    }
}

$nav = nav();

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Forms</title>
</head>
<body>
<main>
    <header>
        <?php require ROOT . '/core/templates/navigation.tpl.php'; ?>
    </header>
    <h1 class="log_in_tittle">Loginkis</h1>
    <?php require ROOT . '/core/templates/form.tpl.php'; ?>
    <?php if (isset ($p)): ?>
        <p><?php print $p; ?></p>
    <?php endif; ?>
</main>
</body>
</html>