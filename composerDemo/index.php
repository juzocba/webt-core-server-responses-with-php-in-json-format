<?php

namespace Htlw3r\ComposerDemo;
require 'src\VidOST.php';

$song = json_encode(new \Htlw3r\ComposerDemo\Song(1, "jsonSong", "Typo 2", 1, "13:49"));
$songDecode = json_decode($song);

echo $songDecode->id;
$songDecode->name = $_GET['jsonSong'] ?? 'none';

echo $songDecode->name;