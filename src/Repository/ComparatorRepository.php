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

    private $comparators = [];

    /**
     * ComparatorRepository constructor.
     * @param ComparatorFactoryInterface $comparatorFactory
     */
    public function __construct(ComparatorFactoryInterface $comparatorFactory)
    {
        $this->comparatorFactory = $comparatorFactory;
    }

    /**
     * @inheritDoc
     */
    public function getComparator($type)
    {
        if (null === $this->comparators[$type]) {
            $this->comparators[$type] = $this->comparatorFactory->create($type);
        }

        return $this->comparators[$type];
    }

}