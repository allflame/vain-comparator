<?php
/**
 * Vain Framework
 *
 * PHP Version 7
 *
 * @package   vain-expression
 * @license   https://opensource.org/licenses/MIT MIT License
 * @link      https://github.com/allflame/vain-expression
 */
namespace Vain\Comparator\Exception;

use Vain\Comparator\Repository\ComparatorRepositoryInterface;

/**
 * Class UnknownComparatorException
 *
 * @author Taras P. Girnyk <taras.p.gyrnik@gmail.com>
 */
class UnknownComparatorException extends ComparatorRepositoryException
{
    /**
     * UnknownComparatorException constructor.
     *
     * @param ComparatorRepositoryInterface $comparatorRepository
     * @param string                        $name
     */
    public function __construct(ComparatorRepositoryInterface $comparatorRepository, $name)
    {
        parent::__construct($comparatorRepository, sprintf('Comparator %s is not registered', $name), 0);
    }
}