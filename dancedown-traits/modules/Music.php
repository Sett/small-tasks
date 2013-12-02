<?php

trait Music
{
    /**
     * @param string @playing
     */
    public $playing = 'rock';
    
    /**
     * @param array $people
     */
    public function play($people = [])
    {
        $this->say('Playing ' . $this->playing, 'h1');
        
        foreach($people as $name => $music)
        {
            if($music == $this->playing)
            {
                $index = $this->music['map'][$music];
                $this->say($name . ' ' . $this->music['data'][$index]['dance']);
            }
            else
                $this->say($name . ' goes drinking');
        }
    }
}
