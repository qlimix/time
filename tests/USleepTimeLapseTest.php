<?php declare(strict_types=1);

namespace Qlimix\Tests\Time;

use PHPUnit\Framework\TestCase;
use Qlimix\Time\USleepTimeLapse;

final class USleepTimeLapseTest extends TestCase
{
    /**
     * @test
     */
    public function shouldLapseTime(): void
    {
        $sleep = new USleepTimeLapse(2000000);

        $before = time()+1;
        $sleep->lapse();
        $after = time();

        $this->assertTrue($after > $before);
    }
}
