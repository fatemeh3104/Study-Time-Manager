<?php declare(strict_types=1);

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class StudyTargetType extends Enum
{
    const Page = 0;
    const Minutes = 1;
    const hour = 2;
    const Test = 3;
}
