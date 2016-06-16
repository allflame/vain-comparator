<?php
/**
 * Vain Framework
 *
 * PHP Version 7
 *
 * @package   vain-comparator
 * @license   https://opensource.org/licenses/MIT MIT License
 * @link      https://github.com/allflame/vain-comparator
 */
namespace Vain\Comparator\Exception;

use Vain\Comparator\ComparatorInterface;
use Vain\Core\Exception\CoreException;

/**
 * Class ComparatorException
 *
 * @author Taras P. Girnyk <taras.p.gyrnik@gmail.com>
 */
class ComparatorException extends CoreException
{
    private $comparator;

    /**
     * VainComparatorException constructor.
     *
     * @param ComparatorInterface $comparator
     * @param string              $message
     * @param int                 $code
     * @param \Exception          $previous
     */
    public function __construct(ComparatorInterface $comparator, $message, $code, \Exception $previous = null)
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