<?php


namespace Htlw3r\ComposerDemo;
require 'src/DemoSeeder.php';

# User Story 1
$song1 = new Song(1, "Song 1", "Artist 1", 1, "3:30");
$song2 = new Song(2, "Song 2", "Artist 2", 2, "4:15");

$ost = new VidOST(101, "OST 1", "Video Game A", 2023);
$ost->addSong($song1);
$ost->addSong($song2);


$ost1Json = json_encode($ost, JSON_PRETTY_PRINT);
file_put_contents("ost1.json", $ost1Json);


# User Story 2
$seeder = new DemoSeeder();
$demoOSTs = $seeder->generateDemoData();


$ost2Json = json_encode($demoOSTs, JSON_PRETTY_PRINT);
file_put_contents("ost2.json", $ost2Json);


# User Story 3,4
if (isset($_GET['id'])) {
    $requestedId = $_GET['id'];

    $found = false;
    foreach ($demoOSTs as $ost) {
        if ($ost->getId() == $requestedId) {

            $ostData = [
                'id' => $ost->getId(),
                'name' => $ost->getName(),
                'videoGame' => $ost->getVgname(),
                'releaseYear' => $ost->getReleaseyear(),
                'tracklist' => $ost->getTracklist()
            ];

            header('Content-Type: application/json');
            echo json_encode($ostData, JSON_PRETTY_PRINT);

            $found = true;
        }
    }

    if (!$found) {
        header('Content-Type: application/json');
        echo json_encode($demoOSTs, JSON_PRETTY_PRINT);
    }
} else {
    echo 'No information given - please add an "id" parameter!';
}


