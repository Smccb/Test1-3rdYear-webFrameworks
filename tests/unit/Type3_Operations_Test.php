<?php
namespace TudublinTest;

use Tudublin\Exchanger;
use PHPUnit\Framework\TestCase;

class Type3_Operations_Test extends TestCase
{

    //--------------------------------------------
    // type 2 tests = TYPE_2_BasicOperations
    //--------------------------------------------
    public function test_TYPE_3_01_BasicOperations_Minimum_Commission_AmountOne()
    {
        // Arrange
        $exchanger = new Exchanger();
        $amount = 1;
        $expectedResult = 2;

        // Act
        $result = $exchanger->calculateCommission($amount);

        // Assert
        $this->assertEquals($expectedResult, $result);
    }


    public function test_TYPE_3_02_BasicOperations_Minimum_Commission_AmountFifty()
    {
        // Arrange
        $exchanger = new Exchanger();
        $amount = 50;
        $expectedResult = 2;

        // Act
        $result = $exchanger->calculateCommission($amount);

        // Assert
        $this->assertEquals($expectedResult, $result);
    }

    public function test_TYPE_3_03_BasicOperations_Minimum_Commission_Max_Threshold()
    {
        // Arrange
        $exchanger = new Exchanger();
        $amount = 99;
        $expectedResult = 2;

        // Act
        $result = $exchanger->calculateCommission($amount);

        // Assert
        $this->assertEquals($expectedResult, $result);
    }

    public function test_TYPE_3_04_BasicOperations_Percentage_Commission_One_Hundred_Threshold()
    {
        // Arrange
        $exchanger = new Exchanger();
        $amount = 100;
        $expectedResult = 2.5;

        // Act
        $result = $exchanger->calculateCommission($amount);

        // Assert
        $this->assertEquals($expectedResult, $result);
    }


    public function test_TYPE_3_05_BasicOperations_Percentage_Commission_Two_Hundred()
    {
        // Arrange
        $exchanger = new Exchanger();
        $amount = 200;
        $expectedResult = 5;

        // Act
        $result = $exchanger->calculateCommission($amount);

        // Assert
        $this->assertEquals($expectedResult, $result);
    }

    public function test_TYPE_3_06_BasicOperations_Percentage_Commission_Three_Hundred()
    {
        // Arrange
        $exchanger = new Exchanger();
        $amount = 300;
        $expectedResult = 7.5;

        // Act
        $result = $exchanger->calculateCommission($amount);

        // Assert
        $this->assertEquals($expectedResult, $result);
    }


}
