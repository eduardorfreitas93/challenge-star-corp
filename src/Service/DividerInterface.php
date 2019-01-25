<?php
/**
 * Created by PhpStorm.
 * User: eduardoramosdefreitas
 * Date: 2019-01-25
 * Time: 12:58
 */

namespace Src\Service;


/**
 * Interface DividerInterface
 * @package Src\Service
 */
interface DividerInterface
{
    public static function calculate(int $value): bool;

    public static function getNameClass(): string;
}
