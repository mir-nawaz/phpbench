<?php

namespace Acme\Tests\Benchmark;

use PhpBench\Benchmark\Metadata\Annotations\Iterations;
use PhpBench\Benchmark\Metadata\Annotations\Revs;

class HashBench
{
    /**
     * @Revs(1000)
     * @Iterations(5)
     */
    public function benchMd5()
    {
        hash('md5', 'Hello World!');
    }
    /**
     * @Revs(1000)
     * @Iterations(5)
     */
    public function benchSha1()
    {
        hash('sha1', 'Hello World!');
    }
}
