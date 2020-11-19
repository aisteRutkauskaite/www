<?php
require '../../bootloader.php';

$form = [
    'attr' => [
        'method' => 'POST'
    ],
    'fields' => [
        'tittle' => [
            'label' => 'Įveskite prekes pavadinimą',
            'type' => 'text',
            'value' => '',
            'validators' => [
                'validate_field_not_empty',
            ],
            'extra' => [
                'attr' => [
                    'placeholder' => 'Prekes pavadinimas',
                    'class' => 'input-field'
                ]
            ]
        ],
        'price' => [
            'label' => 'Kaina',
            'type' => 'number',
            'value' => '',
            'validators' => [
                'validate_field_not_empty',
            ],
            'extra' => [
                'attr' => [
                    'placeholder' => 'Įveskite kainą',
                    'class' => 'input-field'
                ]
            ]
        ],
        'description' => [
            'label' => 'Įveskite aprašymą',
            'type' => 'textarea',
            'validators' => [
                'validate_field_not_empty',
            ],
            'extra' => [
                'attr' => [
                    'placeholder' => 'Aprašymas',
                    'class' => 'input-field'
                ]
            ]
        ],
        'photo' => [
            'label' => 'Nuotrauka',
            'type' => 'text',
            'value' => '',
            'validators' => [
                'validate_field_not_empty',
            ],
            'extra' => [
                'attr' => [
                    'placeholder' => 'URL nuotraukos',
                    'class' => 'input-field'
                ]
            ]
        ],
    ],
    'buttons' => [
        'submit' => [
            'title' => 'Įdėk prekę',
            'type' => 'submit',
            'extra' => [
                'attr' => [
                    'class' => 'btn'
                ]
            ]
        ],
    ],
    'clear' => [
        'title' => 'Clear',
        'type' => 'reset',
        'extra' => [
            'attr' => [
                'class' => 'btn'
            ]
        ]
    ],
    'validators' => [
    ]
];

$nav = nav();

$filtered = get_clean_input($form);
if ($filtered) {
    $success = validate_form($form, (array)$filtered);
    if ($success) {
        $shop_stuff = file_to_array(ROOT . '/app/data/db_shop.json');
        $shop_stuff[] = $filtered;
        array_to_file($shop_stuff, ROOT . '/app/data/db_shop.json');
    } else {
        header("location: /login.php");
    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../style.css">
    <title>ADD</title>
</head>
<body>
<header>
    <?php require ROOT . '/core/templates/navigation.tpl.php'; ?>
</header>
<main>
    <?php require ROOT . '/core/templates/form.tpl.php'; ?>
</main>
</body>
</html>