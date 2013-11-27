<?php
return 
[
    "path" => 
    [
        "class" => "modules/lib/",
        "trait" => "modules/"
    ],

    "traits" => 
    [
        "DanceClub",
        [
            "name" => "Music",
            
            "traits" => ["Rock", "List"]
        ],
        "Pathfinder",
        "Event",
        "Log",
        [
            "name" => "Config",

            "traits" => 
            [        
                "Event",
                "Log",
                "System",
                "Talk",
                "Test"
            ]
        ],
        "File",
        "ArrayLib",
        [
            "name" => "Talk",
            "traits" => ["Console"]
        ]
    ]
];
