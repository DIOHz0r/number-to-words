<?php

namespace NumberToWords\NumberTransformer;

class PolishNumberTransformer implements NumberTransformer
{
    /**
     * @inheritdoc
     */
    public function toWords($number)
    {
        $converter = new \Numbers_Words();

        return $converter->toWords($number, 'pl');
    }
}
