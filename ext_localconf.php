<?php

defined('TYPO3') or die();

use Neon\TutorialEvent\Controller\EventController;
use TYPO3\CMS\Extbase\Utility\ExtensionUtility;

ExtensionUtility::configurePlugin(
  'Event',
  'EventList',
  // this actions are cached // here you can add your list, show, create action
  [EventController::class => 'index'],
  // The create action persists a new event and must not be cached:
  [EventController::class => 'create'],
);
