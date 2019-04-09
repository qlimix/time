<?php declare(strict_types=1);

namespace Qlimix\Time;

use function sleep;

final class SleepTimeLapse implements TimeLapseInterface
{
    /**
     * @inheritDoc
     */
    public function lapse(int $time): void
    {
        sleep($time);
    }
}
