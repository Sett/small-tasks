<?php
/**
 * Class Config
 */
trait Config
{
    public $config = null;
  
    public function applyConfig($path)
    {
        if(is_null($this->config))
        {
            $this->loadConfig($path);
            return $this->applyConfig($path);
        }
        else
        {
            $this->say('Applying config sections', 'h2');
            foreach($this->config as $property => $data)
            {
                if(method_exists($this, $property . 'ApplyConfig'))
                {
                    $this->say(' - ' . $this->colorText($property, 'bold'));
                    $this->{$property . 'ApplyConfig'}($data);
                }
                else
                    echo 'Unknown config section "' . $property . '"' . "\n";
            }

            return true;
        }
    }
  
    public function loadConfig($path)
    {
        $this->config = require_once $path;
    }
}
