<?php
/**
 * Created by PhpStorm.
 * User: natete
 * Date: 19/02/17
 * Time: 16:39
 */

function bookByAuthor($authorName, $year = 1910)
{
    echo $year;
    echo "\n";
    echo $authorName;
    echo "\n";
}

bookByAuthor("William Shakespeare");

$authorName = "Paul Auster";
$year = 1947;

bookByAuthor($authorName, $year);