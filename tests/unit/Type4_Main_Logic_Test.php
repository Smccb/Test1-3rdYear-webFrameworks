<?php
namespace TudublinTest;

use PHPUnit\Framework\TestCase;
use Tudublin\Exchanger;

class Type4_Main_Logic_Test extends TestCase
{
    // add the "assetThrows()" trait to this class ...
    use \Codeception\AssertThrows;

    //--------------------------------------------
    // type 4 tests = TYPE_4_MainLogic
    //--------------------------------------------


    public function test_TYPE_4_01_MainLogic_ExchangeSterling()
    {
        // Arrange
        $exchanger = new Exchanger();
        $amount = 100;
        $currency = 'Sterling';
        $expectedResult = 90;
        $exchanger->setCurrency($currency);

        // Act
        $result = $exchanger->calcEurosUsingCurrencyExchangeRate($amount);

        // Assert
        $this->assertEquals($expectedResult, $result);
    }


    public function test_TYPE_4_02_MainLogic_Throws_Exception_Invalid_Currency()
    {
        $this->assertThrows(\Exception::class, function() {

            // Arrange
            $exchanger = new Exchanger();
            $amount = 5;
            $currency = 'some rubbish string';
            $exchanger->setCurrency($currency);

            // Act
            $result = $exchanger->calcEurosUsingCurrencyExchangeRate($amount);
        });
    }



    public function test_TYPE_4_03_MainLogic_Throws_Exception_Amount_Too_Little()
    {
        $this->assertThrows(\Exception::class, function() {

            // Arrange
            $exchanger = new Exchanger();
            $amount = 0.5;
            $currency = 'Sterling';
            $exchanger->setCurrency($currency);

            // Act
            $result = $exchanger->calcEurosUsingCurrencyExchangeRate($amount);
        });
    }


}
