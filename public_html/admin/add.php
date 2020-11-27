<?php
require '../../bootloader.php';

$form = [
    'attr' => [
        'method' => 'POST'
    ],
    'fields' => [
        'coordinateX' => [
            'label' => 'kordinate X',
            'type' => 'number',
            'value' => '',
            'validators' => [
                'validate_field_not_empty',
                'validate_field_range' => [
                    'min' => 0,
                    'max' => 490
                ]
            ],
            'extra' => [
                'attr' => [
                    'placeholder' => 'kordinate X',
                    'class' => 'input-field'
                ]
            ]
        ],
        'coordinateY' => [
            'label' => 'kordinate Y',
            'type' => 'number',
            'value' => '',
            'validators' => [
                'validate_field_not_empty',
                'validate_field_range' => [
                    'min' => 0,
                    'max' => 490
                ]
            ],
            'extra' => [
                'attr' => [
                    'placeholder' => 'kordinate Y',
                    'class' => 'input-field'
                ]
            ]
        ],

        'color' => [
            'label' => 'Pasirinkite spalva',
            'type' => 'select',
            'options' => [
                'red' => 'raudona',
                'green' => 'žalia',
                'blue' => 'mėlyna',
            ],
            'value' => 'red',
            'validators' => [
                'validate_field_not_empty',
            ],
            'extra' => [
                'attr' => [
                    'class' => 'input-field'
                ]
            ]
        ],

    ],
    'buttons' => [
        'submit' => [
            'title' => 'Įdėk POOP',
            'type' => 'submit',
            'extra' => [
                'attr' => [
                    'class' => 'btn'
                ]
            ]
        ],
    ],
    'validators' => [
        'validate_coordinates_pixels' => [
            'coordinateX',
            'coordinateY'
        ],
    ]
];

$nav = nav();

$filtered = get_clean_input($form);

if (is_logged_in()) {
    $message = 'Sukurk POOP!';
    if ($filtered) {
        $success = validate_form($form, (array)$filtered);
        if ($success) {
            $fileDB = new FileDB(DB_FILE);
            $fileDB->load();
            $fileDB->createTable('coordinates');
            $fileDB->insertRow('coordinates', $filtered + ['email' => $_SESSION['email']]);
            $fileDB->save();
            $message = 'POOP sukurtas';
        }
    }
} else {
    header("Location:/login.php");
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../media/style.css">
    <title>ADD</title>
</head>
<body>
<header>
    <?php require ROOT . '/core/templates/navigation.tpl.php'; ?>
</header>
<main>
    <p class="index_tittle"><?php print $message; ?></p>
    <?php require ROOT . '/core/templates/form.tpl.php'; ?>
</main>
</body>
</html>