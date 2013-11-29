<?php

return 
[
    "talk" => "on",

    "system" =>
    [
        "title" => "Dance Club",
        "version" => "0.0.start.1"
    ],

    "event" =>
    [
        "club opened"   => ["clubOpened"],
        "music on"      => ["play"],
        "the end"       => ["output"]
    ],
    
    "names" => ["Paul", "Marry"],
    "music" => [
        "data" =>
        [
            ["name" => "rock", "dance" => "moves hand up"], 
            ["name" => "pop", "dance" => "moves leg up & down"]
        ],
        
        "map" => [0 => "rock", 1 => "pop"]
    ]
];
