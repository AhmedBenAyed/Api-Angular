<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.ZygwlZm' shared service.

return $this->privates['.service_locator.ZygwlZm'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'hosting' => ['privates', '.errored..service_locator.ZygwlZm.App\\Entity\\Hosting', NULL, 'Cannot autowire service ".service_locator.ZygwlZm": it references class "App\\Entity\\Hosting" but no such service exists.'],
], [
    'hosting' => 'App\\Entity\\Hosting',
]);
