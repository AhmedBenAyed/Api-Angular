<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.ZF0fvd.' shared service.

return $this->privates['.service_locator.ZF0fvd.'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'countryRepository' => ['privates', 'App\\Repository\\CountryRepository', 'getCountryRepositoryService.php', true],
    'encoder' => ['privates', 'App\\Assets\\AppEncoder', 'getAppEncoderService.php', true],
], [
    'countryRepository' => 'App\\Repository\\CountryRepository',
    'encoder' => 'App\\Assets\\AppEncoder',
]);
