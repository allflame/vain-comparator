<?php
/**
 * Created by PhpStorm.
 * User: allflame
 * Date: 4/4/16
 * Time: 12:15 PM
 */

namespace Vain\Comparator\Factory\Exception;

use Vain\Comparator\Factory\ComparatorFactoryInterface;
use Vain\Core\Exception\CoreException;

class ComparatorFactoryException extends CoreException
{
    private $factory;

    /**
     * VainComparatorFactoryException constructor.
     * @param ComparatorFactoryInterface $factory
     * @param string $message
     * @param int $code
     * @param \Exception $previous
     */
    public function __construct(ComparatorFactoryInterface $factory, $message, $code, \Exception $previous = null)
    {
        $this->factory = $factory;
        parent::__construct($message, $code, $previous);
    }
}