<?php
declare(strict_types=1);

namespace Ndthuan\Parallelism\Api\JobQueue;

/**
 * A job that can be grouped into a cluster based on a unique factor
 */
interface ClusterableJobInterface extends JobInterface
{
    /**
     * @return string
     */
    public function getClusteringFactor(): string;
}
