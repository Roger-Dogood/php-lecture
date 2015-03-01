<?php
# Procedural
// $num_generator = mt_rand(1, 6);
$dice = array();

if (!empty($_POST['submit']))
{
    for ($i = 0; $i < 6; $i++)
    {
      $dice[] = mt_rand(1, 6);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Procedural Dice</title>
    <link rel="stylesheet" href="style.css" media="screen" charset="utf-8">
</head>
<body>
    <div class="wrapper">
        <h1>My Dice</h1>
        <div class="dice">
            <?php foreach ($dice as $die): ?>
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
