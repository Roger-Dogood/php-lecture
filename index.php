<?php
use Foo\Dice;

require 'Foo/Dice.php';

# Filters the user input collected from our form.
$num_dice = filter_input(INPUT_POST, 'num-die', FILTER_SANITIZE_NUMBER_INT);
#var_dump($num_dice);

# Creates a new instance of our Dice object.
$dice = new Dice($num_dice);

if (isset($_POST['roll'])) {
    $dice->roll();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <title>OOP-Method | Dice</title>
    <link href='http://fonts.googleapis.com/css?family=Ubuntu+Mono:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="wrapper">

        <h1>Our Dice</h1>

        <form class="roll-dice" method="POST">
            <div class="num-die">
                <label for="num-die">Count:</label>
                <input type="text"  id="num-die" name="num-die" size="4" value="<?= $num_dice ?>" required>
            </div>
            <div class="roll-button">
                <button type="submit" name="roll">Roll Dice</button>
            </div>
            <div class="dice-sum">
                <label for="dice-sum">Total:</label>
                <input type="text" id="dice-sum" name="dice-sum" size="4" value="<?= $dice->diceSum(); ?>" disabled>
            </div>
        </form>

        <?= $dice; ?>

    </div>

    <?php # var_dump($dice); ?>

</body>
</html>
