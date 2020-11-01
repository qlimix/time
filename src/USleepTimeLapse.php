<?php declare(strict_types=1);

namespace Qlimix\Time;

use function usleep;

final class USleepTimeLapse implements TimeLapseInterface
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
        usleep($this->time);
    }
}
