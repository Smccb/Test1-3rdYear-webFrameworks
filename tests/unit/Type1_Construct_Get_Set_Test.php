<?php
namespace TudublinTest;

use Tudublin\Exchanger;
use PHPUnit\Framework\TestCase;

class Type1_Construct_Get_Set_Test extends TestCase
{
    //--------------------------------------------
    // type 1 tests = TYPE_1_ConGetSet = Constructor / Getters / Setters
    //--------------------------------------------
    public function test_TYPE_1_01_ConGetSet_NotNullAfterConstruction()
    {
        // Arrange
        $exchanger = new Exchanger();

        // Act

        // Assert
        $this->assertNotNull($exchanger);
    }


    public function test_TYPE_1_02_ConGetSet_DefaultExchangeRate_AfterConstruction()
    {
        // Arrange
        $exchanger = new Exchanger();
        $expectedResult = -1;

        // Act
        $result = $exchanger->getExchangeRate();

        // Assert
        $this->assertEquals($expectedResult, $result);
    }



    public function test_TYPE_1_03_ConGetSet_CurrencyDefault_AfterConstruction()
    {
        // Arrange
        $exchanger = new Exchanger();
        $expectedResult = '(not set)';

        // Act
        $result = $exchanger->getCurrency();

        // Assert
        $this->assertSame($expectedResult, $result);
    }


    public function test_TYPE_1_04_ConGetSet_Currency()
    {
        // Arrange
        $exchanger = new Exchanger();
        $currency = 'Sterling';
        $exchanger->setCurrency($currency);

        // Act
        $result = $exchanger->getCurrency();

        // Assert
        $this->assertSame($currency, $result);
    }


    public function test_TYPE_1_05_ConGetSet_Currency2()
    {
        // Arrange
        $exchanger = new Exchanger();
        $currency = 'Canadian Dollar';
        $exchanger->setCurrency($currency);

        // Act
        $result = $exchanger->getCurrency();

        // Assert
        $this->assertSame($currency, $result);
    }



    public function test_TYPE_1_06_ConGetSet_Currency3()
    {
        // Arrange
        $exchanger = new Exchanger();
        $currency = 'any old string';
        $exchanger->setCurrency($currency);

        // Act
        $result = $exchanger->getCurrency();

        // Assert
        $this->assertSame($currency, $result);
    }

}
