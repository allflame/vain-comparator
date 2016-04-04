<?php
/**
 * Created by PhpStorm.
 * User: allflame
 * Date: 4/4/16
 * Time: 12:13 PM
 */

namespace Vain\Comparator\Repository;

use Vain\Comparator\VainComparatorInterface;

interface VainComparatorRepositoryInterface
{
    /**
     * @param string $type
     *
     * @return VainComparatorInterface
     */
    public function getComparator($type);
}