<?php
// Dance down, show is over
// Процедурное, легко-рсширяемое решение без абстракций для задачки с ночным клубом.

$music2dance = [
    ['music' => 'pop',  'actions' => ['hands up', 'head down']],
    ['music' => 'rock', 'actions' => ['hand up', 'hand down']]
];
$map      = ['pop' => 0, 'rock' => 1];
$m2dCount = count($music2dance)-1;
$music    = null;

if($argc)
{
    $music = isset($argv[1]) ? $argv[1] : null;
    $value = explode('=', $music)[1];
    if(isset($map[$value]))
        $music = $music2dance[$map[$value]];
    else
        $music = null;
}

$names = ['paul', 'molly', '1'];
$namesCount = count($names)-1;

$people2music = [];
$peopleAmount = mt_rand(0, 20);

echo 'Let\'s meet our gests: ' . "\n";

for($i = 0; $i < $peopleAmount; $i++)
{
    $offset   = mt_rand(0, $namesCount);
    $newGuest = (isset($names[$offset]) ? $names[$offset] : $names[0]) . $i;
    $musicCur = $music2dance[mt_rand(0, $m2dCount)];

    echo $newGuest . " like " . $musicCur['music'] . "\n";
    $people2music[$newGuest] = $musicCur;
}

function run($music, $people2music, $music2dance, $m2dCount)
{
    $nowPlaying = ($music != null) ? $music : $music2dance[mt_rand(0, $m2dCount)];

    echo "\n   === " . 'Now playing ' . $nowPlaying['music'] . " ===\n";

    foreach($people2music as $name => $musicData)
    {
        echo ($musicData['music'] == $nowPlaying['music'])
            ? $name . ' is dancing: ' . implode(' & ', $musicData['actions']) . "\n"
            : $name . ' goes drinking' . "\n";
    }
}

while(true)
{
    run($music, $people2music, $music2dance, $m2dCount);
    sleep(5);
    $music = $music2dance[mt_rand(0, $m2dCount)];
}
