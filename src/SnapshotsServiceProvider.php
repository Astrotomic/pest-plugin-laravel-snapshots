<?php

namespace Astrotomic\Snapshots\Laravel;

use Illuminate\Support\ServiceProvider;
use Illuminate\Testing\TestResponse;
use TestResponseMixin;

class SnapshotsServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        TestResponse::mixin(new TestResponseMixin());
    }
}
