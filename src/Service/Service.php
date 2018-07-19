<?php

namespace App\Service;

use Doctrine\ORM\EntityManagerInterface;

/**
 * Class Service
 */
class Service
{
    /**
     * @var EntityManagerInterface
     */
    private $em;

    /**
     * Service constructor.
     * @param EntityManagerInterface $em
     */
    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }
}
