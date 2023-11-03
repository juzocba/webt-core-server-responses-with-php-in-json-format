<?php

namespace Htlw3r\ComposerDemo;

require 'VidOST.php';

class DemoSeeder
{
    public function generateDemoData()
    {
        $demoOSTs = [];


        for ($i = 1; $i <= 3; $i++) {
            $ost = new VidOST($i, "OST $i", "Video Game $i", 2023);

            for ($j = 1; $j <= 4; $j++) {
                $track = new Song($j, "Track $j", "Artist $i", $j, "3:30");
                $ost->addSong($track);
            }

            $demoOSTs[] = $ost;
        }

        return $demoOSTs;
    }
}
