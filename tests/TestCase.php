<?php

namespace Astrotomic\Snapshots\Laravel\Tests;

use Astrotomic\Snapshots\Laravel\SnapshotsServiceProvider;
use Orchestra\Testbench\TestCase as OrchestraTestCase;

abstract class TestCase extends OrchestraTestCase
{
    public function getPackageProviders($app)
    {
        return [
            SnapshotsServiceProvider::class,
        ];
    }
}
