<?php
/**
 * operate mode
 */
trait Talk
{
    /**
     * @var string
     */
    public $talk = 'on';

    /**
     *
     */
    public function clubOpened()
    {
        $this->say('Start test(s)', 'h1');
    }
}
