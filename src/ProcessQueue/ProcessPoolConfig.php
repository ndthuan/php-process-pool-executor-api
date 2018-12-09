<?php
declare(strict_types=1);

namespace Ndthuan\Parallelism\Api\ProcessQueue;

/**
 * Class ProcessPoolConfig
 */
class ProcessPoolConfig
{
    /**
     * @var int
     */
    private $maxConcurrentProcesses;

    /**
     * Milliseconds to sleep before checking if a process has finished
     *
     * @var int
     */
    private $sleepInterval;

    /**
     * ProcessPoolConfig constructor.
     *
     * @param int $maxConcurrentProcesses
     * @param int $sleepInterval
     */
    public function __construct(int $maxConcurrentProcesses, int $sleepInterval = 100)
    {
        $this->maxConcurrentProcesses = $maxConcurrentProcesses;
        $this->sleepInterval          = $sleepInterval;
    }


    /**
     * @return int
     */
    public function getMaxConcurrentProcesses(): int
    {
        return $this->maxConcurrentProcesses;
    }

    /**
     * @return int
     */
    public function getSleepInterval(): int
    {
        return $this->sleepInterval;
    }
}
