<?php
/**
 * Created by PhpStorm.
 * User: allflame
 * Date: 4/4/16
 * Time: 12:14 PM
 */

namespace Vain\Comparator\Factory;

use Vain\Comparator\VainComparatorInterface;

interface VainComparatorFactoryInterface
{
    /**
     * @param string $type
     *
     * @return VainComparatorInterface
     */
    public function create($type);
}