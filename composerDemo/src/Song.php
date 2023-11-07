<?php

namespace Htlw3r\ComposerDemo;
class Song implements \JsonSerializable
{
    private int $id;
    private string $name;
    private string $artist;
    private int $tracknumber;
    private string $duration;

    public function __construct($id, $name, $artist, $tracknumber, $duration)
    {
        $this->id = $id;
        $this->name = $name;
        $this->artist = $artist;
        $this->tracknumber = $tracknumber;
        $this->duration = $duration;
    }



    public function jsonSerialize(): mixed
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'artist' => $this->artist,
            'tracknumber' => $this->tracknumber,
            'duration' => $this->duration
        ];
    }
}


