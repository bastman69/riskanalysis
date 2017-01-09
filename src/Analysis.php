<?php
namespace App;
use App\Asset;
use App\Threat;

class Analysis {
    
    static function setAsset($title,$grade){
        return new Asset($title, $grade);
    }
    static function setRisk($title,$grade,$likehood,$consequence){
        return new Threat($title,$grade,$likehood,$consequence);
    }
    static function calculateRisk($asset,$risk){
        $asset_grade = $asset->getAssetGrade();
        $threat_grade = $risk->getThreatGrade();
        $threat_likehood= $risk->getThreatLikehood();
        $threat_consequence = $risk->getThreatConsequence();
        
        return $asset_grade*$threat_grade*$threat_likehood*$threat_consequence;
        
    }
}

