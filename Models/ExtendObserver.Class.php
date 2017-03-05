<?php

/**
 * Created by PhpStorm.
 * User: khoga
 * Date: 05/03/17
 * Time: 04:37 م
 */
class ExtendObserver extends AbstractObserver
{
    function functionOne($subject) {
        var_dump($subject);
        echo "<br>functionOne Function Called<br>";
    }

    function functionTwo($subject) {
        var_dump($subject);
        echo "<br>functionTwo Function Called<br>";
    }
}