<?php
/**
 * Created by PhpStorm.
 * User: allflame
 * Date: 4/4/16
 * Time: 12:04 PM
 */

namespace Vain\Comparator\Exception;

use Vain\Comparator\ComparatorInterface;
use Vain\Core\Exception\CoreException;

class ComparatorException extends CoreException
{
    private $comparator;

    /**
     * VainComparatorException constructor.
     * @param ComparatorInterface $comparator
     * @param string $message
     * @param int $code
     * @param \Exception $previous
     */
    public function __construct(ComparatorInterface $comparator, $message, $code, \Exception $previous)
    {
        $this->comparator = $comparator;
        parent::__construct($message, $code, $previous);
    }

    /**
     * @return ComparatorInterface
     */
    public function getComparator()
    {
        return $this->comparator;
    }
}