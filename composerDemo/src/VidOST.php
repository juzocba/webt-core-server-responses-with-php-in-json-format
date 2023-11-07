<?php

namespace Htlw3r\ComposerDemo;
use JsonSerializable;

require_once 'Song.php';

class VidOST implements JsonSerializable
{
    private int $id;
    private string $name;
    private string $vgname;
    private int $releaseyear;
    private array $tracklist;

    public function __construct($id, $name, $vgname, $releaseyear)
    {
        $this->id = $id;
        $this->name = $name;
        $this->vgname = $vgname;
        $this->releaseyear = $releaseyear;
    }

    public function addSong($song)
    {
        $this->tracklist[] = $song;
    }

    public function jsonSerialize(): mixed
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'vgname' => $this->vgname,
            'releaseyear' => $this->releaseyear,
            'tracklist' => $this->tracklist
        ];
    }

}