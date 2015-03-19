<?php
use Foo\Dice;

require_once 'Foo/Dice.php';

# Creates a new instance of our Dice object.
$dice = new Dice(56);

if (!empty($_POST['submit'])) {
    $dice->roll();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>OOP-Method | Dice</title>
    <link rel="stylesheet" href="style.css" media="screen" charset="utf-8">
</head>
<body>
    <div class="wrapper">

        <h1>My Dice</h1>

        <?= $dice ?>

        <form class="roll-dice" method="POST">
            <button type="submit" name="submit">Roll Dice</button>
        </form>

    </div>

    <pre><?php var_dump($dice); ?></pre>

</body>
</html>
