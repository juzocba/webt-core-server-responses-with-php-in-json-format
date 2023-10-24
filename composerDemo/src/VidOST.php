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

$song1 = new Song(1, "Song 1", "Artist 1", 1, "3:30");
$song2 = new Song(2, "Song 2", "Artist 2", 2, "4:15");

$ost = new VidOST(101, "OST 1", "Video Game A", 2023);
$ost->addSong($song1);
$ost->addSong($song2);

$ost1Json = json_encode($ost, JSON_PRETTY_PRINT);  // Use JSON_PRETTY_PRINT for better readability
file_put_contents("ost1.json", $ost1Json);
