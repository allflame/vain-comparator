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

use Vain\Comparator\Repository\ComparatorRepositoryInterface;
use Vain\Core\Exception\AbstractCoreException;

/**
 * Class ComparatorRepositoryException
 *
 * @author Taras P. Girnyk <taras.p.gyrnik@gmail.com>
 */
class ComparatorRepositoryException extends AbstractCoreException
{
    private $comparatorRepository;

    /**
     * ComparatorRepositoryException constructor.
     *
     * @param ComparatorRepositoryInterface $comparatorRepository
     * @param string                        $message
     * @param int                           $code
     * @param \Exception                    $previous
     */
    public function __construct(
        ComparatorRepositoryInterface $comparatorRepository,
        string $message,
        int $code,
        \Exception $previous = null
    ) {
        $this->comparatorRepository = $comparatorRepository;
        parent::__construct($message, $code, $previous);
    }

    /**
     * @return ComparatorRepositoryInterface
     */
    public function getComparatorRepository() : ComparatorRepositoryInterface
    {
        return $this->comparatorRepository;
    }
}