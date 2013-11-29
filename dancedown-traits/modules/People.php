<?php

trait People
{
    public function getPeople($count = 0)
    {
        $people = [];
        for($i = 0; $i < $count; $i++)
        {
            $people[$this->names[mt_rand(0, $this->namesCount)]] = 
            $this->music['data'][mt_rand(0,$this->musicCount)]['name'];
        }
        
        return $people;
    }
}
