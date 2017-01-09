<?php

use PHPUnit\Framework\TestCase;
use App\Asset;

class AssetTest extends TestCase
{
    function test_that_can_set_and_get_asset_title(){
        $asset = new Asset('Company Reputation', 5);
        
        $this->assertEquals($asset->getAssetTitle(), 'Company Reputation');
        $this->assertEquals($asset->getAssetGrade(), 5);
        unset($asset);
    }
    
    function test_that_if_grade_is_not_numeric_getAssetGrade_returns_null(){
        $asset = new Asset('Company Reputation', 'foo');
        $this->assertEquals($asset->getAssetGrade(), 0);
    }
}

