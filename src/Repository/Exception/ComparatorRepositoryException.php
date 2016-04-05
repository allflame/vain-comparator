<?php
/**
 * Created by PhpStorm.
 * User: allflame
 * Date: 4/4/16
 * Time: 8:17 PM
 */

namespace Vain\Comparator\Repository\Exception;

use Vain\Comparator\Repository\ComparatorRepositoryInterface;
use Vain\Core\Exception\CoreException;

class ComparatorRepositoryException extends CoreException
{
    private $repository;

    /**
     * VainComparatorRepositoryException constructor.
     * @param ComparatorRepositoryInterface $comparatorRepository
     * @param string $message
     * @param int $code
     * @param \Exception $previous
     */
    public function __construct(ComparatorRepositoryInterface $comparatorRepository, $message, $code, \Exception $previous = null)
    {
        $this->repository = $comparatorRepository;
        parent::__construct($message, $code, $previous);
    }

    /**
     * @return ComparatorRepositoryInterface
     */
    public function getRepository()
    {
        return $this->repository;
    }
}