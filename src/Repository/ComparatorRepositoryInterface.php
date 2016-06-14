<?php
/**
 * Created by PhpStorm.
 * User: allflame
 * Date: 4/4/16
 * Time: 12:13 PM
 */

namespace Vain\Comparator\Repository;

use Vain\Comparator\ComparatorInterface;

interface ComparatorRepositoryInterface
{
    /**
     * @param ComparatorInterface $comparator
     *
     * @return ComparatorRepositoryInterface
     */
    public function addComparator(ComparatorInterface $comparator);

    /**
     * @param string $name
     *
     * @return ComparatorInterface
     */
    public function getComparator($name);
}