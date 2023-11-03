<?php

namespace Htlw3r\ComposerDemo;
use JsonSerializable;

require 'Song.php';

class VidOST implements JsonSerializable
{
    private $id;
    private $name;
    private $vgname;
    private $releaseyear;
    private $tracklist = array();

    public function __construct($id, $name, $vgname, $releaseyear)
    {
        $this->id = $id;
        $this->name = $name;
        $this->vgname = $vgname;
        $this->releaseyear = $releaseyear;
    }

    public function addSong($song): array
    {
        $this->tracklist[] = $song;
        return $this->tracklist;
    }

    public function jsonSerialize(): mixed
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'vgname' => $this->vgname,
            'releaseyear' => $this->releaseyear,
            'tracklist' => $this->tracklist,
        ];
    }
}