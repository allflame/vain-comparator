<?php
/**
 * Created by PhpStorm.
 * User: allflame
 * Date: 4/4/16
 * Time: 12:14 PM
 */

namespace Vain\Comparator\Factory;

use Vain\Comparator\Factory\Exception\UnknownTypeFactoryException;
use Vain\Comparator\Int\IntComparator;
use Vain\Comparator\String\StringComparator;

class Factory implements FactoryInterface
{
    /**
     * @inheritDoc
     */
    public function create($type)
    {
        switch ($type) {
            case 'int':
                return new IntComparator();
                break;
            case 'string':
                return new StringComparator();
                break;
            default:
                throw new UnknownTypeFactoryException($this, $type);
        }
    }
}