<?php

namespace NothingWorks\WeightConversions;

class Weight
{
    private float $kilograms;

    public static function kilograms(float $kilograms): self
    {
        return new static($kilograms);
    }

    public function __construct(float $kilograms)
    {
        $this->kilograms = $kilograms;
    }

    public function toPounds(): float
    {
        return round($this->kilograms * 2.20462, 2);
    }

    public function toStones(): float
    {
        return round($this->kilograms * 0.15747, 2);
    }
}
