<?php
abstract class AbstractObserver
{
    public function __construct($subject = null) {
        if (is_object($subject) && $subject instanceof AbstractSubject) {
            $subject->register($this);

            echo "<br>Called AbstractObserver constructor<br>";
        }
    }

    public function update($subject) {
        // looks for an observer method "dynamically" with the state name
        if (method_exists($this, $subject->getState())) {
            call_user_func_array(array($this, $subject->getState()), array($subject));

            echo "<br>Called AbstractObserver update Function<br>";
        }
    }
}