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
declare(strict_types=1);

namespace Vain\Comparator\Exception;

use Vain\Comparator\ComparatorInterface;
use Vain\Comparator\Repository\ComparatorRepositoryInterface;

/**
 * Class DuplicateComparatorException
 *
 * @author Taras P. Girnyk <taras.p.gyrnik@gmail.com>
 */
class DuplicateComparatorException extends ComparatorRepositoryException
{
    private $new;

    private $old;

    /**
     * DuplicateComparatorException constructor.
     *
     * @param ComparatorRepositoryInterface $comparatorRepository
     * @param string                        $name
     * @param ComparatorInterface           $new
     * @param ComparatorInterface           $old
     */
    public function __construct(
        ComparatorRepositoryInterface $comparatorRepository,
        string $name,
        ComparatorInterface $new,
        ComparatorInterface $old
    ) {
        $this->new = $new;
        $this->old = $old;
        parent::__construct(
            $comparatorRepository,
            sprintf(
                'Trying to register comparator %s by the same alias %s as %s',
                get_class($new),
                $name,
                get_class($old)
            ),
            0,
            null
        );
    }

    /**
     * @return ComparatorInterface
     */
    public function getNew() : ComparatorInterface
    {
        return $this->new;
    }

    /**
     * @return ComparatorInterface
     */
    public function getOld() : ComparatorInterface
    {
        return $this->old;
    }
}