<?php
/**
 * Created by PhpStorm.
 * User: eduardoramosdefreitas
 * Date: 2019-01-25
 * Time: 13:34
 */

namespace Src\Model;

/**
 * Class Divider
 * @package Src\Model
 */
class Divider
{
    /**
     * @var array
     */
    private $dividers;

    /**
     * Divider constructor.
     * @param array $dividers
     */
    public function __construct(array $dividers)
    {
        $this->dividers = $dividers;
    }

    /**
     * @return array
     */
    public function getDividers(): array
    {
        return $this->dividers;
    }
}
