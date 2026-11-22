# Tutorial Event (`tutorial_event`)

A TYPO3 extension / package for managing and displaying events (built as part of a TYPO3 tutorial/workshop).

> **Note:** Replace `[bracketed placeholders]` with the specific details from your repository (TYPO3 version, extension key/composer name, routes, and configuration).

## Requirements

- **PHP:** `^8.2` (adjust to your `composer.json`)
- **TYPO3:** `^14.3` (adjust to your `composer.json`)
- **Composer** (and **DDEV** / **Docker**, if used locally)

## Installation

### Via Composer (Path Repository / Local Package)

If the package lives in `packages/tutorial_event` (or similar), add it to your root `composer.json`:

```json
{
  "repositories": [
    {
      "type": "path",
      "url": "packages/tutorial_event"
    }
  ],
  "require": {
    "neon/tutorial-event": "@dev"
  }
}