<?php
/**
 * Created by PhpStorm.
 * User: allflame
 * Date: 4/4/16
 * Time: 8:17 PM
 */

namespace Vain\Comparator\Repository\Exception;

use Vain\Comparator\Repository\VainComparatorRepositoryInterface;
use Vain\Core\Exception\VainCoreException;

class VainComparatorRepositoryException extends VainCoreException
{
    private $repository;

    /**
     * VainComparatorRepositoryException constructor.
     * @param VainComparatorRepositoryInterface $comparatorRepository
     * @param string $message
     * @param int $code
     * @param \Exception $previous
     */
    public function __construct(VainComparatorRepositoryInterface $comparatorRepository, $message, $code, \Exception $previous)
    {
        $this->repository = $comparatorRepository;
        parent::__construct($message, $code, $previous);
    }

    /**
     * @return VainComparatorRepositoryInterface
     */
    public function getRepository()
    {
        return $this->repository;
    }
}