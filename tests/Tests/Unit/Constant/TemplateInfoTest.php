<?php

declare(strict_types=1);

/*
 * This file is part of the REPONAME package.
 *
 * (c) Melech Mizrachi <melechmizrachi@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Valkyrja\Template\Tests\Unit\Constant;

use Valkyrja\Template\Constant\TemplateInfo;
use Valkyrja\Template\Tests\Abstract\TemplateTestCase;

/**
 * Test the TemplateInfo constant class.
 *
 * The release workflow rewrites both constants. Each test asserts a format and never an exact value.
 *
 * Each pattern ends with \z, not $, because $ also matches before a trailing newline.
 */
final class TemplateInfoTest extends TemplateTestCase
{
    public function testVersionHasTheVersionFormat(): void
    {
        self::assertMatchesRegularExpression('/^\d+\.\d+\.\d+\z/', TemplateInfo::VERSION);
    }

    public function testVersionBuildDateTimeHasTheBuildDateTimeFormat(): void
    {
        self::assertMatchesRegularExpression(
            '/^[A-Z][a-z]+ \d{1,2} \d{4} \d{2}:\d{2}:\d{2} MST\z/',
            TemplateInfo::VERSION_BUILD_DATE_TIME
        );
    }
}
