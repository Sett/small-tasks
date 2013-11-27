<?php

trait Config_Names
{
    public $names = [];
    public $namesCount = 0;

    public function namesApplyConfig($data)
    {
        $this->names = $data;
        $this->namesCount = count($this->names);
    }
}
