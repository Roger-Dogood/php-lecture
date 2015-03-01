<?php
include 'Foo/Dice.php';

# Creates a new instance of our Dice object.
$dice = new Dice();

if (!empty($_POST['submit']))
{
    $dice->roll();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dice Test</title>
    <link rel="stylesheet" href="style.css" media="screen" charset="utf-8">
</head>
<body>
    <div class="wrapper">

        <h1>My Dice</h1>

        <div class="dice">
            <?php foreach ($dice->getDice() as $die): ?>
            <span><?= $die; ?></span>
            <?php endforeach; ?>
        </div>

        <form class="roll-dice" method="POST">
            <button type="submit" name="submit">Roll Dice</button>
        </form>

    </div>

    <pre><?php var_dump($dice); ?></pre>

</body>
</html>
