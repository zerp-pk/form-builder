<?php

namespace Zerp\FormBuilder\Tests;

use Orchestra\Testbench\TestCase as Orchestra;
use Zerp\FormBuilder\Providers\FormBuilderServiceProvider;

abstract class TestCase extends Orchestra
{
    protected function getPackageProviders($app): array
    {
        return [FormBuilderServiceProvider::class];
    }
}
