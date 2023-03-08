<?php
namespace TudublinTest;

use Tudublin\Exchanger;
use PHPUnit\Framework\TestCase;

class Type2_Validation_Test extends TestCase
{


    //--------------------------------------------
    // type 2 tests = TYPE_3_Validation
    //--------------------------------------------
    public function test_TYPE_2_01_Validation_Valid_Currency()
    {
        // Arrange
        $exchanger = new Exchanger();
        $currency = 'Sterling';
        $exchanger->setCurrency($currency);

        // Act
        $result = $exchanger->isValidCurrency();

        // Assert
        $this->assertTrue($result);
    }


    public function test_TYPE_2_02_Validation_Valid_Currency2()
    {
        // Arrange
        $exchanger = new Exchanger();
        $currency = 'Canadian Dollar';
        $exchanger->setCurrency($currency);

        // Act
        $result = $exchanger->isValidCurrency();

        // Assert
        $this->assertTrue($result);
    }


    public function test_TYPE_2_03_Validation_INValid_Currency()
    {
        // Arrange
        $exchanger = new Exchanger();
        $currency = 'Irish Punt';
        $exchanger->setCurrency($currency);

        // Act
        $result = $exchanger->isValidCurrency($currency);

        // Assert
        $this->assertFalse($result);
    }


    public function test_TYPE_2_04_Validation_INValid_Currency2()
    {
        // Arrange
        $exchanger = new Exchanger();
        $currency = 'any old string';
        $exchanger->setCurrency($currency);

        // Act
        $result = $exchanger->isValidCurrency($currency);

        // Assert
        $this->assertFalse($result);
    }


}
