<?php

namespace Htlw3r\ComposerDemo;

require_once 'VidOST.php';

class DemoSeeder
{
    public function generateDemoData()
    {
        $demoOSTs = [];

        for ($i = 1; $i <= 3; $i++) {
            $ost = new VidOST($i, "OST $i", "Video Game $i", 2023);

            for ($j = 1; $j <= 4; $j++) {
                $ost->addSong(new Song($j, "Track $j", "Artist $j", $j, "3:30"));
            }

            $demoOSTs[] = $ost;
        }

        return $demoOSTs;
    }
}
