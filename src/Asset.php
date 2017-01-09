<?php

namespace App;

class Asset {
    protected $title;
    protected $grade;
    
    function __construct($title, $grade){
        
             $this->title=$title;
             
             is_numeric($grade) ? $this->grade=$grade : $this->grade=null;
      
       
    }
    
    function getAssetTitle(){
        return $this->title;
    }
    function getAssetGrade(){
        return intval($this->grade);
    }
}

