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

/**
 * Interface ComparatorRepositoryInterface
 *
 * @author Taras P. Girnyk <taras.p.gyrnik@gmail.com>
 */
interface ComparatorRepositoryInterface
{
    /**
     * @param string              $name
     * @param ComparatorInterface $comparator
     *
     * @return ComparatorRepositoryInterface
     */
    public function addComparator(string $name, ComparatorInterface $comparator) : ComparatorRepositoryInterface;

    /**
     * @param string $name
     *
     * @return ComparatorInterface
     */
    public function getComparator(string $name) : ComparatorInterface;
}