<?php
/**
 * Created by PhpStorm.
 * User: allflame
 * Date: 6/14/16
 * Time: 1:04 PM
 */

namespace Vain\Comparator\Exception;

use Vain\Comparator\Repository\ComparatorRepositoryInterface;

class UnknownComparatorException extends ComparatorRepositoryException
{
    /**
     * UnknownComparatorException constructor.
     * @param ComparatorRepositoryInterface $comparatorRepository
     * @param string $name
     */
    public function __construct(ComparatorRepositoryInterface $comparatorRepository, $name)
    {
        parent::__construct($comparatorRepository, sprintf('Comparator %s is not registered', $name), 0);
    }
}