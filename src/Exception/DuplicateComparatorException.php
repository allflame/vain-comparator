<?php
/**
 * Created by PhpStorm.
 * User: allflame
 * Date: 6/15/16
 * Time: 11:36 AM
 */

namespace Vain\Comparator\Exception;

use Vain\Comparator\ComparatorInterface;
use Vain\Comparator\Repository\ComparatorRepositoryInterface;

class DuplicateComparatorException extends ComparatorRepositoryException
{
    private $new;

    private $old;

    /**
     * DuplicateComparatorException constructor.
     * @param ComparatorRepositoryInterface $comparatorRepository
     * @param string $name
     * @param ComparatorInterface $new
     * @param ComparatorInterface $old
     */
    public function __construct(ComparatorRepositoryInterface $comparatorRepository, $name, ComparatorInterface $new, ComparatorInterface $old)
    {
        $this->new = $new;
        $this->old = $old;
        parent::__construct($comparatorRepository, sprintf('Trying to register comparator %s by the same alias %s as %s', get_class($new), $name, get_class($old)), 0, null);
    }

    /**
     * @return ComparatorInterface
     */
    public function getNew()
    {
        return $this->new;
    }

    /**
     * @return ComparatorInterface
     */
    public function getOld()
    {
        return $this->old;
    }

    
}