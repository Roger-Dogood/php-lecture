<?php
# Procedural
$dice = array();

if (isset($_POST['roll']))
{
    for ($i = 0; $i < 12; $i++)
    {
      $dice[] = mt_rand(1, 6);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">    
    <meta name=viewport content="width=device-width, initial-scale=1">
    <title>Procedural-Method | Dice</title>
    <link href='http://fonts.googleapis.com/css?family=Ubuntu+Mono:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="wrapper">

        <h1>Our Dice</h1>

        <form class="roll-dice" method="POST">
            <div class="roll-button">
                <button type="submit" name="roll">Roll Dice</button>
            </div>
        </form>

        <div class="dice">
            <?php foreach ($dice as $die): ?>
            <span><?= $die; ?></span>
            <?php endforeach; ?>
        </div>

    </div>

    <pre><?php var_dump($dice); ?></pre>

</body>
</html>
