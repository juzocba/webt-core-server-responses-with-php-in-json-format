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

    public function getId(): int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getVgname(): string
    {
        return $this->vgname;
    }

    public function getReleaseyear(): int
    {
        return $this->releaseyear;
    }

    public function getTracklist(): array
    {
        return $this->tracklist;
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