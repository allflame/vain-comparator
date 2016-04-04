<?php
/**
 * Created by PhpStorm.
 * User: allflame
 * Date: 4/4/16
 * Time: 12:13 PM
 */

namespace Vain\Comparator\Repository;

use Vain\Comparator\ComparatorInterface;

interface RepositoryInterface
{
    /**
     * @param string $type
     *
     * @return ComparatorInterface
     */
    public function getComparator($type);
}