<?php
/**
 * Created by PhpStorm.
 * User: allflame
 * Date: 4/4/16
 * Time: 8:17 PM
 */

namespace Vain\Comparator\Repository\Exception;

use Vain\Comparator\Repository\RepositoryInterface;
use Vain\Core\Exception\CoreException;

class RepositoryException extends CoreException
{
    private $repository;

    /**
     * VainComparatorRepositoryException constructor.
     * @param RepositoryInterface $comparatorRepository
     * @param string $message
     * @param int $code
     * @param \Exception $previous
     */
    public function __construct(RepositoryInterface $comparatorRepository, $message, $code, \Exception $previous)
    {
        $this->repository = $comparatorRepository;
        parent::__construct($message, $code, $previous);
    }

    /**
     * @return RepositoryInterface
     */
    public function getRepository()
    {
        return $this->repository;
    }
}