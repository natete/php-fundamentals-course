<?php
/**
 * Created by PhpStorm.
 * User: natete
 * Date: 19/02/17
 * Time: 16:41
 */

function bookByAuthor($authorName, $year = 1910)
{
    echo $year;
    echo "\n";
    echo $authorName;
    echo "\n";
}

function getAuthor()
{
    return "Charles Dickens";
}

$authorName = getAuthor();
$year = 1920;

bookByAuthor($authorName, $year);