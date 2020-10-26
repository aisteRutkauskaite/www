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

foreach ($police_report as $key => $report) {
    $warning = rand(0, 1);
    $police_report[$key]['warning_only'] = $warning ? true : false;
    $police_report[$key]['css_class'] = $report['amount'] >= 0 ? 'income' : 'expense';
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
<h1>Policijos išrašas</h1>
<ul>
    <?php foreach ($police_report as $report): ?>
        <li class="<?php print $report['css_class']; ?>">
            <?php print $report['subject'] . ' (' . $report['reason'] . ') - '; ?>
            <?php $report['warning_only'] ? print 'ispejimas' : print $report['amount']; ?>

        </li>
    <?php endforeach; ?>
</ul>

</body>
</html>