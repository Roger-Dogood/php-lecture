<?php
use Foo\Dice;

require 'Foo/Dice.php';

# Creates a new instance of our Dice object.
$dice = new Dice(6);

if (isset($_POST['roll'])) {
    $dice->roll();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>OOP-Method | Dice</title>
    <link href='http://fonts.googleapis.com/css?family=Ubuntu+Mono:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="wrapper">

        <h1>My Dice</h1>

        <form class="roll-dice" method="POST">
            <button type="submit" name="roll">Roll Dice</button>
            <span class="dice-sum"><?= $dice->diceSum(); ?></span>
        </form>

        <?= $dice; ?>

    </div>

    <?php var_dump($dice); ?>

</body>
</html>
