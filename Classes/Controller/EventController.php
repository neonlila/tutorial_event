<?php

declare(strict_types=1);

namespace Neon\TutorialEvent\Controller;

use \Neon\TutorialEvent\Domain\Service\EventService;
use \Psr\Http\Message\ResponseInterface;


class EventController {
    
    public function __construct(
        private readonly EventService $eventService
    ){}

    // indexAction is called first - 
    public function indexAction(): ResponseInterface {
        $revenue = $this->eventService->calculateTotalRevenue();
    }

    public function listAction(): ResponseInterface {
        // List your Events
    }

    public function showAction(): ResponseInterface {
        // Show a specific Event
    }

    public function createAction(): ResponseInterface {
        // Create a new Event
    }
}
