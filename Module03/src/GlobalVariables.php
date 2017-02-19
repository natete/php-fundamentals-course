<?php
/**
 * Created by PhpStorm.
 * User: natete
 * Date: 19/02/17
 * Time: 16:47
 */

$authorName = "William Shakespeare";

function setAuthorName()
{
    global $authorName;
    $authorName = "Charles Dickens";
}

echo $authorName;

setAuthorName();

echo $authorName;
