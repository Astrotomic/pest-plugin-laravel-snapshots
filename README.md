# Pest Laravel Snapshot Assertions

[![Latest Version](http://img.shields.io/packagist/v/astrotomic/pest-plugin-laravel-snapshots.svg?label=Release&style=for-the-badge)](https://packagist.org/packages/astrotomic/pest-plugin-laravel-snapshots)
[![MIT License](https://img.shields.io/github/license/Astrotomic/pest-plugin-laravel-snapshots.svg?label=License&color=blue&style=for-the-badge)](https://github.com/Astrotomic/pest-plugin-laravel-snapshots/blob/master/LICENSE)
[![Offset Earth](https://img.shields.io/badge/Treeware-%F0%9F%8C%B3-green?style=for-the-badge)](https://plant.treeware.earth/Astrotomic/pest-plugin-laravel-snapshots)

[![GitHub Workflow Status](https://img.shields.io/github/workflow/status/Astrotomic/pest-plugin-laravel-snapshots/run-tests?style=flat-square&logoColor=white&logo=github&label=Tests)](https://github.com/Astrotomic/pest-plugin-laravel-snapshots/actions?query=workflow%3Arun-tests)
[![StyleCI](https://styleci.io/repos/274524196/shield)](https://styleci.io/repos/274524196)
[![Total Downloads](https://img.shields.io/packagist/dt/astrotomic/pest-plugin-laravel-snapshots.svg?label=Downloads&style=flat-square)](https://packagist.org/packages/astrotomic/pest-plugin-laravel-snapshots)

This package adds snapshot testing capabilities to Laravel HTTP test with **[Pest](https://pestphp.com)**.
It uses the [phpunit-snapshot-assertions](https://github.com/spatie/phpunit-snapshot-assertions) package making
snapshot assertions available in Pest HTTP tests.

## Installation

You can install the package via composer:

```bash
composer require astrotomic/pest-plugin-laravel-snapshots
```

## Usage

At first you should use `[orchestra/testbench](https://github.com/orchestral/testbench)` which adds the HTTP helper methods that return a `\Illuminate\Testing\TestResponse` instance.

```php
use Orchestra\Testbench\TestCase;
uses(TestCase::class);

// long
test('html response body matches with snapshot')
    ->get('/html')
    ->assertMatchesHtmlSnapshot();

// short
// https://github.com/pestphp/pest-plugin-laravel
use function Pest\Laravel\get;
get('/html')->assertMatchesHtmlSnapshot();
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](https://github.com/Astrotomic/.github/blob/master/CONTRIBUTING.md) for details. You could also be interested in [CODE OF CONDUCT](https://github.com/Astrotomic/.github/blob/master/CODE_OF_CONDUCT.md).

### Security

If you discover any security related issues, please check [SECURITY](https://github.com/Astrotomic/.github/blob/master/SECURITY.md) for steps to report it.

## Credits

-   [Tom Witkowski](https://github.com/Gummibeer)
-   [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

## Treeware

You're free to use this package, but if it makes it to your production environment I would highly appreciate you buying the world a tree.

It’s now common knowledge that one of the best tools to tackle the climate crisis and keep our temperatures from rising above 1.5C is to [plant trees](https://www.bbc.co.uk/news/science-environment-48870920). If you contribute to my forest you’ll be creating employment for local families and restoring wildlife habitats.

You can buy trees at [offset.earth/treeware](https://plant.treeware.earth/Astrotomic/pest-plugin-laravel-snapshots)

Read more about Treeware at [treeware.earth](https://treeware.earth)
