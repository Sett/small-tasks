<?php

trait DanceClub
{
    /**
     * @param array $people
     * @param string $onLoadConfig path/to/file
     */
    public function __construct($onLoadConfig = '', $amount = 20)
    {
        $config = $onLoadConfig ? $onLoadConfig : __DIR__ . '/../application/configs/onload.json';

        $this->applyConfig($config);
        $this->run($this->getPeople(20));
    }
    
    /**
     * @param $people
     */
    public function run($people)
    {
        $this->event('club opened', $people)
             ->event('music on', $people)
             ->event('the end');
    }
}
