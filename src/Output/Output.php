<?php

namespace IceProductionz\GameOfSnap\Output;

class Output
{
    public function writeln($text): void
    {
        echo "$text \r\n";
    }
}