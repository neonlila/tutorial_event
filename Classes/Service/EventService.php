<?php

declare(strict_types=1);

namespace Neon\TutorialEvent\Service;

// use your repository and validator
use Neon\TutorialEvent\Domain\Repository\EventRepository;
use Neon\TutorialEvent\Domain\Validator\EventValidator;


// best practice is to inject dependencies through the constructor
// also make a service for specific tasks or a group of relatable tasks
class EventService {
    
    // c
    public function __construct(
        private readonly EventRepository $eventRepository,
        private readonly EventValidator $eventValidator
    ){}

    // revenue calculation
    public function calculateTotalRevenue(): float {
        $events = $this->eventRepository->findAll();
        $totalRevenue = 0;

        foreach ($events as $event) {
            if ($this->eventValidator->isValid($event)) {
                $totalRevenue += $event->getPrice() * $event->getParticipants();
            }
        }

        return $totalRevenue;
    }

    // something else price relatable

}
