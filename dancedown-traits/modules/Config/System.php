<?php
/**
 * Class Config_System
 */
trait Config_System
{
    /**
     * @param array $data
     */
    public function systemApplyConfig(array $data)
    {
        $title = isset($data['title']) ? $data['title'] : 'TP';
        $version = isset($data['version']) ? $data['version'] : $this->colorText('<Missed System version>', 'red');

        $this->say('System information: ' . $title . ' v.' . $version . ' | ' . date('H:i:s'), 'h1', false, true);
    }
}
