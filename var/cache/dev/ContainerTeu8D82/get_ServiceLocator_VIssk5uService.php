<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.vIssk5u' shared service.

return $this->privates['.service_locator.vIssk5u'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'continentRepository' => ['privates', 'App\\Repository\\ContinentRepository', 'getContinentRepositoryService.php', true],
    'encoder' => ['privates', 'App\\Assets\\AppEncoder', 'getAppEncoderService.php', true],
    'validator' => ['privates', 'App\\Assets\\AppValidatorBase64Images', 'getAppValidatorBase64ImagesService.php', true],
], [
    'continentRepository' => 'App\\Repository\\ContinentRepository',
    'encoder' => 'App\\Assets\\AppEncoder',
    'validator' => 'App\\Assets\\AppValidatorBase64Images',
]);
