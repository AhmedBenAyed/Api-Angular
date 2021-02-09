<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.ogGA3nh' shared service.

return $this->privates['.service_locator.ogGA3nh'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'activityRepository' => ['privates', 'App\\Repository\\ActivityRepository', 'getActivityRepositoryService.php', true],
    'encoder' => ['privates', 'App\\Assets\\AppEncoder', 'getAppEncoderService.php', true],
], [
    'activityRepository' => 'App\\Repository\\ActivityRepository',
    'encoder' => 'App\\Assets\\AppEncoder',
]);
