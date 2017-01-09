<?php

use PHPUnit\Framework\TestCase;
use App\Threat;

class ThreatTest extends TestCase {
 
    function test_that_a_threat_has_title_likehood_and_consequence_values(){
        $title='Terrorist Attack';
        $grade = 5;
        $likehood = 3;
        $consequence = 5;
        $tr= new Threat($title,$grade,$likehood,$consequence);
        
        $this->assertEquals($tr->getThreatTitle(), 'Terrorist Attack');
        $this->assertEquals($tr->getThreatLikehood(), 3);
        $this->assertEquals($tr->getThreatConsequence(), 5);
        $this->assertEquals($tr->getThreatGrade(), 5);
    }
    
}

