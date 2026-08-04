<p align="center"><a href="https://valkyrja.io" target="_blank">
    <img src="https://raw.githubusercontent.com/valkyrjaio/art/refs/heads/26.x/long-banner/orange/php.png" width="100%">
</a></p>

# Project Template (PHP)

A starter template for creating new PHP repositories in the Valkyrjaio
organization.

This template ships with the full Valkyrja CI pipeline pre-wired (PHPStan,
Psalm, PHPCodeSniffer, PHP CS Fixer, PHPArkitect, Rector, PHPUnit), a
minimal composer setup, and the repository conventions used across the
rest of the org. Use it as the starting point for any new PHP package,
CI tool config, or integration repo — not for end-user applications built
on the Valkyrja framework (use [`valkyrja-starter-app-php`][starter url]
for that).

<p>
    <a href="https://packagist.org/packages/valkyrja/php-template"><img src="https://poser.pugx.org/valkyrja/php-template/v" alt="Latest Stable Version"></a>
    <a href="https://packagist.org/packages/valkyrja/php-template"><img src="https://poser.pugx.org/valkyrja/php-template/require/php" alt="PHP Version Require"></a>
    <a href="https://packagist.org/packages/valkyrja/php-template"><img src="https://poser.pugx.org/valkyrja/php-template/license" alt="License"></a>
    <a href="https://github.com/valkyrjaio/project-template-php/actions/workflows/ci.yml?query=branch%3A26.x"><img src="https://github.com/valkyrjaio/project-template-php/actions/workflows/ci.yml/badge.svg?branch=26.x" alt="CI Status"></a>
    <a href="https://scrutinizer-ci.com/g/valkyrjaio/project-template-php/?branch=26.x"><img src="https://scrutinizer-ci.com/g/valkyrjaio/project-template-php/badges/quality-score.png?b=26.x" alt="Scrutinizer"></a>
    <a href="https://coveralls.io/github/valkyrjaio/project-template-php?branch=26.x"><img src="https://coveralls.io/repos/github/valkyrjaio/project-template-php/badge.svg?branch=26.x" alt="Coverage Status" /></a>
    <a href="https://shepherd.dev/github/valkyrjaio/project-template-php"><img src="https://shepherd.dev/github/valkyrjaio/project-template-php/coverage.svg" alt="Psalm Shepherd" /></a>
    <a href="https://sonarcloud.io/summary/new_code?id=valkyrjaio_php-template"><img src="https://sonarcloud.io/api/project_badges/measure?project=valkyrjaio_php-template&metric=sqale_rating" alt="Maintainability Rating" /></a>
</p>

Usage
-----

### Use this template _(recommended)_

This repository is a GitHub template. Click the **Use this template** button
at the top of the repo to create a new repository in the Valkyrjaio
organization, pre-populated with the template's structure and CI.

### After Creating Your Repo

1. Update `composer.json` with your package's name, description, and
   autoload namespace
2. Replace `Project Template` in `.github/ci/phpcsfixer/.php_cs.dist.php` with
   the name of the new package (for example `Sindri`)
   - See [`COPYRIGHT_HEADER.md`][copyright header url] for the name that your
     repository uses
   - PHP CS Fixer enforces this license header on every file outside
     `.github`
   - Run `composer phpcsfixer` to write the new name into each file
   - PHP CS Fixer replaces a header that you edit by hand, so change the name
     in `.php_cs.dist.php` only
3. Replace the contents of `src/` with your package's source code
4. Update this `README.md` to describe the new package
5. Configure the required secrets and variables — see
   [`REPOSITORY_NAMING.md`][repository naming url] for naming guidance and
   `.github`'s workflow documentation for secret requirements
6. Verify CI passes on the first commit

What's Included
---------------

- **Full CI pipeline** — the same PHPStan, Psalm, PHPCodeSniffer, PHP CS
  Fixer, PHPArkitect, Rector, and PHPUnit configuration used across every
  Valkyrjaio PHP repo
- **Composer configuration** — `composer.json` with scripts for each CI
  tool, matching the org convention
- **Repository conventions** — aligned with
  [`REPOSITORY_NAMING.md`][repository naming url] and
  [`VOCABULARY.md`][vocabulary url]

Versioning and Release Process
------------------------------

This template follows [semantic versioning][semantic versioning url] with a
major release every year, and support for each major version for 2 years
from the date of release.

For more information see our
[Versioning and Release Process documentation][Versioning and Release Process url].

### Supported Versions

Bug fixes are provided until 3 months after the next major release. Security
fixes are provided for 2 years after the initial release.

| Version | PHP       | Release        | Bug Fixes Until | Security Fixes Until |
| :------ | :-------- | :------------- | :-------------- | :------------------- |
| 26      | 8.4 – 8.6 | March 31, 2026 | Q2 2027         | Q1 2028              |
| 27      | 8.5 – 8.6 | Q1 2027        | Q2 2028         | Q1 2029              |
| 28      | 8.6+      | Q1 2028        | Q2 2029         | Q1 2030              |

Contributing
------------

This template is an open-source, community-driven project. Improvements to
the template itself — refinements to the included CI configuration, composer
setup, or documentation — are welcome.

See [`CONTRIBUTING.md`][contributing url] for the submission process and
[`VOCABULARY.md`][vocabulary url] for the terminology used across Valkyrja.

Security Issues
---------------

If you discover a security vulnerability, please follow our
[disclosure procedure][security vulnerabilities url].

License
-------

This template is open-source software licensed under the
[MIT license][MIT license url]. See [`LICENSE.md`](./LICENSE.md).

[Valkyrja url]: https://valkyrja.io
[starter url]: https://github.com/valkyrjaio/valkyrja-starter-app-php
[repository naming url]: https://github.com/valkyrjaio/.github/blob/26.x/REPOSITORY_NAMING.md
[copyright header url]: https://github.com/valkyrjaio/.github/blob/26.x/COPYRIGHT_HEADER.md
[vocabulary url]: https://github.com/valkyrjaio/.github/blob/26.x/VOCABULARY.md
[contributing url]: https://github.com/valkyrjaio/.github/blob/26.x/CONTRIBUTING.md
[security vulnerabilities url]: https://github.com/valkyrjaio/.github/blob/26.x/SECURITY.md
[Versioning and Release Process url]: ./VERSIONING_AND_RELEASE_PROCESS.md
[semantic versioning url]: https://semver.org/
[MIT license url]: https://opensource.org/licenses/MIT
[license url]: ./LICENSE.md
