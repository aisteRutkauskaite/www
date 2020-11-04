<?php
var_dump($_POST);
$email = isset($_POST['email']) ? ($_POST['email']) : '';
$form = [
    'email' => [
        'label' => 'Email:',
        'type' => 'text',
        'placeholder' => 'Aurimas:'
    ],
    'password' => [
        'label' => 'Password:',
        'type' => 'password',
        'placeholder' => 'Your password'
    ]
];

function get_clean_input($form) {
    $parameters = [];
    foreach ($form as $index => $item) {
        $parameters[$index] = FILTER_SANITIZE_SPECIAL_CHARS;
    }
    return filter_input_array(INPUT_POST, $parameters);
}

var_dump( get_clean_input($form));
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Functions</title>
</head>
<style>
    form {
        display: flex;
        flex-direction: column;
    }

    .button {
        width: 100px;
    }
</style>
<body>
<main>

    <form method=post>
        <?php foreach ($form as $input_name => $input): ?>
            <label for="">
                <?php print $input['label']; ?>
                <input type="<?php print $input['type']; ?> name="<?php print $input_name; ?> "
                placeholder="<?php print $input['placeholder']; ?>">
            </label>
        <?php endforeach; ?>
        <button name="button">Log in</button>
    </form>

</main>
</body>
</html>
