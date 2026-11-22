# Alle konfigurierten Tests ausführen
vendor/bin/phpunit

# Nur eine bestimmte Testsuite ausführen
vendor/bin/phpunit --testsuite Unit

# Nur eine einzelne Testdatei ausführen
vendor/bin/phpunit packages/tutorial_event/Tests/Unit/Domain/Model/EventTest.php

# Nur Tests mit passendem Methodennamen ausführen
vendor/bin/phpunit --filter testReserveSeatsReducesAvailableSeats

In der Praxis kapselt man das gerne in composer.json, damit alle im Team denselben Befehl nutzen:

{
  "scripts": {
    "test:unit": "phpunit --testsuite Unit"
  }
}

Dann kann man "composer test:unit" nutzen


Beispiel für einen simplen GitHub-Actions-Workflow (.github/workflows/tests.yml):
Automatisiert in der CI/CD-Pipeline | Bei jedem Push wird der workflow durchlaufen
- schlägt ein Test fehl, wird abgebrochen

name: Tests

on:
  push:
    branches: [ main ]
  pull_request:

jobs:
  unit-tests:
    runs-on: ubuntu-latest
    steps:
      - uses: actions/checkout@v4

      - name: Setup PHP
        uses: shivammathur/setup-php@v2
        with:
          php-version: '8.3'
          tools: composer

      - name: Install dependencies
        run: composer install --prefer-dist --no-progress --no-interaction

      - name: Run unit tests
        run: composer test:unit