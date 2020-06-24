<?php

use Illuminate\Testing\TestResponse;
use Spatie\Snapshots\Driver;
use function Spatie\Snapshots\assertMatchesHtmlSnapshot;
use function Spatie\Snapshots\assertMatchesJsonSnapshot;
use function Spatie\Snapshots\assertMatchesSnapshot;
use function Spatie\Snapshots\assertMatchesTextSnapshot;
use function Spatie\Snapshots\assertMatchesXmlSnapshot;

/** @mixin TestResponse */
final class TestResponseMixin
{
    public function assertMatchesSnapshot(): Closure
    {
        /** @instantiated */
        return function (?Driver $driver = null): void {
            assertMatchesSnapshot($this->getContent(), $driver);
        };
    }

    public function assertMatchesHtmlSnapshot(): Closure
    {
        /** @instantiated */
        return function (): void {
            assertMatchesHtmlSnapshot($this->getContent());
        };
    }

    public function assertMatchesJsonSnapshot(): Closure
    {
        /** @instantiated */
        return function (): void {
            assertMatchesJsonSnapshot($this->getContent());
        };
    }

    public function assertMatchesTextSnapshot(): Closure
    {
        /** @instantiated */
        return function (): void {
            assertMatchesTextSnapshot($this->getContent());
        };
    }

    public function assertMatchesXmlSnapshot(): Closure
    {
        /** @instantiated */
        return function (): void {
            assertMatchesXmlSnapshot($this->getContent());
        };
    }
}
