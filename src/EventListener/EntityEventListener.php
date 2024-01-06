<?php

namespace App\EventListener;

use App\Entity\NotifiableEntityEventInterface;
use Doctrine\Bundle\DoctrineBundle\Attribute\AsDoctrineListener;
use Doctrine\ORM\Events;
use Doctrine\ORM\Event\PostPersistEventArgs;
use Doctrine\ORM\Event\PrePersistEventArgs;
use Psr\Log\LoggerInterface;

#[AsDoctrineListener(event: Events::prePersist, priority: 500, connection: 'default')]
#[AsDoctrineListener(event: Events::postPersist, priority: 500, connection: 'default')]
class EntityEventListener
{
    private LoggerInterface $logger;

    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    public function postPersist(PostPersistEventArgs $args): void
    {
        $entity = $args->getObject();
        if (!$entity instanceof NotifiableEntityEventInterface) {
            return;
        }

        $this->logger->info(__METHOD__ . ' called for ' . get_class($entity), ['args' => $args]);
    }

    public function prePersist(PrePersistEventArgs $args)
    {
        $entity = $args->getObject();
        if (!$entity instanceof NotifiableEntityEventInterface) {
            return;
        }

        $this->logger->info(__METHOD__ . ' called for ' . get_class($entity), ['args' => $args]);
    }
}