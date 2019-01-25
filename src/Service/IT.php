<?php
/**
 * Created by PhpStorm.
 * User: eduardoramosdefreitas
 * Date: 2019-01-25
 * Time: 12:07
 */

namespace Src\Service;

/**
 * Class IT
 * @package Src\Service
 */
class IT implements DividerInterface
{
    const NAME = 'IT';

    /**
     * @param int $value
     * @return bool
     */
    public static function calculate(int $value): bool
    {
        return (($value % 5) === 0);
    }

    /**
     * @return string
     */
    public static function getNameClass(): string
    {
        return self::NAME;
    }
}
