<?php
/**
 * Created by PhpStorm.
 * User: allflame
 * Date: 4/4/16
 * Time: 12:17 PM
 */

namespace Vain\Comparator\Factory\Exception;


use Vain\Comparator\Factory\ComparatorFactoryInterface;

class UnknownTypeComparatorFactoryException extends ComparatorFactoryException
{
    /**
     * VainComparatorFactoryUnknownTypeException constructor.
     * @param ComparatorFactoryInterface $factory
     * @param string $type
     */
    public function __construct(ComparatorFactoryInterface $factory, $type)
    {
        parent::__construct($factory, sprintf('Cannot create comparator by unknown type %s', $type), 0, null);
    }
}