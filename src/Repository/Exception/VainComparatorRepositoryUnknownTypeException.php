<?php
/**
 * Created by PhpStorm.
 * User: allflame
 * Date: 4/4/16
 * Time: 8:18 PM
 */

namespace Vain\Comparator\Repository\Exception;

use Vain\Comparator\Repository\VainComparatorRepositoryInterface;

class VainComparatorRepositoryUnknownTypeException extends VainComparatorRepositoryException
{
    /**
     * VainComparatorRepositoryUnknownTypeException constructor.
     * @param VainComparatorRepositoryInterface $comparatorRepository
     * @param string $type
     */
    public function __construct(
        VainComparatorRepositoryInterface $comparatorRepository,
        $type
    ) {
        parent::__construct($comparatorRepository, sprintf('Cannot get comparator by unknown type %s', $type), 0, null);
    }
}