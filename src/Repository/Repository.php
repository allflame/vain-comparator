<?php
/**
 * Created by PhpStorm.
 * User: allflame
 * Date: 4/4/16
 * Time: 8:14 PM
 */

namespace Vain\Comparator\Repository;

use Vain\Comparator\Factory\FactoryInterface;
use Vain\Comparator\Repository\Exception\UnknownTypeRepositoryException;

class Repository implements RepositoryInterface
{
    private $comparatorFactory;

    private $comparators;

    public function __construct(FactoryInterface $comparatorFactory, array $comparators = [])
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
            throw new UnknownTypeRepositoryException($this, $type);
        }

        if (null === $this->comparators[$type]) {
            $this->comparators[$type] = $this->comparatorFactory->create($type);
        }

        return $this->comparators[$type];
    }

}