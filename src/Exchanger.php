<?php

namespace Tudublin;

class Exchanger
{
    private  $currency = '(not set)';
    private $ExchangeRate = -1;

    private $commission;

    private array $list = array("euro", "dollar", "Canadian Dollar", "US Dollar");

    public function __construct()
    {

    }

    /**
     * @param string $currency
     */
    public function setCurrency(string $currency): void
    {
        $this->currency = $currency;
    }

    /**
     * @return string
     */
    public function getCurrency(): string
    {
        return $this->currency;
    }

    /**
     * @return int
     */
    public function getExchangeRate(): int
    {
        return $this->ExchangeRate;
    }
    public function isValidCurrency(): bool{
        /*$tempList = $this->list;
        for ($x = 0; $x <= $tempList.sizeof(); $x= $x+ 1) {
            if($tempList == $this->getCurrency()){
                return true;
            }
        }
        return false;*/

        if(empty($this->getCurrency())){
            return false;
        }
        return true;
    }
    public function calculateCommission(int $amount): float
    {
        $this->commission = 2;
        if($amount < 100){
            return $this->commission;
        }
        else if($amount > 99 && $amount < 200){
            return $this->commission + 0.5;
        }
        else if($amount > 100 && $amount < 300){
            return $this->commission + 3;
        }
        else if($amount > 200 && $amount < 400){
            return $this->commission + 5.5;
        }
        return $this->commission;
    }
    public function calcEurosUsingCurrencyExchangeRate(string $amount): float
    {
        //return $amount + ($amount * );
        return 0;
    }
}