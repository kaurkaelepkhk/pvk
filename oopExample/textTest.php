<?php
/**
 * Created by PhpStorm.
 * User: anna.karutina
 * Date: 06.02.2019
 * Time: 9:16
 */
require_once 'Text.php';

$hello = new Text();

$hello->setText('Hello Word!');

echo '<pre>';
print_r($hello);