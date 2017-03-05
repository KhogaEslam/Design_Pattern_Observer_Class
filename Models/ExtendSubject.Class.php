<?php

/**
 * Created by PhpStorm.
 * User: khoga
 * Date: 05/03/17
 * Time: 04:36 م
 */
class ExtendSubject extends AbstractSubject
{
    function functionOne(){
        // signal any observers that registered that functionOne actioned
        $this->setState("functionOne");
    }

    function functionTwo(){
        // signal any observers that registered that functionTwo actioned
        $this->setState("functionTwo");
    }
}