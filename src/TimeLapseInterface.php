<?php declare(strict_types=1);

namespace Qlimix\Time;

interface TimeLapseInterface
{
    public function lapse(int $time): void;
}
