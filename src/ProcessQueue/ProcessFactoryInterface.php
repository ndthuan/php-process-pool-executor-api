<?php
declare(strict_types=1);

namespace Ndthuan\Parallelism\Api\ProcessQueue;

use Ndthuan\Parallelism\Api\JobQueue\JobInterface;
use Symfony\Component\Process\Process;

/**
 * API for instantiating a process
 */
interface ProcessFactoryInterface
{
    /**
     * Creates a process
     *
     * @param JobInterface $job
     *
     * @return Process
     */
    public function createProcess(JobInterface $job): Process;
}
