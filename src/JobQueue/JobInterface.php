<?php
declare(strict_types=1);

namespace Ndthuan\Parallelism\Api\JobQueue;

/**
 * API for a single job
 */
interface JobInterface
{
    /**
     * @return string
     */
    public function getJobId(): string;
}
