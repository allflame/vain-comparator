<?php
/**
 * Created by PhpStorm.
 * User: allflame
 * Date: 4/4/16
 * Time: 12:04 PM
 */

namespace Vain\Comparator\Exception;

use Vain\Comparator\VainComparatorInterface;
use Vain\Core\Exception\VainCoreException;

class VainComparatorException extends VainCoreException
{
    private $comparator;

    /**
     * VainComparatorException constructor.
     * @param VainComparatorInterface $comparator
     * @param string $message
     * @param int $code
     * @param \Exception $previous
     */
    public function __construct(VainComparatorInterface $comparator, $message, $code, \Exception $previous)
    {
        $this->comparator = $comparator;
        parent::__construct($message, $code, $previous);
    }

    /**
     * @return VainComparatorInterface
     */
    public function getComparator()
    {
        return $this->comparator;
    }
}