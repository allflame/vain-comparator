<?php
/**
 * Created by PhpStorm.
 * User: allflame
 * Date: 4/4/16
 * Time: 12:15 PM
 */

namespace Vain\Comparator\Factory\Exception;

use Vain\Comparator\Factory\FactoryInterface;
use Vain\Core\Exception\CoreException;

class FactoryException extends CoreException
{
    private $factory;

    /**
     * VainComparatorFactoryException constructor.
     * @param FactoryInterface $factory
     * @param string $message
     * @param int $code
     * @param \Exception $previous
     */
    public function __construct(FactoryInterface $factory, $message, $code, \Exception $previous)
    {
        $this->factory = $factory;
        parent::__construct($message, $code, $previous);
    }
}