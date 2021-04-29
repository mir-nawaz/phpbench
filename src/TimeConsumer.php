<?php

namespace Acme;

class TimeConsumer
{
    public function consume(int $time)
    {
        usleep($time);
    }
}
