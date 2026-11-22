<?php

declare(strict_types=1);

namespace Neon\TutorialEvent\Domain\Validator;

use Neon\TutorialEvent\Domain\Model\Event;

class EventValidator {
    
    // Validates an event - simple check for title, price, participants
    public function isValid(Event $event): bool {

        // Check if the title is set
        if($event->getTitle() === '') {
            return false;
        }

        // Check if the price is valid
        if($event->getPrice() < 0) {
            return false;
        }

        // Check if the number of participants is valid
        if($event->getParticipants() < 0) {
            return false;
        }

        return true;
    }

}