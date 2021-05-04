<?php


class PriceFormatter
{
    public function getPrice($number)
    {
        $price = number_format(ceil($number), 0, '', ' ');
        return $price . ' ₽';
    }
}
