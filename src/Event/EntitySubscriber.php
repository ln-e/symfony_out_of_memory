<?php

namespace App\Event;

use App\Service\Service;
use Doctrine\Common\EventSubscriber;

class EntitySubscriber implements EventSubscriber
{
    /**
     * @var Service
     */
    private $service;

    /**
     * EntitySubscriber constructor.
     *
     * @param Service $service
     */
    public function __construct(Service $service)
    {
        $this->service = $service;
    }

    /**
     * Returns an array of events this subscriber wants to listen to.
     *
     * @return string[]
     */
    public function getSubscribedEvents()
    {
        return [
            'postPersist',
            'postUpdate',
        ];
    }

    public function postPersist() {

    }

    public function postUpdate() {

    }
}
