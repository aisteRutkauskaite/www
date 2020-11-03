<?php
$counter = 0;



    if (isset($_POST['count'])) {
    $counter= (int)$_POST['count'] + 1 ;
    }


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
        <input type="submit" name="count" class="button" value="<?php print $counter; ?>"/>
        <input type="image"
               src="https://lh3.googleusercontent.com/proxy/sI_EH0NKV-5lgVjSJQ0ZdnFF7upXpFy01mWhOS08y504Lm98N-sVHgZD1e7jMNqgg48JItIELV33KfylOwrTTLI9uGTCvpXFpqa8chPPZ2h4Cbul-0Ixm7LmWOnsz773UQ"
               width="<?php print $counter *10; ?>" height="<?php print $counter*10; ?>">
    </form>
    <?php
    ?>
</main>
</body>
</html>
