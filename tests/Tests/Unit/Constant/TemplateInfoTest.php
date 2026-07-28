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
 */
final class TemplateInfoTest extends TemplateTestCase
{
    public function testVersionIsSet(): void
    {
        self::assertNotSame('', TemplateInfo::VERSION);
    }

    public function testVersionBuildDateTimeIsSet(): void
    {
        self::assertNotSame('', TemplateInfo::VERSION_BUILD_DATE_TIME);
    }
}
