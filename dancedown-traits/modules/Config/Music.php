<?php

trait Config_Music
{
    public $music = [];
    public $musicCount = 0;

    public function musicApplyConfig($data)
    {
        $this->music = $data;
        $this->musicCount = count($this->music)-1;
    }
}
