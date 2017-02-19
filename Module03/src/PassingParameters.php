<?php
/**
 * Created by PhpStorm.
 * User: natete
 * Date: 19/02/17
 * Time: 16:35
 */

function bookByAuthor($authorName, $year)
{
    echo $year;
    echo "\n";
    echo $authorName;
    echo "\n";
}

bookByAuthor("William Shakespeare", 1910);

$authorName = "Paul Auster";
$year = 1964;

bookByAuthor($authorName, $year);