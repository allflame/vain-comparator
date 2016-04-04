<?php
/**
 * Created by PhpStorm.
 * User: allflame
 * Date: 4/4/16
 * Time: 12:15 PM
 */

namespace Vain\Comparator\Factory\Exception;


use Vain\Comparator\Factory\VainComparatorFactoryInterface;
use Vain\Core\Exception\VainCoreException;

class VainComparatorFactoryException extends VainCoreException
{
    private $factory;

    /**
     * VainComparatorFactoryException constructor.
     * @param VainComparatorFactoryInterface $factory
     * @param string $message
     * @param int $code
     * @param \Exception $previous
     */
    public function __construct(VainComparatorFactoryInterface $factory, $message, $code, \Exception $previous)
    {
        $this->factory = $factory;
        parent::__construct($message, $code, $previous);
    }
}