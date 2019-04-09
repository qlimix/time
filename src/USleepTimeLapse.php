<?php declare(strict_types=1);

namespace Qlimix\Time;

use function usleep;

final class USleepTimeLapse implements TimeLapseInterface
{
    /**
     * @inheritDoc
     */
    public function lapse(int $time): void
    {
        usleep($time);
    }
}
