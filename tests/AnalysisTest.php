<?php

use PHPUnit\Framework\TestCase;
use App\Analysis;

class AnalysisTest extends TestCase 
{
    function test_that_we_can_set_assets(){
        //set asset 1
        $title1 = 'Employees';
        $grade1 = 4;
        $asset1 = Analysis::setAsset($title1,$grade1);
            
        $this->assertEquals('Employees', $asset1->getAssetTitle());
        $this->assertEquals(4,$asset1->getAssetGrade());
        //set asset 2
        $title2 = 'Reputation';
        $grade2 = 3;
        $asset2 = Analysis::setAsset($title2,$grade2);
            
        $this->assertEquals('Reputation', $asset2->getAssetTitle());
        $this->assertEquals(3,$asset2->getAssetGrade());
    }
    
    function test_that_we_can_set_risks()
    {
        //set a risk
        $risk_title1 = 'Terrorism';
        $risk_grade1 = 5;
        $likehoode1 = 4;
        $consequence1 = 3;
        
        $risk1= Analysis::setRisk($risk_title1,$risk_grade1,$likehoode1,$consequence1);
        
        $this->assertEquals($risk1->getThreatTitle(), $risk_title1);
        $this->assertEquals($risk1->getThreatGrade(), $risk_grade1);
        $this->assertEquals($risk1->getThreatLikehood(), $likehoode1);
        $this->assertEquals($risk1->getThreatConsequence(), $consequence1);
        
        
    }
    
    function test_that_we_can_calculate_risk_score(){
        
    
    //set asset
        $title1 = 'Employees';
        $grade1 = 4;
        $asset1 = Analysis::setAsset($title1,$grade1);
    //set risk
    //set a risk
        $risk_title1 = 'Terrorism';
        $risk_grade1 = 5;
        $likehoode1 = 4;
        $consequence1 = 3;
        
        $risk1= Analysis::setRisk($risk_title1,$risk_grade1,$likehoode1,$consequence1);
        
    //calculate risk and return risk score
    
            $score1 = Analysis::calculateRisk($asset1, $risk1);
            
            $this->assertEquals($score1, 240);
    }
    
    function test_with_2_assets_and_2_risks(){
        // asset 1 = personnel/3
             $title1 = 'Personnel';
            $grade1 = 3;
            $asset1 = Analysis::setAsset($title1,$grade1);
        //asset 2 = equipment/2
             $title2 = 'Equipment';
             $grade2 = 2;
            $asset2 = Analysis::setAsset($title2,$grade2);
        //risk1 = fire 5 3 5
            $risk_title1 = 'Fire';
            $risk_grade1 = 5;
            $likehoode1 = 3;
            $consequence1 = 5;        
            $risk1= Analysis::setRisk($risk_title1,$risk_grade1,$likehoode1,$consequence1);
        
        //risk2 = accident 3 4 4
            $risk_title2 = 'Accident';
        $risk_grade2 = 3;
        $likehoode2= 4;
        $consequence2 = 4;
        
        $risk2= Analysis::setRisk($risk_title2,$risk_grade2,$likehoode2,$consequence2);
        
        //score 1 for asset 1 for risk 1 must be 225
            $score1 = Analysis::calculateRisk($asset1, $risk1);            
            $this->assertEquals($score1, 225);
        //score 2 for asset 1 for risk 2 must be 144
             $score2 = Analysis::calculateRisk($asset1, $risk2);            
            $this->assertEquals($score2, 144);
        //score 3 for asset 2 for risk 1 must be 150
             $score3 = Analysis::calculateRisk($asset2, $risk1);            
            $this->assertEquals($score3, 150);
        //score 4 for asset 3 for risk 2 must be 96
             $score4 = Analysis::calculateRisk($asset2, $risk2);            
            $this->assertEquals($score4, 96);
    }
    
    function test_max_score(){
        //set asset
        $title1 = 'Employees';
        $grade1 = 5;
        $asset1 = Analysis::setAsset($title1,$grade1);
    //set risk
    //set a risk
        $risk_title1 = 'Terrorism';
        $risk_grade1 = 5;
        $likehoode1 = 5;
        $consequence1 = 5;
        
        $risk1= Analysis::setRisk($risk_title1,$risk_grade1,$likehoode1,$consequence1);
        
    //calculate risk and return risk score
    
            $score1 = Analysis::calculateRisk($asset1, $risk1);
            
            $this->assertEquals($score1, 625);
    }
    
    }

