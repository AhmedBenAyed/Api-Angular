<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.NR9L4jU' shared service.

return $this->privates['.service_locator.NR9L4jU'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'activity' => ['privates', '.errored..service_locator.NR9L4jU.App\\Entity\\Activity', NULL, 'Cannot autowire service ".service_locator.NR9L4jU": it references class "App\\Entity\\Activity" but no such service exists.'],
    'encoder' => ['privates', 'App\\Assets\\AppEncoder', 'getAppEncoderService.php', true],
], [
    'activity' => 'App\\Entity\\Activity',
    'encoder' => 'App\\Assets\\AppEncoder',
]);
