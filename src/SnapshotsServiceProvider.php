<?php

namespace Astrotomic\Snapshots\Laravel;

use Astrotomic\Snapshots\Laravel\Mixins\TestResponseMixin;
use Illuminate\Support\ServiceProvider;
use Illuminate\Testing\TestResponse;

class SnapshotsServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        TestResponse::mixin(new TestResponseMixin());
    }
}
