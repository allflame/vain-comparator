<?php
/**
 * Created by PhpStorm.
 * User: allflame
 * Date: 6/14/16
 * Time: 1:03 PM
 */

namespace Vain\Comparator\Exception;

use Vain\Comparator\Repository\ComparatorRepositoryInterface;
use Vain\Core\Exception\CoreException;

class ComparatorRepositoryException extends CoreException
{
    private $comparatorRepository;

    /**
     * ComparatorRepositoryException constructor.
     * @param ComparatorRepositoryInterface $comparatorRepository
     * @param string $message
     * @param int $code
     * @param \Exception$previous
     */
    public function __construct(ComparatorRepositoryInterface $comparatorRepository, $message, $code, \Exception $previous = null)
    {
        $this->comparatorRepository = $comparatorRepository;
        parent::__construct($message, $code, $previous);
    }

    /**
     * @return ComparatorRepositoryInterface
     */
    public function getComparatorRepository()
    {
        return $this->comparatorRepository;
    }
}