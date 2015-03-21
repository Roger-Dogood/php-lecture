<?php
use Foo\Dice;

require 'Foo/Dice.php';

# Filters the user input collected from our form.
$num__dice = filter_input(INPUT_POST, 'roll__count', FILTER_SANITIZE_NUMBER_INT);
#var_dump($num_dice);

# Creates a new instance of our Dice object.
$dice = new Dice($num__dice);

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
    <link rel="stylesheet" type="text/css" href="/style.css">
</head>
<body>
    <div class="wrapper">

        <h1>Our Dice</h1>

        <form class="roll" method="POST">

            <div class="roll__count">
                <label for="roll__count" class="roll__count-label">Count:</label> <!-- /.roll__count-label -->
                <input type="number" id="roll__count" name="roll__count" class="roll__count-input" value="<?= $num__dice; ?>" min="1" autocomplete="off" required> <!-- /.roll__count-input -->
            </div> <!-- /.roll__count -->

            <div class="roll__dice">
                <button type="submit" name="roll" class="roll__dice-button">Roll Dice</button> <!-- /.roll__dice-button -->
            </div> <!-- /.roll__dice -->

            <div class="roll__sum">
                <label for="roll__sum" class="roll__sum-label">Total:</label> <!-- /.roll__sum-label -->
                <input type="text" id="roll__sum" name="roll__sum" class="roll__sum-input" size="4" value="<?= $dice->diceSum(); ?>" disabled> <!-- /.roll__sum-input -->
            </div> <!-- /.roll__sum -->

        </form> <!-- /.roll -->

        <?= $dice; ?>

    </div> <!-- /.wrapper -->

    <?php # var_dump($dice); ?>

</body>
</html>
