<?php declare(strict_types=1);

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class HardnessDegree extends Enum
{
    const Easy = 0;
    const Middle = 1;
    const Hard = 2;
    const Advance = 3;
}
