<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.s8tKQlA' shared service.

return $this->privates['.service_locator.s8tKQlA'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'e' => ['privates', '.errored..service_locator.s8tKQlA.Exception', NULL, 'Cannot autowire service ".service_locator.s8tKQlA": it references class "Exception" but no such service exists.'],
], [
    'e' => 'Exception',
]);
