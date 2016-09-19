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
declare(strict_types = 1);

namespace Vain\Comparator\Repository;

use Vain\Comparator\ComparatorInterface;
use Vain\Comparator\Exception\DuplicateComparatorException;
use Vain\Comparator\Exception\UnknownComparatorException;

/**
 * Class ComparatorRepository
 *
 * @author Taras P. Girnyk <taras.p.gyrnik@gmail.com>
 */
class ComparatorRepository implements ComparatorRepositoryInterface
{
    private $comparators;

    /**
     * ComparatorRepository constructor.
     *
     * @param array $comparators
     */
    public function __construct(array $comparators = [])
    {
        $this->comparators = $comparators;
    }

    /**
     * @inheritDoc
     */
    public function addComparator(string $name, ComparatorInterface $comparator) : ComparatorRepositoryInterface
    {
        if (array_key_exists($name, $this->comparators)) {
            throw new DuplicateComparatorException($this, $name, $comparator, $this->comparators[$name]);
        }
        $this->comparators[$name] = $comparator;

        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getComparator(string $name) : ComparatorInterface
    {
        if (false === array_key_exists($name, $this->comparators)) {
            throw new UnknownComparatorException($this, $name);
        }

        return $this->comparators[$name];
    }
}