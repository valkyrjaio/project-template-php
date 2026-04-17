<p align="center"><a href="https://valkyrja.io" target="_blank">
    <img src="https://raw.githubusercontent.com/valkyrjaio/art/refs/heads/master/long-banner/orange/php.png" width="100%">
</a></p>

# PHP Template

A PHP package template for the [Valkyrja][Valkyrja url] PHP framework.

About Repository
----------------

> This repository is a template for creating new Valkyrja PHP packages.

<p>
    <a href="https://packagist.org/packages/valkyrja/php-template"><img src="https://poser.pugx.org/valkyrja/php-template/require/php" alt="PHP Version Require"></a>
    <a href="https://packagist.org/packages/valkyrja/php-template"><img src="https://poser.pugx.org/valkyrja/php-template/v" alt="Latest Stable Version"></a>
    <a href="https://packagist.org/packages/valkyrja/php-template"><img src="https://poser.pugx.org/valkyrja/php-template/license" alt="License"></a>
    <a href="https://scrutinizer-ci.com/g/valkyrjaio/php-template/?branch=master"><img src="https://scrutinizer-ci.com/g/valkyrjaio/php-template/badges/quality-score.png?b=master" alt="Scrutinizer"></a>
    <a href="https://coveralls.io/github/valkyrjaio/php-template?branch=master"><img src="https://coveralls.io/repos/github/valkyrjaio/php-template/badge.svg?branch=master" alt="Coverage Status" /></a>
    <a href="https://shepherd.dev/github/valkyrjaio/php-template"><img src="https://shepherd.dev/github/valkyrjaio/php-template/coverage.svg" alt="Psalm Shepherd" /></a>
    <a href="https://sonarcloud.io/summary/new_code?id=valkyrjaio_php-template"><img src="https://sonarcloud.io/api/project_badges/measure?project=valkyrjaio_php-template&metric=sqale_rating" alt="Maintainability Rating" /></a>
</p>

Build Status
------------

<table>
    <tbody>
        <tr>
            <td>Linting</td>
            <td>
                <a href="https://github.com/valkyrjaio/php-template/actions/workflows/phpcodesniffer.yml?query=branch%3Amaster"><img src="https://github.com/valkyrjaio/php-template/actions/workflows/phpcodesniffer.yml/badge.svg?branch=master" alt="PHP Code Sniffer Build Status"></a>
            </td>
            <td>
                <a href="https://github.com/valkyrjaio/php-template/actions/workflows/phpcsfixer.yml?query=branch%3Amaster"><img src="https://github.com/valkyrjaio/php-template/actions/workflows/phpcsfixer.yml/badge.svg?branch=master" alt="PHP CS Fixer Build Status"></a>
            </td>
        </tr>
        <tr>
            <td>Coding Rules</td>
            <td>
                <a href="https://github.com/valkyrjaio/php-template/actions/workflows/phparkitect.yml?query=branch%3Amaster"><img src="https://github.com/valkyrjaio/php-template/actions/workflows/phparkitect.yml/badge.svg?branch=master" alt="PHPArkitect Build Status"></a>
            </td>
            <td>
                <a href="https://github.com/valkyrjaio/php-template/actions/workflows/rector.yml?query=branch%3Amaster"><img src="https://github.com/valkyrjaio/php-template/actions/workflows/rector.yml/badge.svg?branch=master" alt="Rector Build Status"></a>
            </td>
        </tr>
        <tr>
            <td>Static Analysis</td>
            <td>
                <a href="https://github.com/valkyrjaio/php-template/actions/workflows/phpstan.yml?query=branch%3Amaster"><img src="https://github.com/valkyrjaio/php-template/actions/workflows/phpstan.yml/badge.svg?branch=master" alt="PHPStan Build Status"></a>
            </td>
            <td>
                <a href="https://github.com/valkyrjaio/php-template/actions/workflows/psalm.yml?query=branch%3Amaster"><img src="https://github.com/valkyrjaio/php-template/actions/workflows/psalm.yml/badge.svg?branch=master" alt="Psalm Build Status"></a>
            </td>
        </tr>
        <tr>
            <td>Testing</td>
            <td>
                <a href="https://github.com/valkyrjaio/php-template/actions/workflows/phpunit.yml?query=branch%3Amaster"><img src="https://github.com/valkyrjaio/php-template/actions/workflows/phpunit.yml/badge.svg?branch=master" alt="PHPUnit Build Status"></a>
            </td>
            <td></td>
        </tr>
    </tbody>
</table>

Versioning and Release Process
------------------------------

This package uses [semantic versioning][semantic versioning url] with a major
release every year, and support for each major version for 2 years from the
date of release.

For more information view our
[Versioning and Release Process documentation][Versioning and Release Process url].

### Supported Versions

Bug fixes will be provided until 3 months after the next major release. Security
fixes will be provided for 2 years after the initial release.

| Version | PHP (*)   | Release        | Bug Fixes Until | Security Fixes Until |
|:--------|:----------|:---------------|:----------------|:---------------------|
| 26      | 8.4 - 8.6 | March 31, 2026 | Q2 2027         | Q1 2028              |
| 27      | 8.5 - 8.6 | Q1 2027        | Q2 2028         | Q1 2029              |
| 28      | 8.6+      | Q1 2028        | Q2 2029         | Q1 2030              |

(*) Supported PHP versions

Contributing
------------

This package is an Open Source, community-driven project.

Thank you for your interest in contributing!

You can find more information in our
[Contributing documentation][contributing url].

Security Issues
---------------

If you discover a security vulnerability, please follow our
[disclosure procedure][security vulnerabilities url].

License
-------

This package is open-sourced software licensed under
the [MIT license][MIT license url]. You can view the
[Valkyrja License here][license url].

[Valkyrja url]: https://valkyrja.io

[Versioning and Release Process url]: ./VERSIONING_AND_RELEASE_PROCESS.md

[security vulnerabilities url]: https://github.com/valkyrjaio/.github/SECURITY.md

[semantic versioning url]: https://semver.org/

[MIT license url]: https://opensource.org/licenses/MIT

[license url]: ./LICENSE.md

[contributing url]: https://github.com/valkyrjaio/.github/CONTRIBUTING.md