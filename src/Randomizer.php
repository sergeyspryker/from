<?php

namespace Randomizer;

final class Randomizer
{
    /**
     * @param string ...$strings
     *
     * @return string
     */
    public final function randomString(string ...$strings): string
    {
        $index = mt_rand(0, count($strings) - 1);

        return $strings[$index];
    }

    /**
     * @return bool
     */
    public final function randomBool(): bool
    {
        return (bool)mt_rand(0, 1);
    }
}
