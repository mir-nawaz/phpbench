<?php


namespace Acme\Tests\Benchmark;

use Acme\TimeConsumer;
use PhpBench\Benchmark\Metadata\Annotations\Iterations;
use PhpBench\Benchmark\Metadata\Annotations\Revs;

class TimeConsumerBench
{
    /**
     * @Revs(1000)
     * @Iterations(5)
     */
    public function benchConsume()
    {
        $consumer = new TimeConsumer();
        $consumer->consume();
    }
}
