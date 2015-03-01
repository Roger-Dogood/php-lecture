<?php
require_once 'Dice.php';

$dice = new Dice();

if (!empty($_POST['submit']))
{
    $dice->roll();
}
