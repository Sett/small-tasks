<?php

require_once 'modules/lib/Manager.php';

Manager::compile('Dance_Club', __DIR__ . '/application/configs/compile', 'php');

define('DC_ROOT', __DIR__ . '/');
require_once 'Dance_Club.php';
$start = time();

$music = ['rock', 'pop'];
$names = ['paul', 'marry'];

$people = [];
$amount = mt_rand(0, 20);
for($i = 0; $i < $amount; $i++)
  $people[$names[mt_rand(0, 1)]] = $music[mt_rand(0,1)];

$dc = new Dance_Club($people, __DIR__ . '/application/configs/onload.php');

$dc->output($dc->say('Finish in ' . (time()-$start) . ' second(s)', 'h1', true));
