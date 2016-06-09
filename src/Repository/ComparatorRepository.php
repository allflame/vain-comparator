<?php
/**
 * Created by PhpStorm.
 * User: allflame
 * Date: 4/4/16
 * Time: 8:14 PM
 */

namespace Vain\Comparator\Repository;

use Vain\Comparator\Factory\ComparatorFactoryInterface;

class ComparatorRepository implements ComparatorRepositoryInterface
{
    private $comparatorFactory;

    private $comparators;

    /**
     * ComparatorRepository constructor.
     * @param ComparatorFactoryInterface $comparatorFactory
     * @param array $comparators
     */
    public function __construct(ComparatorFactoryInterface $comparatorFactory, array $comparators = [])
    {
        $this->comparatorFactory = $comparatorFactory;
        $this->comparators = $comparators;
    }

    /**
     * @inheritDoc
     */
    public function getComparator($type)
    {
        if (false === array_key_exists($type, $this->comparators)) {
            $this->comparators[$type] = $this->comparatorFactory->create($type);
        }

        return $this->comparators[$type];
    }
}