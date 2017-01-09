<?php

namespace App;

class Threat
{
    protected $title;
    protected $likehood;
    protected $consequence;
    protected $grade;
    
    function __construct($title,$grade ,$likehood,$consequence) {
        $this->title=$title;
        $this->consequence=$consequence;
        $this->likehood=$likehood;
        $this->grade=$grade;
    }
    
    function getThreatTitle(){
        return $this->title;
    }
    function getThreatLikehood(){
    return intval($this->likehood);
    }
    function getThreatConsequence()
    {
        return intval($this->consequence);
    }   
    function getThreatGrade(){
        return $this->grade;
    }
}

