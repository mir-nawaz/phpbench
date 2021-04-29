<?php


namespace Acme\Tests\Benchmark;

use Acme\TimeConsumer;
use PhpBench\Benchmark\Metadata\Annotations\Iterations;
use PhpBench\Benchmark\Metadata\Annotations\ParamProviders;
use PhpBench\Benchmark\Metadata\Annotations\Revs;

/**
 * @Revs(100)
 * @Iterations(10)
 * @BeforeMethods("setUp")
 */
class TimeConsumerBench
{
    private TimeConsumer $time;

    public function setUp(): void
    {
        $this->time = new TimeConsumer();
    }

    /**
     * @ParamProviders("providerConsume")
     */
    public function benchConsume(array $params)
    {
        $this->time->consume($params['var1']);
    }

    public function providerConsume()
    {
        yield [ 'var1' => 1000, 'var2' => 10 ];
    }
}
