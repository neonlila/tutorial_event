<?php
// types should be strict
declare(strict_types=1);

// namespace is important - addressing your model, repo, validator 
namespace Neon\TutorialEvent\Domain\Model;

// extends default Entity if needed
class Event extends AbstractEntity {

    // constructor - property
    public function __construct (
        private string $title,
        private float $price,
        private int $participants 
    ){}

    // getter for your properties
    public function getTitle(): string {
        return $this->title;
    }

    public function getPrice(): float {
        return $this->price;
    }

    public function getParticipants(): int {
        return $this->participants;
    }

    // setter if needed - void because you dont want to return anything
    public function setTitle(string $title): void {
        $this->title = $title;
    }

    public function setPrice(float $price): void {
        $this->price = $price;
    }

    public function setParticipants(int $participants): void {
        $this->participants = $participants;
    }
}