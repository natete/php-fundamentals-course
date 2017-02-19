<?php
/**
 * Created by PhpStorm.
 * User: natete
 * Date: 19/02/17
 * Time: 16:45
 */

$authorName = "William Shakespeare";

function setAuthorName()
{
    $authorName = "Charles Dickens";
}

echo $authorName;

setAuthorName();

echo $authorName;
