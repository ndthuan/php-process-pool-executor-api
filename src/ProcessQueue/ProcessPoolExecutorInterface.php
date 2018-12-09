<?php
declare(strict_types=1);

namespace Ndthuan\Parallelism\Api\ProcessQueue;

use Ndthuan\Parallelism\Api\JobQueue\JobQueueInterface;

/**
 * API for process queue execution
 */
interface ProcessPoolExecutorInterface
{
    /**
     * Creates a background process for each job in the queue and wait for them to finish until the queue is empty.
     *
     * @param JobQueueInterface $jobQueue
     * @param ProcessPoolConfig $config
     */
    public function execute(JobQueueInterface $jobQueue, ProcessPoolConfig $config): void;
}
