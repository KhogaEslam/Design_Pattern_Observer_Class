<?php
abstract class AbstractSubject
{
    protected $observers;
    protected $state;

    public function __construct() {
        $this->observers = array();
        $this->state = null;
        echo "<br>Called AbstractSubject constructor<br>";
    }

    public function register(AbstractObserver $observer) {
        $i = array_search($observer, $this->observers);
        if ($i === false) {
            $this->observers[] = $observer;
            echo "<br>Called AbstractSubject register Function<br>";
        }
    }

    public function unRegister(AbstractObserver $observer) {
        if (!empty($this->observers)) {
            $i = array_search($observer, $this->observers);
            if ($i !== false) {
                unset($this->observers[$i]);
                echo "<br>Called AbstractSubject unRegister Function<br>";
            }
        }
    }

    public function getState() {
        echo "<br>Called AbstractSubject getState Function<br>";
        return $this->state;
    }

    public function setState($state) {
        $this->state = $state;
        echo "<br>Called AbstractSubject setState Function<br>";
        $this->notify();
    }

    public function notify() {
        if (!empty($this->observers)) {
            foreach ($this->observers as $observer) {
                $observer->update($this);
            }
            echo "<br>Called AbstractSubject notify Function<br>";
        }
    }

    public function getObservers() {
        echo "<br>Called AbstractSubject getObservers Function<br>";
        return $this->observers;
    }
}