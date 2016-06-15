<?php
/**
 * Created by PhpStorm.
 * User: allflame
 * Date: 4/4/16
 * Time: 8:14 PM
 */

namespace Vain\Comparator\Repository;

use Vain\Comparator\ComparatorInterface;
use Vain\Comparator\Exception\DuplicateComparatorException;
use Vain\Comparator\Exception\UnknownComparatorException;

class ComparatorRepository implements ComparatorRepositoryInterface
{
    private $comparators;

    /**
     * ComparatorRepository constructor.     
     * @param array $comparators
     */
    public function __construct(array $comparators = [])
    {
        $this->comparators = $comparators;
    }

    /**
     * @inheritDoc
     */
    public function addComparator($name, ComparatorInterface $comparator)
    {
        if (array_key_exists($name, $this->comparators)) {
            throw new DuplicateComparatorException($this, $name, $comparator, $this->comparators[$name]);
        }
        $this->comparators[$name] = $comparator;

        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getComparator($name)
    {
        if (false === array_key_exists($name, $this->comparators)) {
            throw new UnknownComparatorException($this, $name);
        }

        return $this->comparators[$name];
    }
}