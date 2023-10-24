<?php

namespace Htlw3r\ComposerDemo;
class Song
{
    private $id;
    private $name;
    private $artist;
    private $tracknumber;
    private $duration;

public function __construct($id, $name, $artist, $tracknumber, $duration)
{
    $this->id = $id;
    $this->name = $name;
    $this->artist = $artist;
    $this->tracknumber = $tracknumber;
    $this->duration = $duration;
    }
}


