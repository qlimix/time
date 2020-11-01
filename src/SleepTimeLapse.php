<?php declare(strict_types=1);

namespace Qlimix\Time;

use function sleep;

final class SleepTimeLapse implements TimeLapseInterface
{
    private int $time;

    public function __construct(int $time)
    {
        $this->time = $time;
    }

    /**
     * @inheritDoc
     */
    public function lapse(): void
    {
        sleep($this->time);
    }
}
