<?php
/**
 * Created by PhpStorm.
 * User: allflame
 * Date: 4/4/16
 * Time: 12:14 PM
 */

namespace Vain\Comparator\Factory;

use Vain\Comparator\ComparatorInterface;

interface ComparatorFactoryInterface
{
    /**
     * @param string $type
     *
     * @return ComparatorInterface
     */
    public function create($type);
}