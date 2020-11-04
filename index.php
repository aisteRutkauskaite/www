<?php
$email = isset($_POST['email']) ? $_POST['email'] : '';
$form = [
    'email' => [
        'label' => 'Email',
        'type' => 'text',
        'placeholder' => 'aiste@gmail.com'
    ],
    'password' => [
        'label' => 'Password',
        'type' => 'password',
        'placeholder' => 'Your password...'
    ]
];
function html_attr(array $attr): string {
    $string = '';
    foreach ($attr as $name => $value) {
        $string .= "$name=\"$value\" ";
    }
    return $string;
}
var_dump(html_attr($form['email']));
function get_clean_input($form) {
    $parameters = [];
    foreach ($form as $index => $input) {
        $parameters[$index] = FILTER_SANITIZE_SPECIAL_CHARS;
    }
    return filter_input_array(INPUT_POST, $parameters);
}
$svarus_inputai = get_clean_input($form);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Forma</title>
</head>
<body>
<main>
    <form method="post">
        <?php foreach ($form as $input_name => $input): ?>
            <label><?php print $input['label']; ?>
                <input <?php print html_attr($input); ?>>
            </label>
        <?php endforeach; ?>
        <button name="button">Login</button>
    </form>
</main>
</body>
</html>