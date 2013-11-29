<?php

require_once 'modules/lib/Manager.php';

Manager::compile('Dance_Club', __DIR__ . '/application/configs/compile', 'php');

define('DC_ROOT', __DIR__ . '/');
require_once 'Dance_Club.php';
$start = time();

$dc = new Dance_Club(__DIR__ . '/application/configs/onload.php', 10, 'rock');

$dc->output($dc->say('Finish in ' . (time()-$start) . ' second(s)', 'h1', true));
