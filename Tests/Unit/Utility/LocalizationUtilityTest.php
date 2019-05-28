<?php
namespace In2code\Powermail\Tests\Unit\Utility;

use In2code\Powermail\Utility\LocalizationUtility;
use Nimut\TestingFramework\TestCase\UnitTestCase;

/**
 * Class LocalizationUtilityTest
 * @coversDefaultClass \In2code\Powermail\Utility\LocalizationUtility
 */
class LocalizationUtilityTest extends UnitTestCase
{

    /**
     * @return void
     * @test
     * @covers ::translate
     */
    public function translateReturnsString()
    {
        $value = (string)rand();
        $this->assertSame($value, LocalizationUtility::translate($value));
        $this->assertSame('Y-m-d H:i', LocalizationUtility::translate('datepicker_format'));
    }
}
