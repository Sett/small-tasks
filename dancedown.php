<?php
// Dance down, show is over; Процедурное, легко-рсширяемое решение без абстракций для задачки с ночным клубом.
$music2dance = [
    ['music' => 'pop',  'actions' => 'hands up & head down'],
    ['music' => 'rock', 'actions' => 'hand up & hand down']];
$map      = ['pop' => 0, 'rock' => 1];
$m2dCount = count($music2dance)-1;
$music    = null;

if($argc && isset($argv[1]) && isset($map[$argv[1]]))// php dancedown.php rock
    $music = $music2dance[$map[$argv[1]];

$names        = ['paul', 'molly', '1'];
$namesCount   = count($names)-1;
$people2music = [];
$peopleAmount = mt_rand(0, 20);
$echo = 'Let\'s meet our gests: ' . "\n";

for($i = 0; $i < $peopleAmount; $i++)
{
    $offset   = mt_rand(0, $namesCount);
    $newGuest = ( isset($names[$offset]) ? $names[$offset] : $names[0] ) . $i;
    $musicCur = $music2dance[mt_rand(0, $m2dCount)];
    $people2music[$newGuest] = $musicCur;
    
    $echo .= $newGuest . " like " . $musicCur['music'] . "\n";
}

echo $echo;
$nowPlaying = ($music != null) ? $music : $music2dance[mt_rand(0, $m2dCount)];

while(true)
{
    echo "\n   === " . 'Now playing ' . $nowPlaying['music'] . " ===\n";

    foreach($people2music as $name => $musicData)
        echo ($musicData['music'] == $nowPlaying['music'])
            ? $name . ' is dancing: ' . $musicData['actions'] . "\n"
            : $name . ' goes drinking' . "\n";

    sleep(5);
    $music = $music2dance[mt_rand(0, $m2dCount)];
}
