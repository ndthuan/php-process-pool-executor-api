<?php
declare(strict_types=1);

namespace Ndthuan\Parallelism\Api\JobQueue;

/**
 * API for job queue management
 */
interface JobQueueInterface
{
    /**
     * Pushes a job into the queue
     *
     * @param JobInterface[] $jobs
     */
    public function push(JobInterface ...$jobs);

    /**
     * Gets and removes the first job from the queue
     *
     * @return JobInterface
     */
    public function pop(): JobInterface;

    /**
     * Indicates if there are jobs to execute
     *
     * @return bool
     */
    public function hasNext(): bool;
}
