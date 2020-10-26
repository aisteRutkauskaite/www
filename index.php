<?php
$police_report = [
    [
        'subject' => 'Minde',
        'reason' => 'Was not at the party',
        'amount' => rand(-20, 50),
    ],
    [
        'subject' => 'Sigutis',
        'reason' => 'Steal computer',
        'amount' => rand(-20, 50),
    ],
    [
        'subject' => 'Agnė',
        'reason' => 'Go somewhere on friday too early',
        'amount' => rand(-20, 50),
    ]
];

foreach ($police_report as $index => $report) {
    $police_report[$index]['warning_only'] = rand(0, 1) ? true : false;
    if ($report['amount'] < 0) {
        $police_report[$index]['css_class'] = 'expense';
    } else {
        $police_report[$index]['css_class'] = 'income';
    }
}

var_dump($police_report);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bloopers</title>
</head>
<body>
</body>
</html>