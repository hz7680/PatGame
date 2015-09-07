<?php
class Pat{
    var $patName;
    var $patLevel;
    var $patScore;

    public function __construct($arr=null){
        if(!empty($arr)){
            $this->patName=$arr['patname'];
            $this->patLevel=$arr['patlevel'];
            $this->patScore=$arr['patscore'];
        }
    }
}