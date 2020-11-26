<?php
require '../bootloader.php';

if (is_logged_in()) {
    header("Location:login.php");
    exit();
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
                'validate_user_unique'
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
        'password_repeat' => [
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
            'title' => 'Registruotis',
            'type' => 'submit',
            'extra' => [
                'attr' => [
                    'class' => 'btn'
                ]
            ]
        ],
    ],
    'validators' => [
        'validate_fields_match' => [
            'password',
            'password_repeat'
        ],
    ]
];

$filtered = get_clean_input($form);

if ($filtered) {
    $success = validate_form($form, $filtered);
    if ($success) {
        unset($filtered['password_repeat']);
//        $file = file_to_array(ROOT . '/app/data/db.json');
//        $file[] = $filtered;
//
//        $input_from_json=$fileDB->getData();
//        $input_from_json['users'][] = $filtered;
//        $fileDB->setData($input_from_json);
        $fileDB = new FileDB(DB_FILE);
        $fileDB->load();
        $fileDB->createTable('users');
        $fileDB->insertRow('users', $filtered);
        $fileDB->save();
        header("location: /login.php");
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
    <link rel="stylesheet" href="media/style.css">
    <title>Forms</title>
</head>
<body>
<header>
    <?php require ROOT . '/core/templates/navigation.tpl.php'; ?>
</header>
<main>
    <h1 class="register_tittle">Reginkis</h1>
    <?php require ROOT . '/core/templates/form.tpl.php'; ?>
</main>
</body>
</html>