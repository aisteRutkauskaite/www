<?php
require '../bootloader.php';

$form = [
    'attr' => [
        'method' => 'POST'
    ],
    'fields' => [
        'name' => [
            'label' => 'Name:',
            'type' => 'text',
            'value' => '',
            'validators' => [
                'validate_field_not_empty',
                'validate_field_has_space'
            ],
            'extra' => [
                'attr' => [
                    'placeholder' => 'Vardas ir Pavarde',
                    'class' => 'input-field'
                ]
            ]
        ],
        'age' => [
            'label' => 'Age:',
            'type' => 'number',
            'validators' => [
                'validate_field_not_empty',
                'validate_age'
            ],
            'extra' => [
                'attr' => [
                    'placeholder' => 'Amzius',
                    'class' => 'input-field'
                ]
            ]
        ]
    ],
    'buttons' => [
        'submit' => [
            'title' => 'Ar as normalus?',
            'type' => 'submit',
            'extra' => [
                'attr' => [
                    'class' => 'btn'
                ]
            ]
        ],
        'clear' => [
            'title' => 'Clear',
            'type' => 'reset',
            'extra' => [
                'attr' => [
                    'class' => 'btn'
                ]
            ]
        ]
    ]
];
//$form = [
//    'attr' => [
//        'method' => 'POST',
//    ],
//    'fields' => [
//        'name' => [
//            'label' => 'Vardas ir pavardė:',
//            'type' => 'text',
//            'validators' => [
//                'validate_field_not_empty',
//                'validate_is_there_are_space',
//
//            ],
//            'extra' => [
//                'attr' => [
//                    'placeholder' => 'Vardas ir pavarde',
//                    'class' => 'input-field'
//                ]
//            ]
//        ],
//        'age' => [
//            'label' => 'Metai:',
//            'type' => 'text',
//            'validators' => [
//                'validate_field_not_empty',
//                'validate_if_old_enough'
//            ],
//            'extra' => [
//                'attr' => [
//                    'placeholder' => 'Your age...',
//                    'class' => 'input-field'
//                ]
//            ]
//        ],
////        'password' => [
////            'label' => 'Password:',
////            'type' => 'password',
////            'validators' => [
////                'validate_field_not_empty',
////            ],
////            'extra' => [
////                'attr' => [
////                    'placeholder' => 'Your password...',
////                    'class' => 'input-field'
////                ]
////            ]
////        ]
//    ],
//    'buttons' => [
//        'submit' => [
//            'title' => 'Ar aš normalus',
//            'type' => 'submit',
//            'extra' => [
//                'attr' => [
//                    'class' => 'btn'
//                ]
//            ]
//        ],
////        'clear' => [
////            'title' => 'Clear',
////            'type' => 'reset',
////            'extra' => [
////                'attr' => [
////                    'class' => 'btn'
////                ]
////            ]
////        ]
//    ]
//];

$filtered = get_clean_input($form);

if ($filtered) {
    $success = validate_form($form, $filtered);
    if($success) {
        var_dump('success');
    } else {
        var_dump('not');
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
    <title>Document</title>
</head>

<body>
<?php require ROOT . '/core/templates/form.tpl.php' ?>
</body>
</html>