<?php

declare(strict_types=1);

namespace Neon\TutorialEvent\Domain\Repository;

// call your Domain Model and TYPO3 default repository
use Neon\TutorialEvent\Domain\Event;
use TYPO3\CMS\Extbase\Persistence\Repository;

class EventRepository extends Repository {

    // findAll, findBy, findById, findByIdentifier, findOneBy, count, countAll
    // you can redefine it, if you want
    public function findAll(): array {}

    // if you want, you can define your own function 
    // using QueryBuilder 
    public function findWhatEver(): array {
       
    }

}