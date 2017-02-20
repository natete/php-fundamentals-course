<?php
/**
 * Created by PhpStorm.
 * User: natete
 * Date: 20/02/17
 * Time: 01:01
 */

$quote = "To be or not to be? That is the question.";

$replaced = str_replace("To", "Two", str_replace("to", "two", str_replace("be", "beers", $quote, $count)));

echo $replaced, "\n";

echo $count;