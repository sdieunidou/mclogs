<?php

$config = [

    /**
     * Available storages with ID, name and class
     *
     * The class should implement \Storage\StorageInterface
     */
    "storages" => [
        "m" => [
            "name" => "MongoDB",
            "class" => "\\Storage\\Mongo"
        ],
        "f" => [
            "name" => "Filesystem",
            "class" => "\\Storage\\Filesystem"
        ],
        "r" => [
            "name" => "Redis",
            "class" => "\\Storage\\Redis"
        ]
    ],

    /**
     * Current storage id for new data
     *
     * Should be a key in the $storages array
     */
    "storageId" => "f",

    /**
     * Time in seconds to store data after put or last renew
     */
    "storageTime" => 7 * 24 * 60 * 60,

    /**
     * Maximum string length to store
     *
     * Will be cut by \Filter\Pre\Length
     */
    "maxLength" => 10485760

];
