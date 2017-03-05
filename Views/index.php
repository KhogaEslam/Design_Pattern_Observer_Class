<?php
    defined("Direct") or exit ("101 : No direct access");
    echo "<br>Index Page<br>";

    $testObj = new ExtendSubject();
    // attach an observer
    $testObj->register(new ExtendObserver());

    $testObj->functionOne();
    $testObj->functionTwo();