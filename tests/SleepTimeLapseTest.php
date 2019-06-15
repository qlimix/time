<?php declare(strict_types=1);

namespace Qlimix\Tests\Time;

use PHPUnit\Framework\TestCase;
use Qlimix\Time\SleepTimeLapse;

final class SleepTimeLapseTest extends TestCase
{
    /**
     * @test
     */
    public function shouldLapseTime(): void
    {
        $sleep = new SleepTimeLapse(2);

        $before = time()+1;
        $sleep->lapse();
        $after = time();

        $this->assertTrue($after > $before);
    }
}
